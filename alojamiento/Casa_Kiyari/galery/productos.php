<?php
$cssTime = filemtime('../../alojamiento/Casa_Kiyari/galery/productos.css'); // ejemplo: '../../Home/5.Video/video.css'
$jsTime = filemtime('../../alojamiento/Casa_Kiyari/galery/productos.js');   // ejemplo: '../../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../alojamiento/Casa_Kiyari/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Casa_Kiyari">

	  <!-- Título principal -->
	  <h1>Casa Kandu</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="General">General</li>
	      <li class="filter_items" data-filter="Habitaciones">Habitaciones</li>
	      <li class="filter_items" data-filter="Meditacion">Meditación</li>
	      <li class="filter_items" data-filter="Rio">Río</li>
	      <li class="filter_items" data-filter="Testimonio">Testimonio</li>
	    </ul>
	  </div>

	  <div class="food_gallery_container">

	    <!-- ===== General (general.jpg + general1.jpg ... general15.jpg) ===== -->
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general.jpg"  alt="General 1"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general1.jpg" alt="General 2"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general2.jpg" alt="General 3"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general3.jpg" alt="General 4"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general4.jpg" alt="General 5"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general5.jpg" alt="General 6"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general6.jpg" alt="General 7"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general7.jpg" alt="General 8"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general8.jpg" alt="General 9"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general9.jpg" alt="General 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general10.jpg" alt="General 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general11.jpg" alt="General 12" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general12.jpg" alt="General 13" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general13.jpg" alt="General 14" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general14.jpg" alt="General 15" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../alojamiento/Casa_Kiyari/img/general15.jpg" alt="General 16" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Habitaciones (habitaciones.jpg) ===== -->
	    <div class="food_card Habitaciones"><img src="../../alojamiento/Casa_Kiyari/img/habitaciones.jpg" alt="Habitaciones 1" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Meditación (meditacion.jpg + meditacion1.jpg ... meditacion7.jpg) ===== -->
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion.jpg"  alt="Meditación 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion1.jpg" alt="Meditación 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion2.jpg" alt="Meditación 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion3.jpg" alt="Meditación 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion4.jpg" alt="Meditación 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion5.jpg" alt="Meditación 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Meditacion"><img src="../../alojamiento/Casa_Kiyari/img/meditacion6.jpg" alt="Meditación 7" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Río (rio.jpg + rio1.jpg ... rio8.jpg) ===== -->
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio.jpg"  alt="Río 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio1.jpg" alt="Río 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio2.jpg" alt="Río 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio3.jpg" alt="Río 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio4.jpg" alt="Río 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio5.jpg" alt="Río 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio6.jpg" alt="Río 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio7.jpg" alt="Río 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Rio"><img src="../../alojamiento/Casa_Kiyari/img/rio8.jpg" alt="Río 9" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Testimonio (testimonio.jpg + testimonio1.jpg ... testimonio11.jpg) ===== -->
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio.jpg"  alt="Testimonio 1"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio1.jpg" alt="Testimonio 2"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio2.jpg" alt="Testimonio 3"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio3.jpg" alt="Testimonio 4"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio4.jpg" alt="Testimonio 5"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio5.jpg" alt="Testimonio 6"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio6.jpg" alt="Testimonio 7"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio7.jpg" alt="Testimonio 8"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio8.jpg" alt="Testimonio 9"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio9.jpg" alt="Testimonio 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio10.jpg" alt="Testimonio 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Testimonio"><img src="../../alojamiento/Casa_Kiyari/img/testimonio11.jpg" alt="Testimonio 12" width="1200" height="800" loading="lazy" decoding="async"></div>


	  </div>
	</section>


	<script src="<?php echo '../../alojamiento/Casa_Kiyari/galery/productos.js?v=' . filemtime('../../alojamiento/Casa_Kiyari/galery/productos.js'); ?>" type="text/javascript"></script>
