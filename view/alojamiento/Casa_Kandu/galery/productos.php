<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kandu/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Casa_Kandu/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kandu/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Casa_Kandu">

	  <!-- Título principal -->
	  <h1>Casa Kandu</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Casa">Casa</li>
	      <li class="filter_items" data-filter="Fachada">Fachada</li>
	      <li class="filter_items" data-filter="Habitaciones">Habitaciones</li>
	      <li class="filter_items" data-filter="Juegos">Juegos</li>
	      <li class="filter_items" data-filter="Lugar">Lugar</li>
	      <li class="filter_items" data-filter="General">General</li>
	    </ul>
	  </div>

	  <div class="food_gallery_container">

	    <!-- ===== Casa (16) ===== -->
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa1.jpg" alt="Casa 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa2.jpg" alt="Casa 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa3.jpg" alt="Casa 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa4.jpg" alt="Casa 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa5.jpg" alt="Casa 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa6.jpg" alt="Casa 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa7.jpg" alt="Casa 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa8.jpg" alt="Casa 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa9.jpg" alt="Casa 9" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa10.jpg" alt="Casa 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa11.jpg" alt="Casa 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Casa"><img src="../../../view/alojamiento/Casa_Kandu/img/casa12.jpg" alt="Casa 12" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Fachada (9) ===== -->
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada1.jpg" alt="Fachada 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada2.jpg" alt="Fachada 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada3.jpg" alt="Fachada 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada4.jpg" alt="Fachada 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada5.jpg" alt="Fachada 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada6.jpg" alt="Fachada 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada7.jpg" alt="Fachada 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Fachada"><img src="../../../view/alojamiento/Casa_Kandu/img/fachada8.jpg" alt="Fachada 8" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== General (4) ===== -->
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Kandu/img/general1.jpg" alt="General 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Kandu/img/general2.jpg" alt="General 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Kandu/img/general3.jpg" alt="General 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/alojamiento/Casa_Kandu/img/general4.jpg" alt="General 4" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Habitaciones (6) ===== -->
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones1.jpg" alt="Habitaciones 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones2.jpg" alt="Habitaciones 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones3.jpg" alt="Habitaciones 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones4.jpg" alt="Habitaciones 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones5.jpg" alt="Habitaciones 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Habitaciones"><img src="../../../view/alojamiento/Casa_Kandu/img/habitaciones6.jpg" alt="Habitaciones 6" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Juegos (4) ===== -->
	    <div class="food_card Juegos"><img src="../../../view/alojamiento/Casa_Kandu/img/juegos1.jpg" alt="Juegos 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Juegos"><img src="../../../view/alojamiento/Casa_Kandu/img/juegos2.jpg" alt="Juegos 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Juegos"><img src="../../../view/alojamiento/Casa_Kandu/img/juegos3.jpg" alt="Juegos 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Juegos"><img src="../../../view/alojamiento/Casa_Kandu/img/juegos4.jpg" alt="Juegos 4" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Lugar (5) ===== -->
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Casa_Kandu/img/lugar1.jpg" alt="Lugar 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Casa_Kandu/img/lugar2.jpg" alt="Lugar 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Casa_Kandu/img/lugar3.jpg" alt="Lugar 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Casa_Kandu/img/lugar4.jpg" alt="Lugar 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/alojamiento/Casa_Kandu/img/lugar5.jpg" alt="Lugar 5" width="1200" height="800" loading="lazy" decoding="async"></div>

	  </div>
	</section>


	<script src="<?php echo '../../../view/alojamiento/Casa_Kandu/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Casa_Kandu/galery/productos.js'); ?>" type="text/javascript"></script>
