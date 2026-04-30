(() => {
  const sliderEl = document.getElementById("sliderMain");
  if (!sliderEl) return;

  const slides = sliderEl.querySelectorAll(".slider__image");
  const dotsWrap = sliderEl.querySelector("[data-slider-dots]");
  const prevBtn = sliderEl.querySelector("[data-slider-prev]");
  const nextBtn = sliderEl.querySelector("[data-slider-next]");
  const progressBar = sliderEl.querySelector("[data-slider-progress]");

  const titleEl = document.getElementById("sliderTitle");
  const descEl = document.getElementById("sliderDesc");
  const badgeTextEl = sliderEl.querySelector(".slider__badgeText");
  const primaryLink = document.getElementById("sliderBtnPrimary");

  const slideContent = [
    {
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arbeláez se llena de",
      titleAccent: "color",
      desc: "Iniciativa comunitaria para embellecer, dar identidad visual y aumentar la visibilidad de los negocios de Arbeláez mediante murales, pintura de fachadas y señalización.",
      button: "Conocer más",
      href: "#rifa",
    },
    {
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Murales que cuentan",
      titleAccent: "historias",
      desc: "Arte público para fortalecer la identidad del municipio y hacer que cada calle se sienta más viva y memorable. Próximamente Arbeláez se llena de color.",
      button: "Próximamente",
      href: "#conocer",
    },
    {
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Gastronomía",
      titleAccent: "Arbeláense",
      desc: "Gastronomía casera y sabores auténticos en Arbeláez, perfectos para compartir y recordar.",
      button: "Haz clic aquí",
      href: "../../gastronomia/index.php",
    },
    {
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arte que",
      titleAccent: "inspira",
      desc: "En Arbeláez las artesanías no son solo objetos: son memoria y cultura viva, creadas con amor para acompañar la vida diaria.",
      button: "Haz clic aquí",
      href: "../../artesanias/index.php",
    },
    {
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Alojamientos con",
      titleAccent: "estilo",
      desc: "Entre montañas y tranquilidad, encuentras el lugar ideal para recargar energía y crear recuerdos inolvidables.",
      button: "Haz clic aquí",
      href: "../../alojamiento/index.php",
    },
  ];

  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  let index = 0;
  let timer = null;
  let progressFrame = null;
  let startTime = 0;

  const AUTOPLAY_MS = 6500;

  function updateContent(slide) {
    badgeTextEl.textContent = slide.badge;

    titleEl.innerHTML = `
      ${slide.titleTop}<br>
      <span class="slider__titleGradient">${slide.titleAccent}</span>
    `;

    descEl.textContent = slide.desc;
    primaryLink.textContent = slide.button;
    primaryLink.href = slide.href;
  }

  function updateSlides() {
    slides.forEach((slide, i) => {
      slide.classList.toggle("is-active", i === index);
    });
  }

  function buildDots() {
    dotsWrap.innerHTML = "";

    slides.forEach((_, i) => {
      const dot = document.createElement("button");
      dot.className = "sliderDot";
      dot.type = "button";
      dot.setAttribute("role", "tab");
      dot.setAttribute("aria-label", `Ir al slide ${i + 1}`);
      dot.setAttribute("aria-selected", i === index ? "true" : "false");

      dot.addEventListener("click", () => goTo(i, true));

      dotsWrap.appendChild(dot);
    });
  }

  function syncDots() {
    dotsWrap.querySelectorAll(".sliderDot").forEach((dot, i) => {
      dot.setAttribute("aria-selected", i === index ? "true" : "false");
    });
  }

  function goTo(nextIndex, userAction = false) {
    index = (nextIndex + slides.length) % slides.length;

    if (!reducedMotion) {
      sliderEl.classList.add("is-textOut");
    }

    window.setTimeout(() => {
      updateSlides();
      updateContent(slideContent[index]);
      syncDots();

      if (!reducedMotion) {
        sliderEl.classList.remove("is-moving");
        void sliderEl.offsetWidth;
        sliderEl.classList.add("is-moving");
        sliderEl.classList.remove("is-textOut");
      }

      if (userAction) startAutoplay();
    }, reducedMotion ? 0 : 260);
  }

  function next(userAction = false) {
    goTo(index + 1, userAction);
  }

  function prev(userAction = false) {
    goTo(index - 1, userAction);
  }

  function stopAutoplay() {
    clearInterval(timer);
    cancelAnimationFrame(progressFrame);

    timer = null;
    progressFrame = null;

    if (progressBar) {
      progressBar.style.width = "0%";
    }
  }

  function animateProgress() {
    const elapsed = performance.now() - startTime;
    const percentage = Math.min(100, (elapsed / AUTOPLAY_MS) * 100);

    if (progressBar) {
      progressBar.style.width = `${percentage}%`;
    }

    progressFrame = requestAnimationFrame(animateProgress);
  }

  function startAutoplay() {
    stopAutoplay();

    startTime = performance.now();
    animateProgress();

    timer = setInterval(() => {
      next(false);
      startTime = performance.now();
    }, AUTOPLAY_MS);
  }

  nextBtn.addEventListener("click", () => next(true));
  prevBtn.addEventListener("click", () => prev(true));

  sliderEl.addEventListener("mouseenter", stopAutoplay);
  sliderEl.addEventListener("mouseleave", startAutoplay);

  let touchX = 0;
  let touchY = 0;

  sliderEl.addEventListener("touchstart", (event) => {
    touchX = event.touches[0].clientX;
    touchY = event.touches[0].clientY;
  }, { passive: true });

  sliderEl.addEventListener("touchend", (event) => {
    const dx = event.changedTouches[0].clientX - touchX;
    const dy = event.changedTouches[0].clientY - touchY;

    if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy)) {
      dx < 0 ? next(true) : prev(true);
    }
  }, { passive: true });

  buildDots();
  updateContent(slideContent[0]);

  if (!reducedMotion) {
    sliderEl.classList.add("is-moving");
  }

  startAutoplay();
})();
