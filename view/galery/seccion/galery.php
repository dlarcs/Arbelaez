<?php
$cssTime = filemtime('../../view/galery/seccion/galery.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/galery/seccion/galery.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/galery/seccion/galery.css?v=<?= $cssTime ?>">


<!-- ===== Galería de Lugares ===== -->
<section class="section_pag_places" aria-labelledby="galeria-title">
  <!-- Título principal -->
  <h1 id="galeria-title">Galería</h1>

  <!-- ===== Filtros de categorías ===== -->
  <nav class="categories_pag_places" aria-label="Filtros de galería">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="equinos">Feria equina</li>
      <li class="filter_items" data-filter="flores">Flores</li>
      <li class="filter_items" data-filter="pag_places">Pueblo</li>
    </ul>
  </nav>

  <!-- ===== Contenedor de Imágenes ===== -->
  <div class="img_galery_pag_places">

    <!-- ====== EQUINOS ====== -->
    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina">
      <figure class="galery_card_pag_places equinos" data-cat="equinos">
        <img src="../../view/galery/img_equinos/equino.jpeg" alt="Feria equina 0" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina">
      <figure class="galery_card_pag_places equinos" data-cat="equinos">
        <img src="../../view/galery/img_equinos/equino1.jpeg" alt="Feria equina 1" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina">
      <figure class="galery_card_pag_places equinos" data-cat="equinos">
        <img src="../../view/galery/img_equinos/equino2.jpeg" alt="Feria equina 2" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
          <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina">
      <figure class="galery_card_pag_places equinos" data-cat="equinos">
        <img src="../../view/galery/img_equinos/equino3.jpeg" alt="Feria equina 3" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>

      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Feria equina">
      <figure class="galery_card_pag_places equinos" data-cat="equinos">
        <img src="../../view/galery/img_equinos/equino4.jpeg" alt="Feria equina 4" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>



    <!-- ====== FLORES (1..14) ====== -->
    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor.jpg" alt="Flores 1" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor1.jpg" alt="Flores 1" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor2.jpg" alt="Flores 2" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
          <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor3.jpg" alt="Flores 3" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor4.jpg" alt="Flores 4" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
          <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor5.jpg" alt="Flores 5" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Flores">
      <figure class="galery_card_pag_places flores" data-cat="flores">
        <img src="../../view/galery/img_flores/flor6.jpg" alt="Flores 6" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>
    <!-- ====== PAISAJES / LUGARES (1..11 en tu snippet) ====== -->
    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje1">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar1.jpg" alt="Paisaje 1" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje2">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar2.jpg" alt="Paisaje 2" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje3">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar3.jpg" alt="Paisaje 3" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje4">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar4.jpg" alt="Paisaje 4" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <!-- ====== Pueblo====== -->
    <!-- <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje5">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar5.jpg" alt="Paisaje 1" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a>

    <a class="card_link" href="https://www.Instagram.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener" aria-label="Ver en Instagram: Paisaje6">
      <figure class="galery_card_pag_places pag_places" data-cat="pag_places">
        <img src="../../view/galery/img_lugar/lugar6.jpg" alt="Paisaje 2" loading="lazy" decoding="async" width="800" height="400">
        <div class="overlay_pag_places" aria-hidden="true">
        <a href="https://www.instagram.com/arbelaez_turismo/"><figcaption class="card_info_pag_places"><p>Click para ir a Instagram</p></figcaption></a>
        </div>
      </figure>
    </a> -->



  </div>
</section>


<script src="../../view/galery/seccion/galery.js?v=<?= $jsTime ?>" type="text/javascript"></script>
