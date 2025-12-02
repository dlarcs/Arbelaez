<?php
$cssTime = filemtime('../../view/Juntanza_de_Mujeres/galery/seccion.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime  = filemtime('../../view/Juntanza_de_Mujeres/galery/seccion.js');  // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/Juntanza_de_Mujeres/galery/seccion.css?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_Juntanza_de_Mujeres" aria-labelledby="gallery-title">
  <!-- Título principal -->
  <h2 id="gallery-title">Asociación Juntanza de Mujeres</h2>

  <!-- Filtros -->
  <div class="categories_food_gallery">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="vino">Vinos</li>
      <li class="filter_items" data-filter="jabones">Jabones</li>
      <li class="filter_items" data-filter="general">General</li>
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

<script src="<?php echo '../../view/Juntanza_de_Mujeres/galery/seccion.js?v=' . filemtime('../../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
