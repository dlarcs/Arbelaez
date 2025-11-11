<?php
$cssPath = '../../view/Juntanza_de_Mujeres/galery/seccion.css';
$jsPath  = '../../view/Juntanza_de_Mujeres/galery/seccion.js';
$cssTime = @filemtime($cssPath) ?: time();
$jsTime  = @filemtime($jsPath)  ?: time();
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_Juntanza_de_Mujeres">
  <!-- Título principal -->
  <h1>Asociación Juntanza de Mujeres</h1>

  <!-- Filtros -->
  <div class="categories_food_gallery" role="tablist" aria-label="Filtrar por categoría">
    <ul>
      <li class="filter_items active" data-filter="all" role="tab" aria-selected="true" tabindex="0">Todos</li>
      <li class="filter_items" data-filter="Volcanes" role="tab" aria-selected="false" tabindex="0">Productos</li>
      <li class="filter_items" data-filter="Parrilla" role="tab" aria-selected="false" tabindex="0">Actividades</li>
      <li class="filter_items" data-filter="postres"  role="tab" aria-selected="false" tabindex="0">Eventos</li>
      <li class="filter_items" data-filter="cocteles" role="tab" aria-selected="false" tabindex="0">Nosotras</li>
    </ul>
  </div>

  <!-- Contenedor de platos -->
  <div class="food_gallery_container">

    <!-- Volcanes -->
    <div class="food_card Volcanes">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/volcan.jpg" alt="Volcán de chocolate" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Volcanes">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/volcan2.jpg" alt="Volcán de chocolate con helado" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Volcanes">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/volcan3.jpg" alt="Volcán con salsa y topping" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Parrilla -->
    <div class="food_card Parrilla">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/parrilla.jpg" alt="Parrilla mixta" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Parrilla">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/parrilla1.jpg" alt="Asado a la parrilla" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Postres -->
    <div class="food_card postres">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/postres.jpg" alt="Postre artesanal" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card postres">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/postres1.jpg" alt="Postre con chocolate" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- Cócteles -->
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel.jpg" alt="Cóctel" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel1.jpg" alt="Cóctel frutal" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel2.jpg" alt="Cóctel con hierbabuena" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel3.jpg" alt="Cóctel tropical" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel4.jpg" alt="Cóctel cítrico" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel5.jpg" alt="Cóctel con frutos rojos" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel6.jpg" alt="Cóctel refrescante" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel7.jpg" alt="Cóctel con hielo frappé" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel8.jpg" alt="Cóctel de autor" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>
    <div class="food_card cocteles">
      <img src="../../view/gastronomia/Juntanza_de_Mujeres/img/coctel9.jpg" alt="Cóctel con garnish" loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

  </div>
</section>

<script src="../../view/Juntanza_de_Mujeres/galery/seccion.js<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
