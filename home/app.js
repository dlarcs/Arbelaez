const lazySections = document.querySelectorAll('.lazy-section');

const sectionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;

    const section = entry.target;
    const url = section.dataset.url;

    if (!url) {
      observer.unobserve(section);
      return;
    }

    fetch(url)
      .then(response => response.text())
      .then(html => {
        section.innerHTML = html;

        requestAnimationFrame(() => {
          section.classList.add('is-loaded');
        });

        observer.unobserve(section);
      })
      .catch(() => {
        section.innerHTML = '<p>No se pudo cargar esta sección.</p>';
        section.classList.add('is-loaded');
        observer.unobserve(section);
      });
  });
}, {
  rootMargin: '250px 0px',
  threshold: 0.05
});

lazySections.forEach(section => {
  sectionObserver.observe(section);
});
