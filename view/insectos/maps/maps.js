(() => {
  const sections = [...document.querySelectorAll(".eco")];
  if (!sections.length) return;

  // ===== Reveal: aparece al entrar, se oculta al salir (sirve subiendo/bajando)
  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      const reveals = entry.target.querySelectorAll(".js-reveal-left, .js-reveal-right");
      reveals.forEach((el) => el.classList.toggle("is-visible", entry.isIntersecting));
    });
  }, { threshold: 0.28 });

  sections.forEach((s) => io.observe(s));

  // ===== Parallax: siempre activo (sube/baja)
  const clamp = (v, min, max) => Math.min(max, Math.max(min, v));

  function updateParallax(){
    const vh = window.innerHeight || 1;

    sections.forEach((section) => {
      const img = section.querySelector(".js-parallax-img");
      if (!img) return;

      const rect = section.getBoundingClientRect();

      // progreso 0..1 según posición de la sección en pantalla
      const p = clamp((vh - rect.top) / (vh + rect.height), 0, 1);

      // movimiento suave (ajusta el 50)
      const y = (p - 0.5) * 50; // 30 suave, 70 fuerte
      img.style.setProperty("--py", `${y}px`);
    });
  }

  let raf = 0;
  function onScroll(){
    if (raf) return;
    raf = requestAnimationFrame(() => {
      raf = 0;
      updateParallax();
    });
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll);
  updateParallax();
})();
