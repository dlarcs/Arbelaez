document.addEventListener('DOMContentLoaded', () => {
  const filterBar = document.querySelector('.categories_food_gallery');
  const cards = document.querySelectorAll('.food_card');
  if (!filterBar || !cards.length) return;

  filterBar.addEventListener('click', (e) => {
    const btn = e.target.closest('.filter_items');
    if (!btn) return;

    // Visual activo
    filterBar.querySelector('.active')?.classList.remove('active');
    btn.classList.add('active');

    // Filtro (case-insensitive)
    const filter = (btn.dataset.filter || 'all').toLowerCase();

    cards.forEach((card) => {
      const classes = card.className.toLowerCase();
      const match = filter === 'all' || classes.includes(filter);
      card.hidden = !match; // oculta/muestra sin inline styles
    });
  });
});
