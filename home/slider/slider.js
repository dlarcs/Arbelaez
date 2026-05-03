(() => {
  const slider = document.getElementById("sliderMain");
  if (!slider) return;

  const bg = slider.querySelector(".slider__bg");
  const dotsWrap = slider.querySelector("[data-slider-dots]");
  const prevBtn = slider.querySelector("[data-slider-prev]");
  const nextBtn = slider.querySelector("[data-slider-next]");

  const title = document.getElementById("sliderTitle");
  const badge = document.getElementById("sliderBadge")?.querySelector(".slider__badgeText");
  const desc = document.getElementById("sliderDesc");
  const btn = document.getElementById("sliderBtnPrimary");

  const slides = [
    {
      img: "../../../home/img/parque_principal1.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arbeláez se llena de",
      titleAccent: "color",
      desc: "Iniciativa comunitaria para embellecer, dar identidad visual y aumentar la visibilidad de los negocios de Arbeláez mediante murales, pintura de fachadas y señalización.",
      primaryText: "Conocer más",
      primaryHref: "#rifa"
    },
    {
      img: "../../../home/img/lugar2.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Murales que cuentan",
      titleAccent: "historias",
      desc: "Arte público para fortalecer la identidad del municipio y hacer que cada calle se sienta más viva y memorable. Próximamente Arbeláez se llena de color.",
      primaryText: "Próximamente",
      primaryHref: "#conocer"
    },
    {
      img: "../../../gastronomia/La_Marranada/img/especial7.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Gastronomía",
      titleAccent: "Arbelaence",
      desc: "Gastronomía casera y sabores auténticos en Arbeláez, perfectos para compartir y recordar.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../gastronomia/index.php"
    },
    {
      img: "../../../artesanias/Artesanias_Martha_E/img/manillas2.jpeg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Arte que",
      titleAccent: "inspira",
      desc: "En Arbeláez las artesanías no son solo objetos: son memoria y cultura viva, creadas con amor para acompañar la vida diaria.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../artesanias/index.php"
    },
    {
      img: "../../../alojamiento/Casa_Kiyari/img/general12.jpg",
      badge: "Arbeláez, Cundinamarca • 2026",
      titleTop: "Alojamientos con",
      titleAccent: "estilo",
      desc: "Entre montañas y tranquilidad, encuentras el lugar ideal para recargar energía y crear recuerdos inolvidables.",
      primaryText: "Haz clic aquí",
      primaryHref: "../../../alojamiento/index.php"
    }
  ];

  let index = 0;
  let timer = null;
  const delay = 6500;
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  const dots = slides.map((_, i) => {
    const dot = document.createElement("button");
    dot.className = "sliderDot";
    dot.type = "button";
    dot.setAttribute("aria-label", `Ir al slide ${i + 1}`);
    dot.addEventListener("click", () => goTo(i, true));
    dotsWrap.appendChild(dot);
    return dot;
  });

  function render() {
    const slide = slides[index];

    bg.style.backgroundImage = `url("${slide.img}")`;
    badge.textContent = slide.badge;

    title.replaceChildren(
      document.createTextNode(slide.titleTop),
      document.createElement("br"),
      Object.assign(document.createElement("span"), {
        className: "slider__titleGradient",
        textContent: slide.titleAccent
      })
    );

    desc.textContent = slide.desc;
    btn.textContent = slide.primaryText;
    btn.href = slide.primaryHref;

    dots.forEach((dot, i) => {
      dot.setAttribute("aria-selected", i === index ? "true" : "false");
    });
  }

  function goTo(nextIndex, restart = false) {
    index = (nextIndex + slides.length) % slides.length;
    render();

    if (restart) start();
  }

  function next(restart = false) {
    goTo(index + 1, restart);
  }

  function prev(restart = false) {
    goTo(index - 1, restart);
  }

  function start() {
    stop();

    if (reducedMotion) return;

    timer = setInterval(() => {
      next(false);
    }, delay);
  }

  function stop() {
    if (!timer) return;

    clearInterval(timer);
    timer = null;
  }

  prevBtn?.addEventListener("click", () => prev(true));
  nextBtn?.addEventListener("click", () => next(true));

  slider.addEventListener("mouseenter", stop);
  slider.addEventListener("mouseleave", start);

  slider.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") next(true);
    if (e.key === "ArrowLeft") prev(true);
  });

  let touchX = 0;

  slider.addEventListener("touchstart", (e) => {
    touchX = e.touches[0].clientX;
  }, { passive: true });

  slider.addEventListener("touchend", (e) => {
    const dx = e.changedTouches[0].clientX - touchX;

    if (Math.abs(dx) < 50) return;

    dx < 0 ? next(true) : prev(true);
  }, { passive: true });

  render();
  start();
})();
