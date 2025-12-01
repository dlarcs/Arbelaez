const indicator = document.querySelector('.scroll-indicator');

if (indicator) {
  // Scroll suave al hacer click
  indicator.addEventListener('click', () => {
    window.scrollBy({
      top: window.innerHeight * 3500,
      behavior: 'smooth'
    });
  });

  // Ocultar al hacer scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 3500) {
      indicator.classList.add('hidden');
    } else {
      indicator.classList.remove('hidden');
    }
  });
}
