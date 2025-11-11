<?php
$cssTime = filemtime('../../../view/alojamiento/IsraHousSuites/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/IsraHousSuites/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/IsraHousSuites/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_IsraHousSuites">

	  <!-- Título principal -->
	  <h1>IsraHousSuites</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Finca">Finca</li>
	      <!-- <li class="filter_items" data-filter="Rio">Rio</li> -->
	      <li class="filter_items" data-filter="Asados">Asados</li>
	    </ul>
	  </div>
  <div class="food_gallery_container">

	    <!-- ===== Finca (7) ===== -->
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior.jpeg" alt="Finca 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior1.jpeg" alt="Finca 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior2.jpeg" alt="Finca 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior3.jpeg" alt="Finca 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior4.jpeg" alt="Finca 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior5.jpeg" alt="Finca 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior6.jpeg" alt="Finca 7" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior7.jpeg" alt="Finca 6" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Finca"><img src="../../../view/alojamiento/IsraHousSuites/img/interior8.jpeg" alt="Finca 7" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Rio (3) ===== -->
	    <!-- <div class="food_card Rio"><img src="../../../view/alojamiento/IsraHousSuites/img/Rio.jpeg" alt="Rio 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../../view/alojamiento/IsraHousSuites/img/Rio1.jpeg" alt="Rio 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../../view/alojamiento/IsraHousSuites/img/Rio2.jpeg" alt="Rio 3" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== Asados (3) ===== -->
	    <!-- <div class="food_card Asados"><img src="../../../view/alojamiento/IsraHousSuites/img/cuadro.jpeg" alt="Asados" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Asados"><img src="../../../view/alojamiento/IsraHousSuites/img/cuadro1.jpeg" alt="Asados" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Asados"><img src="../../../view/alojamiento/IsraHousSuites/img/cuadro2.jpeg" alt="Asados 3" width="1200" height="800" loading="lazy" decoding="async"></div> -->
	  </div>

	</section>


	<script src="<?php echo '../../../view/alojamiento/IsraHousSuites/galery/productos.js?v=' . filemtime('../../../view/alojamiento/IsraHousSuites/galery/productos.js'); ?>" type="text/javascript"></script>
