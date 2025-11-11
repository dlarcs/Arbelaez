<?php
$cssTime = filemtime('../../../view/alojamiento/Turismo_Hoy_Vivo/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Turismo_Hoy_Vivo/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Turismo_Hoy_Vivo/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Turismo_Hoy_Vivo">

	  <!-- Título principal -->
	  <h1>Turismo Hoy Vivo Casa Rural Accesible</h1>
	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Casa rural">Casa rural </li>
	      <li class="filter_items" data-filter=" Accesibilidad"> Accesibilidad</li>
	      <li class="filter_items" data-filter="Sostenibilidad">Sostenibilidad</li>
				<li class="filter_items" data-filter="Calificación">Calificación</li>

	    </ul>
	  </div>
  <div class="food_gallery_container">

	    <!-- ===== Casa rural (7) ===== -->
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural.jpg" alt="Casa rural 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg" alt="Casa rural 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural2.jpg" alt="Casa rural 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural3.jpg" alt="Casa rural 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural4.jpg" alt="Casa rural 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural5.jpg" alt="Casa rural 6" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Casa rural"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural6.jpg" alt="Casa rural 7" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Calificacion (3) ===== -->
	    <div class="food_card Calificacion"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/calificacion.jpg" alt="Calificacion 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	  	<div class="food_card Calificacion"><img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/calificacion1.jpg" alt="Calificacion 3" width="1200" height="800" loading="lazy" decoding="async"></div>
 </div>

	</section>


	<script src="<?php echo '../../../view/alojamiento/Turismo_Hoy_Vivo/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Turismo_Hoy_Vivo/galery/productos.js'); ?>" type="text/javascript"></script>
