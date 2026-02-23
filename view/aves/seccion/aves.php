<?php
$cssTime = filemtime('../../view/aves/seccion/aves.css');
$jsTime = filemtime('../../view/aves/seccion/aves.js');
?>
<link rel="stylesheet" href="../../view/aves/seccion/aves.css?v=<?= $cssTime ?>">

<section class="seccion_aves">

<section>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Avifauna Gallery</title>

</section>
  <main class="page">
    <sectioner class="hero">
      <h1 class="hero__title">Avifauna Gallery</h1>
      <p class="hero__subtitle">Descubre la belleza de las aves a través de fotografías excepcionales</p>

      <div class="search">
        <span class="search__icon" aria-hidden="true">⌕</span>
        <input
          id="searchInput"
          class="search__input"
          type="search"
          placeholder="Buscar pájaros por nombre..."
          autocomplete="off"
        />
      </div>

      <nav class="filters" aria-label="Filtros por categoría">
        <div id="filterChips" class="filters__chips"></div>
      </nav>
    </sectioner>

    <section class="gallery" aria-label="Galería de aves">
      <div id="grid" class="grid" role="list"></div>
    </section>
  </main>

  <!-- Modal / Lightbox -->
  <div id="lightbox" class="lightbox" aria-hidden="true">
    <div class="lightbox__backdrop" data-close="true"></div>

    <div class="lightbox__panel" role="dialog" aria-modal="true" aria-label="Vista ampliada de fotografía">
      <button class="lightbox__close" type="button" aria-label="Cerrar" id="btnClose">✕</button>

      <button class="lightbox__nav lightbox__nav--left" type="button" aria-label="Anterior" id="btnPrev">‹</button>
      <button class="lightbox__nav lightbox__nav--right" type="button" aria-label="Siguiente" id="btnNext">›</button>

      <div class="lightbox__content">
        <figure class="lightbox__figure">
          <img id="lbImg" class="lightbox__img" alt="" />
        </figure>

        <aside class="lightbox__info" aria-label="Información del ave">
          <div class="lbtag" id="lbCategory">—</div>
          <h2 class="lbtitle" id="lbName">—</h2>
          <p class="lbsci" id="lbSci">—</p>

          <div class="lbmeta">
            <span class="lbmeta__label">Fotografía:</span>
            <span class="lbmeta__value" id="lbPhotographer">—</span>
          </div>

          <p class="lbdesc" id="lbDesc">—</p>
        </aside>
      </div>
    </div>
  </div>
</section>


<script src="../../view/aves/seccion/aves.js?v=<?= $jsTime ?>" type="text/javascript"></script>
