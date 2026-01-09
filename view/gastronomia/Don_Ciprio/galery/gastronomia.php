<?php
$cssPath = '../../../view/gastronomia/Don_Ciprio/galery/gastronomia.css';
$jsPath  = '../../../view/gastronomia/Don_Ciprio/galery/gastronomia.js';

$cssTime = filemtime($cssPath);
$jsTime  = filemtime($jsPath);

$imgBase = "../../../view/gastronomia/Don_Ciprio/img/";

/**
 * comida: comida.jpg, comida1.jpg ... comida8.jpg (9 imágenes)
 * general: general.jpg, general1.jpg ... general19.jpg (20 imágenes)
 */
$comidaFiles = ['comida.jpg'];
for ($i = 1; $i <= 8; $i++) $comidaFiles[] = "comida{$i}.jpg";

$generalFiles = ['general.jpg'];
for ($i = 1; $i <= 19; $i++) $generalFiles[] = "general{$i}.jpg";
?>

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_Don_Ciprio">

  <h1>Nuestra Gastronomía</h1>

  <!-- ===== Filtros de categorías ===== -->
  <div class="categories_food_gallery">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="Comida">Comida</li>
      <li class="filter_items" data-filter="General">General</li>
    </ul>
  </div>

  <!-- ===== Contenedor de platos ===== -->
  <div class="food_gallery_container">

    <!-- ===== Comida ===== -->
    <?php foreach ($comidaFiles as $index => $file): ?>
      <?php
        $alt = ($index === 0) ? "Comida" : "Comida {$index}";
      ?>
      <div class="food_card Comida">
        <img
          src="<?= $imgBase . $file ?>"
          alt="<?= htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') ?>"
          loading="lazy"
          decoding="async"
          fetchpriority="low"
        >
        <div class="overlay_food_card"><div class="food_info"></div></div>
      </div>
    <?php endforeach; ?>

    <!-- ===== General ===== -->
    <?php foreach ($generalFiles as $index => $file): ?>
      <?php
        $alt = ($index === 0) ? "General" : "General {$index}";
      ?>
      <div class="food_card General">
        <img
          src="<?= $imgBase . $file ?>"
          alt="<?= htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') ?>"
          loading="lazy"
          decoding="async"
          fetchpriority="low"
        >
        <div class="overlay_food_card"><div class="food_info"></div></div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<script src="<?= $jsPath ?>?v=<?= $jsTime ?>" type="text/javascript"></script>
