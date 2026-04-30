(() => {
  const sliderEl = document.getElementById("sliderMain");
  const sliderBg = sliderEl.querySelector(".slider__bg");
  const sliderDotsWrap = sliderEl.querySelector("[data-slider-dots]");
  const sliderPrevBtn = sliderEl.querySelector("[data-slider-prev]");
  const sliderNextBtn = sliderEl.querySelector("[data-slider-next]");
  const sliderProgressBar = sliderEl.querySelector("[data-slider-progress]");

  // ✅ Slides (sin ghostText / ghostHref)
  const sliderSlides = [
    {
      img: "../../../home/img/parque_principal1.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arbeláez se llena de",
      titleAccent: "color",
      desc:
        "Iniciativa comunitaria para embellecer, dar identidad visual y aumentar la visibilidad de los negocios de Arbeláez mediante murales, pintura de fachadas y señalización.",
      primaryText: "Conocer más",
      primaryHref: "#rifa",
    },
    {
      img: "../../../home/img/lugar2.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Murales que cuentan",
      titleAccent: "historias",
      desc:
        "Arte público para fortalecer la identidad del municipio y hacer que cada calle se sienta más viva y memorable. Proximamente arbelaez se llena de color",
      primaryText: "Proximamente",
      primaryHref: "#conocer",
    },
    {
      img: "../../../gastronomia/La_Marranada/img/especial7.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Gastronomía",
      titleAccent: "Arbelaence",
      desc:
        "Gastronomía casera y sabores auténticos en Arbeláez, perfectos para compartir y recordar.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../gastronomia/index.php",
    },
    {
      img: "../../../artesanias/Artesanias_Martha_E/img/manillas2.jpeg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arte que",
      titleAccent: "inspira",
      desc:
        "Arbeláez las artesanías no son solo objetos: son memoria y cultura viva, creadas con amor para acompañar la vida diaria.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../artesanias/index.php",
    },
    {
      img: "../../../alojamiento/Casa_Kiyari/img/general12.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Alojamientos con",
      titleAccent: "estilo",
      desc:
        "Entre montañas y tranquilidad, encuentras el lugar ideal para recargar energía y crear recuerdos inolvidables.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../alojamiento/index.php",
    },
  ];

  const sliderTitleEl = document.getElementById("sliderTitle");
  const sliderBadgeEl = document.getElementById("sliderBadge");
  const sliderDescEl = document.getElementById("sliderDesc");
  const sliderPrimaryLink = document.getElementById("sliderBtnPrimary");

  const sliderReducedMotion =
    window.matchMedia?.("(prefers-reduced-motion: reduce)")?.matches;

  let sliderIndex = 0;
  let sliderTimer = null;

  const SLIDER_AUTOPLAY_MS = 6500;
  const SLIDER_TEXT_OUT_MS = sliderReducedMotion ? 0 : 260;
  const SLIDER_AFTER_SWAP_MS = sliderReducedMotion ? 0 : 80;

  // Preload
  sliderSlides.forEach((s) => {
    const img = new Image();
    img.src = s.img;
  });

  function sliderSetText(slide) {
    sliderBadgeEl.querySelector(".slider__badgeText").textContent = slide.badge;

    sliderTitleEl.innerHTML = `
      ${slide.titleTop}<br />
      <span class="slider__titleGradient">${slide.titleAccent}</span>
    `;

    sliderDescEl.textContent = slide.desc;

    sliderPrimaryLink.textContent = slide.primaryText;
    sliderPrimaryLink.setAttribute("href", slide.primaryHref);
  }

  function sliderSetBg(slide) {
    sliderBg.style.opacity = "0";
    window.setTimeout(() => {
      sliderBg.style.backgroundImage = `url("${slide.img}")`;
      sliderBg.style.opacity = "1";
    }, sliderReducedMotion ? 0 : 220);
  }

  function sliderBuildDots() {
    sliderDotsWrap.innerHTML = "";
    sliderSlides.forEach((_, i) => {
      const dot = document.createElement("button");
      dot.className = "sliderDot";
      dot.type = "button";
      dot.setAttribute("role", "tab");
      dot.setAttribute("aria-label", `Ir al slide ${i + 1}`);
      dot.setAttribute(
        "aria-selected",
        i === sliderIndex ? "true" : "false"
      );
      dot.addEventListener("click", () => sliderGoTo(i, true));
      sliderDotsWrap.appendChild(dot);
    });
  }

  function sliderSyncDots() {
    const dots = sliderDotsWrap.querySelectorAll(".sliderDot");
    dots.forEach((d, i) =>
      d.setAttribute("aria-selected", i === sliderIndex ? "true" : "false")
    );
  }

  function sliderGoTo(nextIndex, userAction = false) {
    sliderIndex = (nextIndex + sliderSlides.length) % sliderSlides.length;

    if (!sliderReducedMotion) sliderEl.classList.add("is-textOut");

    window.setTimeout(() => {
      sliderSetText(sliderSlides[sliderIndex]);
      sliderSetBg(sliderSlides[sliderIndex]);
      sliderSyncDots();

      if (!sliderReducedMotion) {
        sliderEl.classList.remove("is-moving");
        void sliderEl.offsetWidth;
        sliderEl.classList.add("is-moving");
      }

      window.setTimeout(() => {
        sliderEl.classList.remove("is-textOut");
      }, SLIDER_AFTER_SWAP_MS);

      if (userAction) sliderRestartAutoplay();
    }, SLIDER_TEXT_OUT_MS);
  }

  function sliderNext(userAction = false) {
    sliderGoTo(sliderIndex + 1, userAction);
  }
  function sliderPrev(userAction = false) {
    sliderGoTo(sliderIndex - 1, userAction);
  }

  function sliderStartAutoplay() {
    sliderStopAutoplay();
    let start = performance.now();

    sliderTimer = window.setInterval(() => {
      sliderNext(false);
      start = performance.now();
    }, SLIDER_AUTOPLAY_MS);

    if (sliderProgressBar) {
      const tick = () => {
        if (!sliderTimer) return;
        const now = performance.now();
        const pct = Math.min(100, ((now - start) / SLIDER_AUTOPLAY_MS) * 100);
        sliderProgressBar.style.width = pct + "%";
        requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    }
  }

  function sliderStopAutoplay() {
    if (sliderTimer) {
      clearInterval(sliderTimer);
      sliderTimer = null;
    }
    if (sliderProgressBar) sliderProgressBar.style.width = "0%";
  }

  function sliderRestartAutoplay() {
    sliderStartAutoplay();
  }

  // Pause on hover
  sliderEl.addEventListener("mouseenter", () => sliderStopAutoplay());
  sliderEl.addEventListener("mouseleave", () => sliderStartAutoplay());

  // Buttons
  sliderNextBtn.addEventListener("click", () => sliderNext(true));
  sliderPrevBtn.addEventListener("click", () => sliderPrev(true));

  // Keyboard
  window.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") sliderNext(true);
    if (e.key === "ArrowLeft") sliderPrev(true);
  });

  // Swipe (mobile)
  let touchX = 0;
  let touchY = 0;

  sliderEl.addEventListener(
    "touchstart",
    (e) => {
      const t = e.touches[0];
      touchX = t.clientX;
      touchY = t.clientY;
    },
    { passive: true }
  );

  sliderEl.addEventListener(
    "touchend",
    (e) => {
      const t = e.changedTouches[0];
      const dx = t.clientX - touchX;
      const dy = t.clientY - touchY;

      if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy)) {
        if (dx < 0) sliderNext(true);
        else sliderPrev(true);
      }
    },
    { passive: true }
  );

  // Init
  sliderBg.style.backgroundImage = `url("${sliderSlides[0].img}")`;
  sliderSetText(sliderSlides[0]);
  sliderBuildDots();

  if (!sliderReducedMotion) sliderEl.classList.add("is-moving");
  sliderStartAutoplay();
})();
