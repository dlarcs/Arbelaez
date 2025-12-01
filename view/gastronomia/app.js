const indicator = document.querySelector('.scroll-indicator');

if (indicator) {
  // Scroll suave al hacer click
  indicator.addEventListener('click', () => {
    window.scrollBy({
      top: window.innerHeight * 5000,
      behavior: 'smooth'
    });
  });

  // Ocultar al hacer scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 5000) {
      indicator.classList.add('hidden');
    } else {
      indicator.classList.remove('hidden');
    }
  });
}
