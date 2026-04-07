/* ==========================================
   Slider + Parallax suave (mouse + scroll)
   + Fondo dinámico por slide
   + LOOP
   + Autoplay exacto (cuando termina el tiempo)
   (responsive + touch friendly)
========================================== */

console.log("✅ PARALLAX / SLIDER CARGÓ");

document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("pxSlider");
  const track  = document.getElementById("pxTrack");
  const viewport = slider?.querySelector(".px-viewport");
  const slides = track ? Array.from(track.querySelectorAll("[data-slide]")) : [];
  const dotsWrap = document.getElementById("pxDots");
  const bar = document.getElementById("pxBar");
  const btnPrev = document.getElementById("btnPrev");
  const btnNext = document.getElementById("btnNext");
  const photo = document.getElementById("pxPhoto");

  if (!slider || !track || !viewport || slides.length === 0) return;

  const reduceMotion = window.matchMedia?.("(prefers-reduced-motion: reduce)")?.matches;

  let index = 0;
  let slideW = viewport.getBoundingClientRect().width;
  let isHover = false;

  // Autoplay (sin setInterval): sincroniza barra + cambio exacto
  const AUTOPLAY_MS = 6500;
  let rafAuto = 0;
  let autoElapsed = 0;
  let autoT0 = 0;

  // Build dots
  const dots = slides.map((_, i) => {
    const b = document.createElement("button");
    b.className = "dot";
    b.type = "button";
    b.role = "tab";
    b.setAttribute("aria-label", `Ir a slide ${i + 1}`);
    b.setAttribute("aria-selected", i === 0 ? "true" : "false");
    b.addEventListener("click", () => goTo(i, true));
    dotsWrap?.appendChild(b);
    return b;
  });

  // Resize (mide viewport, no slider)
  const ro = new ResizeObserver(() => {
    slideW = viewport.getBoundingClientRect().width;
    applyTransform(false);
  });
  ro.observe(viewport);

  /* ==========================
     Fondo dinámico por slide
  =========================== */
  function getBgFromSlide(i){
    const img = slides[i]?.querySelector(".slide-media img");
    return img?.getAttribute("src") || "";
  }

  function applyBg(i){
    if (!photo) return;
    const url = getBgFromSlide(i);
    if (!url) return;

    if (photo.dataset.current === url) return;

    if (reduceMotion){
      photo.style.backgroundImage = `url("${url}")`;
      photo.dataset.current = url;
      return;
    }

    photo.classList.add("is-fading");
    const pre = new Image();
    pre.onload = () => {
      photo.style.backgroundImage = `url("${url}")`;
      photo.dataset.current = url;
      requestAnimationFrame(() => photo.classList.remove("is-fading"));
    };
    pre.src = url;
  }

  function setActive(i){
    slides.forEach((s, k) => s.classList.toggle("is-active", k === i));
    dots.forEach((d, k) => d.setAttribute("aria-selected", k === i ? "true" : "false"));
    applyBg(i);
  }

  function applyTransform(animate = true){
    if (!animate || reduceMotion) track.style.transition = "none";
    else track.style.transition = "";

    track.style.transform = `translate3d(${-index * slideW}px, 0, 0)`;
    setActive(index);
  }

  /* ==========================
     LOOP real (wrap)
  =========================== */
  function goTo(i, animate = true){
    const last = slides.length - 1;

    if (i > last){
      index = 0;
      applyTransform(false);
      restartAutoplay();
      return;
    }
    if (i < 0){
      index = last;
      applyTransform(false);
      restartAutoplay();
      return;
    }

    index = i;
    applyTransform(animate);
    restartAutoplay();
  }

  function prev(){ goTo(index - 1, true); }
  function next(){ goTo(index + 1, true); }

  btnPrev?.addEventListener("click", prev);
  btnNext?.addEventListener("click", next);

  // Keyboard
  slider.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") prev();
    if (e.key === "ArrowRight") next();
    if (e.key === "Home") goTo(0, true);
    if (e.key === "End") goTo(slides.length - 1, true);
  });
  slider.tabIndex = 0;

  /* ==========================
     Autoplay exacto + progress
  =========================== */
  function setProgress(p){
    if (!bar) return;
    bar.style.width = `${Math.max(0, Math.min(1, p)) * 100}%`;
  }

  function stopAutoplay(){
    cancelAnimationFrame(rafAuto);
    rafAuto = 0;
    autoElapsed = 0;
    setProgress(0);
  }

  function tickAutoplay(t){
    if (!autoT0) autoT0 = t;

    if (isHover){
      autoT0 = t;
      rafAuto = requestAnimationFrame(tickAutoplay);
      return;
    }

    const dt = t - autoT0;
    autoT0 = t;
    autoElapsed += dt;

    const p = autoElapsed / AUTOPLAY_MS;
    setProgress(p);

    if (autoElapsed >= AUTOPLAY_MS){
      autoElapsed = 0;
      setProgress(0);
      next(); // cambia justo al terminar el tiempo
      return;
    }

    rafAuto = requestAnimationFrame(tickAutoplay);
  }

  function startAutoplay(){
    if (reduceMotion) return;
    stopAutoplay();
    autoElapsed = 0;
    autoT0 = 0;
    rafAuto = requestAnimationFrame(tickAutoplay);
  }

  function restartAutoplay(){
    startAutoplay();
  }

  slider.addEventListener("mouseenter", () => { isHover = true; });
  slider.addEventListener("mouseleave", () => { isHover = false; });

  // Touch / drag swipe
  let dragging = false;
  let startX = 0;
  let currentX = 0;

  slider.addEventListener("pointerdown", (e) => {
    dragging = true;
    startX = e.clientX;
    currentX = startX;
    track.style.transition = "none";
    slider.setPointerCapture?.(e.pointerId);
  });

  slider.addEventListener("pointermove", (e) => {
    if (!dragging) return;
    currentX = e.clientX;
    const dx = currentX - startX;
    const base = -index * slideW;
    track.style.transform = `translate3d(${base + dx}px,0,0)`;
  });

  slider.addEventListener("pointerup", () => {
    if (!dragging) return;
    dragging = false;

    const dx = currentX - startX;
    const TH = Math.max(56, slideW * 0.12);

    if (dx > TH) prev();
    else if (dx < -TH) next();
    else applyTransform(true);
  });

  slider.addEventListener("pointercancel", () => {
    dragging = false;
    applyTransform(true);
  });

  // Parallax: mouse inside slider (✅ no en touch)
  let raf = 0;

  function setParallaxVars(clientX, clientY){
    const r = slider.getBoundingClientRect();
    const x = (clientX - r.left) / r.width;
    const y = (clientY - r.top) / r.height;

    const nx = (x - 0.5) * 2;
    const ny = (y - 0.5) * 2;

    const mx = nx * 18;
    const my = ny * 14;

    slider.style.setProperty("--mx", `${mx}px`);
    slider.style.setProperty("--my", `${my}px`);
    slider.style.setProperty("--slideX", `${nx * 14}px`);
    slider.style.setProperty("--slideY", `${ny * 10}px`);
  }

  slider.addEventListener("pointermove", (e) => {
    if (reduceMotion) return;
    if (e.pointerType === "touch") return; // ✅ clave para móvil
    cancelAnimationFrame(raf);
    raf = requestAnimationFrame(() => setParallaxVars(e.clientX, e.clientY));
  });

  slider.addEventListener("pointerleave", () => {
    slider.style.setProperty("--mx", `0px`);
    slider.style.setProperty("--my", `0px`);
    slider.style.setProperty("--slideX", `0px`);
    slider.style.setProperty("--slideY", `0px`);
  });

  // Parallax: scroll (fondo muy suave)
  function onScroll(){
    if (reduceMotion) return;
    slider.style.setProperty("--scrollY", `${window.scrollY || 0}px`);
  }
  window.addEventListener("scroll", onScroll, { passive:true });
  onScroll();

  // Init
  applyTransform(false);
  startAutoplay();
});
