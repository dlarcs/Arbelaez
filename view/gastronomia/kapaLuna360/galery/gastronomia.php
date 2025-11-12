<?php
$cssPath = '../../../view/gastronomia/kapaLuna360/galery/gastronomia.css';
$jsPath  = '../../../view/gastronomia/kapaLuna360/galery/gastronomia.js';
$cssTime = @filemtime($cssPath) ?: time();
$jsTime  = @filemtime($jsPath)  ?: time();
?>
<link rel="stylesheet" href="../../../view/gastronomia/kapaLuna360/galery/gastronomia.css<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_kapaLuna">
  <!-- Título principal -->
  <h1>Nuestra Gastronomía</h1>

  <!-- Filtros -->
  <div class="categories_food_gallery" role="tablist" aria-label="Filtrar por categoría">
    <ul>
      <li class="filter_items active" data-filter="all" role="tab" aria-selected="true" tabindex="0">Todos</li>
      <li class="filter_items" data-filter="Volcanes" role="tab" aria-selected="false" tabindex="0">Volcanes</li>
      <li class="filter_items" data-filter="Parrilla" role="tab" aria-selected="false" tabindex="0">Parrilla</li>
      <li class="filter_items" data-filter="postres"  role="tab" aria-selected="false" tabindex="0">Postres</li>
      <li class="filter_items" data-filter="cocteles" role="tab" aria-selected="false" tabindex="0">Cócteles</li>
    </ul>
  </div>

  <!-- Contenedor de platos -->
  <div class="food_gallery_container">

    <!-- Volcanes -->
    <div class="food_card Volcanes">
      <img src="../../../view/gastronomia/kapaLuna360/img/volcan.jpg" alt="Volcán de chocolate" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Volcanes">
      <img src="../../../view/gastronomia/kapaLuna360/img/volcan2.jpg" alt="Volcán de chocolate con helado" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Volcanes">
      <img src="../../../view/gastronomia/kapaLuna360/img/volcan3.jpg" alt="Volcán con salsa y topping" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Parrilla -->
    <div class="food_card Parrilla">
      <img src="../../../view/gastronomia/kapaLuna360/img/parrilla.jpg" alt="Parrilla mixta" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Parrilla">
      <img src="../../../view/gastronomia/kapaLuna360/img/parrilla1.jpg" alt="Asado a la parrilla" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Postres -->
    <div class="food_card postres">
      <img src="../../../view/gastronomia/kapaLuna360/img/postres.jpg" alt="Postre artesanal" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card postres">
      <img src="../../../view/gastronomia/kapaLuna360/img/postres1.jpg" alt="Postre con chocolate" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Cócteles -->
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel.jpg" alt="Cóctel" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel1.jpg" alt="Cóctel frutal" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel2.jpg" alt="Cóctel con hierbabuena" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel3.jpg" alt="Cóctel tropical" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel4.jpg" alt="Cóctel cítrico" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel5.jpg" alt="Cóctel con frutos rojos" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel6.jpg" alt="Cóctel refrescante" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel7.jpg" alt="Cóctel con hielo frappé" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel8.jpg" alt="Cóctel de autor" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../../view/gastronomia/kapaLuna360/img/coctel9.jpg" alt="Cóctel con garnish" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

  </div>
</section>

<script src="../../../view/gastronomia/kapaLuna360/galery/gastronomia.js<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
