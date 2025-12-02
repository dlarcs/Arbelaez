<?php
$cssPath = '../../view/Juntanza_de_Mujeres/galery/seccion.css';
$jsPath  = '../../view/Juntanza_de_Mujeres/galery/seccion.js';
$cssTime = @filemtime($cssPath) ?: time();
$jsTime  = @filemtime($jsPath)  ?: time();
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_Juntanza_de_Mujeres" aria-labelledby="gallery-title">
  <!-- Título principal -->
  <h2 id="gallery-title">Asociación Juntanza de Mujeres</h2>

  <!-- Filtros -->
  <div class="categories_food_gallery" role="tablist" aria-label="Filtrar galería">
    <ul>
      <li role="presentation">
        <button type="button" class="filter_items active" data-filter="all" role="tab" aria-selected="true">
          Todos
        </button>
      </li>
      <li role="presentation">
        <button type="button" class="filter_items" data-filter="general" role="tab" aria-selected="false">
          General
        </button>
      </li>
      <li role="presentation">
        <button type="button" class="filter_items" data-filter="jabones" role="tab" aria-selected="false">
          Jabones
        </button>
      </li>
      <li role="presentation">
        <button type="button" class="filter_items" data-filter="vino" role="tab" aria-selected="false">
          Vinos
        </button>
      </li>
    </ul>
  </div>

  <!-- Contenedor -->
  <div class="food_gallery_container">

    <!-- ===== General ===== -->
    <div class="food_card general">
      <img src="../../view/Juntanza_de_Mujeres/img/general.jpeg"
           alt="Encuentro de la Asociación Juntanza de Mujeres"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card">
        <div class="food_info">
          <p>Encuentros & actividades</p>
        </div>
      </div>
    </div>

    <div class="food_card general">
      <img src="../../view/Juntanza_de_Mujeres/img/general2.jpeg"
           alt="Actividades y apoyo a emprendimientos en la Asociación Juntanza"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card">
        <div class="food_info">
          <p>Apoyo a emprendimientos</p>
        </div>
      </div>
    </div>

    <!-- ===== Jabones ===== -->
    <div class="food_card jabones">
      <img src="../../view/Juntanza_de_Mujeres/img/jabones.jpeg"
           alt="Jabones artesanales elaborados por emprendedoras de la Asociación Juntanza"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card">
        <div class="food_info">
          <p>Jabones artesanales</p>
        </div>
      </div>
    </div>

    <div class="food_card jabones">
      <img src="../../view/Juntanza_de_Mujeres/img/jabones2.jpeg"
           alt="Productos de jabonería artesanal de la Asociación Juntanza"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card">
        <div class="food_info">
          <p>Emprendimiento local</p>
        </div>
      </div>
    </div>

    <!-- ===== Vinos ===== -->
    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino.jpeg"
           alt="Vino artesanal de emprendedoras de la Asociación Juntanza"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino2.jpeg"
           alt="Vino artesanal - producto de emprendimiento femenino"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino3.jpeg"
           alt="Vino artesanal - Asociación Juntanza"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino4.jpeg"
           alt="Vino artesanal - emprendimiento local"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino5.jpeg"
           alt="Vino artesanal - producto elaborado por mujeres emprendedoras"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

    <div class="food_card vino">
      <img src="../../view/Juntanza_de_Mujeres/img/vino6.jpeg"
           alt="Vino artesanal - Asociación Juntanza de Mujeres"
           loading="lazy" decoding="async" fetchpriority="low">
      <div class="overlay_food_card"><div class="food_info"><p>Vinos</p></div></div>
    </div>

  </div>
</section>


<script src="../../view/Juntanza_de_Mujeres/galery/seccion.js<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
