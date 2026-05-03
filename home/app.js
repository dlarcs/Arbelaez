const indicator = document.querySelector('.scroll-indicator');

if (indicator) {
  // Cuántos vh quieres que baje al hacer click
  const SCROLL_AMOUNT_VH = 80;   // 80vh
  // A partir de qué punto (en vh) se esconde la flecha
  const HIDE_AFTER_VH = 510;      // 60vh

  // Función auxiliar para convertir vh a píxeles
  const vhToPx = (vh) => (window.innerHeight / 100) * vh;

  // Scroll suave al hacer click
  indicator.addEventListener('click', () => {
    window.scrollBy({
      top: vhToPx(SCROLL_AMOUNT_VH), // baja 80vh
      behavior: 'smooth'
    });
  });

  // Ocultar al hacer scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > vhToPx(HIDE_AFTER_VH)) { // si bajó más de 60vh
      indicator.classList.add('hidden');
    } else {
      indicator.classList.remove('hidden');
    }
  });
}

const lazySections = document.querySelectorAll('.lazy-section');

const sectionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(async entry => {
    if (!entry.isIntersecting) return;

    const section = entry.target;
    const url = section.dataset.url;

    try {
      const response = await fetch(url);
      const html = await response.text();

      section.innerHTML = html;
      section.classList.add('is-loaded');

      observer.unobserve(section);
    } catch (error) {
      section.innerHTML = '<p>No se pudo cargar esta sección.</p>';
    }
  });
}, {
  rootMargin: '300px'
});

lazySections.forEach(section => sectionObserver.observe(section));
