// Filtros por categoría + accesibilidad + teclado + URL ?cat=
(function(){
  const filterBar = document.querySelector('.restos_filters');
  if (!filterBar) return;

  const buttons = Array.from(filterBar.querySelectorAll('.filter_btn'));
  const cards = Array.from(document.querySelectorAll('.resto_card'));

  // Aplica filtro
  function applyFilter(filter){
    buttons.forEach(b => {
      const active = b.dataset.filter === filter || (filter === 'all' && b.dataset.filter === 'all');
      b.classList.toggle('is-active', active);
      b.setAttribute('aria-pressed', String(active));
    });

    cards.forEach(card => {
      const matches = card.classList.contains(filter);
      const show = filter === 'all' || matches;
      if (show){
        if (card.hidden){
          card.hidden = false;
          // Animación de entrada
          card.animate(
            [{opacity: 0, transform:'translateY(6px)'}, {opacity: 1, transform:'translateY(0)'}],
            {duration: 220, easing: 'ease-out'}
          );
        }
      } else {
        card.hidden = true;
      }
    });
  }

  // Click
  filterBar.addEventListener('click', (e) => {
    const btn = e.target.closest('.filter_btn');
    if (!btn) return;
    applyFilter(btn.dataset.filter);
    // sincroniza URL (opcional)
    const url = new URL(location.href);
    if (btn.dataset.filter === 'all') url.searchParams.delete('cat');
    else url.searchParams.set('cat', btn.dataset.filter);
    history.replaceState({}, '', url);
  });

  // Teclado: mover foco con flechas dentro del toolbar
  filterBar.addEventListener('keydown', (e) => {
    const current = document.activeElement;
    const i = buttons.indexOf(current);
    if (i === -1) return;

    if (e.key === 'ArrowRight' || e.key === 'ArrowDown'){
      e.preventDefault();
      const next = buttons[(i + 1) % buttons.length];
      next.focus();
    }
    if (e.key === 'ArrowLeft' || e.key === 'ArrowUp'){
      e.preventDefault();
      const prev = buttons[(i - 1 + buttons.length) % buttons.length];
      prev.focus();
    }
    if (e.key === 'Home'){ e.preventDefault(); buttons[0].focus(); }
    if (e.key === 'End'){ e.preventDefault(); buttons[buttons.length - 1].focus(); }
    if (e.key === ' ' || e.key === 'Enter'){
      e.preventDefault();
      const btn = buttons[i];
      applyFilter(btn.dataset.filter);
      const url = new URL(location.href);
      if (btn.dataset.filter === 'all') url.searchParams.delete('cat');
      else url.searchParams.set('cat', btn.dataset.filter);
      history.replaceState({}, '', url);
    }
  });

  // Lee ?cat= de la URL
  const params = new URLSearchParams(location.search);
  const initial = params.get('cat');
  const valid = initial && buttons.some(b => b.dataset.filter === initial);
  applyFilter(valid ? initial : 'all');
})();
