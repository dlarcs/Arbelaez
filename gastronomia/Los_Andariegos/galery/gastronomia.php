<?php
$cssPath = '../../gastronomia/Los_Andariegos/galery/gastronomia.css';
$jsPath  = '../../gastronomia/Los_Andariegos/galery/gastronomia.js';
$cssTime = @filemtime($cssPath) ?: time();
$jsTime  = @filemtime($jsPath)  ?: time();
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_Andariegos">
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
  <!-- Contenedor de platos -->
<div class="food_gallery_container">

  <!-- Almuerzos -->
  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo.jpeg" alt="Almuerzo en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo1.jpeg" alt="Almuerzo casero en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo2.jpeg" alt="Plato típico en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo3.jpeg" alt="Almuerzo tradicional en Arbeláez" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo4.jpeg" alt="Comida casera en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo5.jpeg" alt="Almuerzo especial en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo6.jpeg" alt="Plato servido en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card almuerzos">
    <img src="../../gastronomia/Los_Andariegos/img/almuerzo7.jpeg" alt="Almuerzo para disfrutar en Arbeláez" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <!-- Sopas -->
  <div class="food_card sopas">
    <img src="../../gastronomia/Los_Andariegos/img/sopas.jpeg" alt="Sopa tradicional en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <!-- Menú -->
  <div class="food_card menu">
    <img src="../../gastronomia/Los_Andariegos/img/menu.jpeg" alt="Menú de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <!-- Generales -->
  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general.jpeg" alt="Los Andariegos en Arbeláez" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general1.jpeg" alt="Espacio de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general2.jpeg" alt="Ambiente de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general3.jpeg" alt="Zona exterior de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general4.jpeg" alt="Vista de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general5.jpeg" alt="Lugar para compartir en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general6.jpeg" alt="Restaurante Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general7.jpeg" alt="Paisaje en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general8.jpeg" alt="Vista natural de Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general9.jpeg" alt="Ambiente natural en Los Andariegos" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general10.jpeg" alt="Los Andariegos restaurante campestre" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <div class="food_card general">
    <img src="../../gastronomia/Los_Andariegos/img/general11.jpeg" alt="Restaurante campestre en Arbeláez" loading="lazy" decoding="async">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

</div>
</section>

<script src="<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
