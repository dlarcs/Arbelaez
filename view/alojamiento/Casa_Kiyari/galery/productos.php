<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kiyari/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/Casa_Kiyari/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kiyari/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Casa_Kiyari">

	  <!-- Título principal -->
	  <h1>Casa Kandu</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Rio">Rio</li>
	      <li class="filter_items" data-filter="General">General</li>
	    </ul>
	  </div>

	  <div class="food_gallery_container">

			<!-- ===== General (4) ===== -->
			<div class="food_card General"><img src="../../../view/alojamiento/Casa_Kiyari/img/general.jpeg" alt="General 1" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card General"><img src="../../../view/alojamiento/Casa_Kiyari/img/general1.jpeg" alt="General 2" width="1200" height="800" loading="lazy" decoding="async"></div>

			<!-- ===== Rio (6) ===== -->
			<div class="food_card Rio"><img src="../../../view/alojamiento/Casa_Kiyari/img/Rio1.jpeg" alt="Rio 1" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Rio"><img src="../../../view/alojamiento/Casa_Kiyari/img/Rio2.jpeg" alt="Rio 2" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Rio"><img src="../../../view/alojamiento/Casa_Kiyari/img/Rio3.jpeg" alt="Rio 3" width="1200" height="800" loading="lazy" decoding="async"></div>

	  </div>
	</section>


	<script src="<?php echo '../../../view/alojamiento/Casa_Kiyari/galery/productos.js?v=' . filemtime('../../../view/alojamiento/Casa_Kiyari/galery/productos.js'); ?>" type="text/javascript"></script>
