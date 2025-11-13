const filterBar = document.querySelector('.categories_food_gallery');
const gallery   = document.querySelector('.food_gallery_container');
if (!filterBar || !gallery) return;

const cards = Array.from(gallery.querySelectorAll('.food_card'));

filterBar.addEventListener('click', (e) => {
  const btn = e.target.closest('.filter_items');
  if (!btn) return;

  // Visual activo + ARIA
  filterBar.querySelector('.active')?.classList.remove('active');
  btn.classList.add('active');
  filterBar.querySelectorAll('[role="tab"]').forEach(tab => {
    tab.setAttribute('aria-selected', tab === btn ? 'true' : 'false');
  });

  const filter = btn.dataset.filter.toLowerCase();

  for (const card of cards) {
    // Compara en minúsculas para evitar problemas de caso
    const classes = card.className.toLowerCase().split(/\s+/);
    const match = filter === 'all' || classes.includes(filter);

    // opción A: usar atributo hidden (recomendado)
    card.hidden = !match;

    // opción B: si prefieres la clase (asegúrate del CSS de arriba)
    // card.classList.toggle('is-hidden', !match);
  }
});
