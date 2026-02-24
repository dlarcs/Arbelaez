(() => {
  const hero = document.querySelector("#hero");
  const bg   = document.querySelector("#heroBg");
  const items = [...document.querySelectorAll("[data-parallax-text]")];

  const clamp = (v,min,max)=>Math.min(max,Math.max(min,v));

  function update(){
    const rect = hero.getBoundingClientRect();
    const vh = window.innerHeight || 1;

    // progreso 0->1 mientras sales del hero
    const end = vh * 0.9;
    const p = clamp((0 - rect.top) / end, 0, 1);

    // ✅ Parallax de la imagen (más suave / lento)
    // negativo = se mueve “más lento” que el scroll (efecto parallax clásico)
    const bgY = -p * 100; // ajusta: 40 suave, 100 fuerte
    bg.style.setProperty("--bgY", `${bgY}px`);

    // ✅ Texto: baja + desaparece
    items.forEach((el, i) => {
      const localP = clamp(p + i*0.06, 0, 1);
      const y  = localP * 90; // baja
      const op = clamp(1 - localP * 1.25, 0, 1); // desaparece
      el.style.transform = `translate3d(0, ${y}px, 0)`;
      el.style.opacity = op;
    });
  }

  let raf = 0;
  function onScroll(){
    if (raf) return;
    raf = requestAnimationFrame(() => { raf = 0; update(); });
  }

  window.addEventListener("scroll", onScroll, { passive:true });
  window.addEventListener("resize", onScroll);
  update();
})();
// Al hacer click, baja exactamente 100vh (una pantalla) con scroll suave
document.querySelector(".scroll-down")?.addEventListener("click", (e) => {
  e.preventDefault();
  window.scrollBy({
    top: window.innerHeight,
    left: 0,
    behavior: "smooth",
  });
});
