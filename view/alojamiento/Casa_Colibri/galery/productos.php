<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Colibri/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Casa_Colibri/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Colibri/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Casa_Colibri">

	  <!-- Título principal -->
	  <h1>Casa Colibrí</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="General">General</li>
	      <li class="filter_items" data-filter="Piscina">Piscina</li>
	      <li class="filter_items" data-filter="Aposento">Aposento</li>
	    </ul>
	  </div>
  <div class="food_gallery_container">

	    <!-- ===== General ===== -->
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Colibri/img/finca.jpeg" alt="General 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Colibri/img/finca1.jpeg" alt="General 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Colibri/img/finca2.jpeg" alt="General 3" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Piscina  ===== -->
	    <div class="food_card Piscina"><img src="../../../view/alojamiento/Casa_Colibri/img/piscina.jpeg" alt="Piscina 1" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Aposento  ===== -->
	    <div class="food_card Aposento"><img src="../../../view/alojamiento/Casa_Colibri/img/aposento.jpeg" alt="Aposento" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aposento"><img src="../../../view/alojamiento/Casa_Colibri/img/aposento1.jpeg" alt="Aposento" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aposento"><img src="../../../view/alojamiento/Casa_Colibri/img/aposento2.jpeg" alt="Aposento 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<!-- ===== Exterior ===== -->
			<div class="food_card Exterior"><img src="../../../view/alojamiento/Casa_Colibri/img/exterior.jpeg" alt="Piscina 1" width="1200" height="800" loading="lazy" decoding="async"></div>

	  </div>

	</section>


	<script src="<?php echo '../../../view/alojamiento/Casa_Colibri/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Casa_Colibri/galery/productos.js'); ?>" type="text/javascript"></script>
