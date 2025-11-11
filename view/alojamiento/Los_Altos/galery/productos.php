<?php
$cssTime = filemtime('../../../view/alojamiento/Los_Altos/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Los_Altos/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Los_Altos/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Los_Altos">

	  <!-- Título principal -->
	  <h1>Finca la Rinconada</h1>

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

	    <!-- ===== General (7) ===== -->
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general.jpeg" alt="General 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general1.jpeg" alt="General 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general2.jpeg" alt="General 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general3.jpeg" alt="General 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general4.jpeg" alt="General 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Los_Altos/img/general5.jpeg" alt="General 6" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Piscina (3) ===== -->
	    <div class="food_card Piscina"><img src="../../../view/alojamiento/Los_Altos/img/Piscina.jpeg" alt="Piscina 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Piscina"><img src="../../../view/alojamiento/Los_Altos/img/Piscina1.jpeg" alt="Piscina 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Piscina"><img src="../../../view/alojamiento/Los_Altos/img/Piscina2.jpeg" alt="Piscina 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Piscina"><img src="../../../view/alojamiento/Los_Altos/img/Piscina3.jpeg" alt="Piscina 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Piscina"><img src="../../../view/alojamiento/Los_Altos/img/Piscina4.jpeg" alt="Piscina 3" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Aposento (3) ===== -->
	    <div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones.jpeg" alt="Aposento" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones1.jpeg" alt="Aposento" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones2.jpeg" alt="Aposento 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones3.jpeg" alt="Aposento 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones4.jpeg" alt="Aposento 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aposento"><img src="../../../view/alojamiento/Los_Altos/img/habitaciones5.jpeg" alt="Aposento 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	  </div>

	</section>


	<script src="<?php echo '../../../view/alojamiento/Los_Altos/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Los_Altos/galery/productos.js'); ?>" type="text/javascript"></script>
