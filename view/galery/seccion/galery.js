// ========== FILTRO ==========
  (function(){
    const filterBar = document.querySelector('.categories_pag_places');
    const buttons   = filterBar.querySelectorAll('.filter_items');
    const cards     = document.querySelectorAll('.galery_card_pag_places');

    function applyFilter(val){
      cards.forEach(card=>{
        const match = val === 'all' || card.classList.contains(val);
        card.toggleAttribute('hidden', !match);
      });
    }

    filterBar.addEventListener('click', (e)=>{
      const btn = e.target.closest('.filter_items'); if(!btn) return;
      buttons.forEach(b=>{ b.classList.remove('active'); b.setAttribute('aria-pressed','false'); });
      btn.classList.add('active'); btn.setAttribute('aria-pressed','true');
      applyFilter(btn.dataset.filter);
    });

    // Acceso con teclado (Enter/Espacio)
    buttons.forEach(b=>{
      b.addEventListener('keydown', (e)=>{
        if(e.key === 'Enter' || e.key === ' '){ e.preventDefault(); b.click(); }
      });
    });

    // Filtro inicial
    applyFilter('all');
  })();

  // ========== ZOOM opcional (clic en imagen) ==========
  (function(){
    const container = document.querySelector('.img_galery_pag_places');
    container.addEventListener('click', (e)=>{
      const img = e.target.closest('img');
      if(!img) return;
      img.classList.toggle('zoomed');
    });
  })();
