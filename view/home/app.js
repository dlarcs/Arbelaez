(() => {
  const indicator = document.querySelector('.scroll-indicator');
  if (!indicator) return;

  const mqReduce = window.matchMedia('(prefers-reduced-motion: reduce)');

  // Config
  const SCROLL_FRACTION = 0.85;     // baja 85% del alto visible
  const HIDE_AFTER_VH = 280;        // se esconde después de 280vh

  let ticking = false;

  const vhToPx = (vh) => (window.innerHeight * vh) / 100;

  const getMaxScroll = () => {
    const doc = document.documentElement;
    return Math.max(0, doc.scrollHeight - window.innerHeight);
  };

  const updateVisibility = () => {
    const maxScroll = getMaxScroll();
    const canScroll = maxScroll > 8;

    const hideAfterPx = vhToPx(HIDE_AFTER_VH);
    const nearBottom = window.scrollY >= (maxScroll - 6);

    const hidden = !canScroll || nearBottom || window.scrollY > hideAfterPx;

    indicator.classList.toggle('is-hidden', hidden);
    indicator.setAttribute('aria-hidden', String(hidden));
    indicator.tabIndex = hidden ? -1 : 0;
  };

  const scrollDown = () => {
    const amount = Math.round(window.innerHeight * SCROLL_FRACTION);
    const target = Math.min(window.scrollY + amount, getMaxScroll());

    window.scrollTo({
      top: target,
      behavior: mqReduce.matches ? 'auto' : 'smooth'
    });
  };

  indicator.addEventListener('click', scrollDown);

  window.addEventListener('scroll', () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => {
      updateVisibility();
      ticking = false;
    });
  }, { passive: true });

  window.addEventListener('resize', updateVisibility);

  // Compat: algunos navegadores usan addListener/removeListener
  if (mqReduce.addEventListener) {
    mqReduce.addEventListener('change', updateVisibility);
  } else if (mqReduce.addListener) {
    mqReduce.addListener(updateVisibility);
  }

  updateVisibility();
})();
