<?php
$cssTime = filemtime('../../view/galery/seccion/galery.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/galery/seccion/galery.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/galery/seccion/galery.css?v=<?= $cssTime ?>">


<!-- ===== Galería de Lugares ===== -->
<section class="section_pag_places" aria-labelledby="galeria-title">
  <h1 id="galeria-title">Galería</h1>

  <!-- Filtros accesibles -->
  <nav class="categories_pag_places" aria-label="Filtros de galería">
    <ul>
      <li><button type="button" class="filter_items active" data-filter="all" aria-pressed="true">Todos</button></li>
      <li><button type="button" class="filter_items" data-filter="equinos" aria-pressed="false">Feria equina</button></li>
      <li><button type="button" class="filter_items" data-filter="flores" aria-pressed="false">Flores</button></li>
      <li><button type="button" class="filter_items" data-filter="pag_places" aria-pressed="false">Pueblo</button></li>
    </ul>
  </nav>

  <!-- Contenedor -->
  <div class="img_galery_pag_places">

    <!-- ====== EQUINOS ====== -->
    <figure class="galery_card_pag_places equinos" data-cat="equinos">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina 0">
        <img src="../../view/galery/img_equinos/equino.jpeg" alt="Feria equina 0" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places equinos" data-cat="equinos">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina 1">
        <img src="../../view/galery/img_equinos/equino1.jpeg" alt="Feria equina 1" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places equinos" data-cat="equinos">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina 2">
        <img src="../../view/galery/img_equinos/equino2.jpeg" alt="Feria equina 2" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places equinos" data-cat="equinos">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina 3">
        <img src="../../view/galery/img_equinos/equino3.jpeg" alt="Feria equina 3" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <!-- ====== FLORES ====== -->
    <figure class="galery_card_pag_places flores" data-cat="flores">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores 1">
        <img src="../../view/galery/img_flores/flor.jpg" alt="Flores 1" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places flores" data-cat="flores">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores 2">
        <img src="../../view/galery/img_flores/flor2.jpg" alt="Flores 2" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places flores" data-cat="flores">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores 3">
        <img src="../../view/galery/img_flores/flor3.jpg" alt="Flores 3" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places flores" data-cat="flores">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores 4">
        <img src="../../view/galery/img_flores/flor4.jpg" alt="Flores 4" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <!-- ====== PUEBLO ====== -->
    <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje 1">
        <img src="../../view/galery/img_lugar/lugar1.jpg" alt="Paisaje 1" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje 2">
        <img src="../../view/galery/img_lugar/lugar2.jpg" alt="Paisaje 2" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje 3">
        <img src="../../view/galery/img_lugar/lugar3.jpg" alt="Paisaje 3" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

    <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
      <a class="card_link" href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje 4">
        <img src="../../view/galery/img_lugar/lugar4.jpg" alt="Paisaje 4" loading="lazy" decoding="async" width="800" height="400">
        <figcaption class="overlay_pag_places"><span class="card_info_pag_places"><p>Ver en Instagram</p></span></figcaption>
      </a>
    </figure>

  </div>
</section>


<script src="../../view/galery/seccion/galery.js?v=<?= $jsTime ?>" type="text/javascript"></script>
