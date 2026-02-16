// app.js
(() => {
  const yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const reduceMotion = window.matchMedia?.("(prefers-reduced-motion: reduce)")?.matches;
  if (reduceMotion) return;

  const sections = Array.from(document.querySelectorAll(".cat[data-parallax]"));
  if (!sections.length) return;

  let raf = 0;

  const clamp = (n, a, b) => Math.max(a, Math.min(b, n));
  const isMobile = () => window.matchMedia?.("(max-width: 720px)")?.matches;

  function update() {
    raf = 0;

    const viewportH = window.innerHeight;
    const centerY = viewportH / 2;
    const mobile = isMobile();

    for (const el of sections) {
      const rect = el.getBoundingClientRect();
      const elCenter = rect.top + rect.height / 2;

      const dist = (elCenter - centerY) / (centerY || 1); // -1..1 aprox
      const d = clamp(dist, -1.25, 1.25);

      const bgStrength = Number(el.dataset.bg || (mobile ? 70 : 95));
      const fgStrength = Number(el.dataset.fg || (mobile ? 18 : 26));

      el.style.setProperty("--bg-y", `${(-d * bgStrength).toFixed(2)}px`);
      el.style.setProperty("--fg-y", `${(-d * fgStrength).toFixed(2)}px`);
    }
  }

  function requestTick() {
    if (raf) return;
    raf = requestAnimationFrame(update);
  }

  update();
  window.addEventListener("scroll", requestTick, { passive: true });
  window.addEventListener("resize", requestTick);
})();
