<?php
$cssTime = filemtime('../../../view/alojamiento/Cachorros_LyC/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Cachorros_LyC/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Cachorros_LyC/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Cachorros_LyC">

	  <!-- Título principal -->
	  <h1>Cachorros L&C</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Vista">Vista</li>
	      <li class="filter_items" data-filter="Lugar">Lugar</li>
	      <li class="filter_items" data-filter="Bebidas">Bebidas</li>
				<li class="filter_items" data-filter="Pet">Petfriendly</li>

	    </ul>
	  </div>
  <div class="food_gallery_container">

	    <!-- ===== Vista (7) ===== -->
	    <div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista.jpg" alt="Vista 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista1.jpg" alt="Vista 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista2.jpg" alt="Vista 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista3.jpg" alt="Vista 4" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista4.jpg" alt="Vista 5" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Vista"><img src="../../../view/alojamiento/Cachorros_LyC/img/vista5.jpg" alt="Vista 6" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Lugar (3) ===== -->
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar.jpg" alt="Lugar 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar1.jpg" alt="Lugar 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar2.jpg" alt="Lugar 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar3.jpg" alt="Lugar 4" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar4.jpg" alt="Lugar 5" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar5.jpg" alt="Lugar 6" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar6.jpg" alt="Lugar 7" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar7.jpg" alt="Lugar 8" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar8.jpg" alt="Lugar 9" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar"><img src="../../../view/alojamiento/Cachorros_LyC/img/Lugar9.jpg" alt="Lugar 10" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Bebidas (3) ===== -->
			<div class="food_card Bebidas"><img src="../../../view/alojamiento/Cachorros_LyC/img/trago.jpg" alt="Bebidas" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Bebidas"><img src="../../../view/alojamiento/Cachorros_LyC/img/trago1.jpg" alt="Bebidas" width="1200" height="800" loading="lazy" decoding="async"></div>

			<!-- ===== pet (3) ===== -->
			<div class="food_card Pet"><img src="../../../view/alojamiento/Cachorros_LyC/img/pet.jpg" alt="pet 1" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Pet"><img src="../../../view/alojamiento/Cachorros_LyC/img/pet1.jpg" alt="pet 2" width="1200" height="800" loading="lazy" decoding="async"></div>

	   </div>

	</section>


	<script src="<?php echo '../../../view/alojamiento/Cachorros_LyC/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Cachorros_LyC/galery/productos.js'); ?>" type="text/javascript"></script>
