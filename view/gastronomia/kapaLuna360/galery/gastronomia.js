const filterBar = document.querySelector('.categories_food_gallery');
const gallery   = document.querySelector('.food_gallery_container');
const cards     = Array.from(gallery.querySelectorAll('.food_card'));

filterBar.addEventListener('click', (e) => {
  const btn = e.target.closest('.filter_items');
  if (!btn) return;

  // Active visual
  filterBar.querySelector('.active')?.classList.remove('active');
  btn.classList.add('active');

  const filter = btn.dataset.filter; // 'all', 'Volcanes', 'Parrilla', 'postres', 'cocteles'

  // Mostrar/ocultar por clase
  for (const card of cards) {
    const match = filter === 'all' || card.classList.contains(filter);
    card.classList.toggle('is-hidden', !match);
  }
});
