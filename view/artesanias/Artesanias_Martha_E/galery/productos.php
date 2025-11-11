<?php
$cssTime = filemtime('../../../view/artesanias/Artesanias_Martha_E/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/artesanias/Artesanias_Martha_E/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/artesanias/Artesanias_Martha_E/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Artesanias_Martha_E">

	  <!-- Título principal -->
	  <h1>Productos</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
	      <li class="filter_items" data-filter="Aretes">Aretes</li>
	      <li class="filter_items" data-filter="Bolsos">Bolsos</li>
	      <!-- <li class="filter_items" data-filter="Collares">Collares</li> -->
	      <!-- <li class="filter_items" data-filter="Cuadros">Cuadros</li> -->
	      <li class="filter_items" data-filter="Lamparas">Lámparas</li>
	      <li class="filter_items" data-filter="Lugar">Lugar</li>
	      <li class="filter_items" data-filter="Manillas">Manillas</li>
				<li class="filter_items" data-filter="General">General</li>

	    </ul>
	  </div>

	  <!-- ===== Contenedor ===== -->
	  <div class="food_gallery_container">

	    <!-- ===== ARTESANIAS (20) ===== -->
	    <div class="food_card General">
	      <img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias.jpeg" alt="Artesanías" width="1200" height="800" loading="lazy" decoding="async">
	    </div>
	    <!-- General1..19 -->
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias2.jpeg" alt="Artesanías 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias3.jpeg" alt="Artesanías 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias4.jpeg" alt="Artesanías 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias5.jpeg" alt="Artesanías 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias6.jpeg" alt="Artesanías 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias7.jpeg" alt="Artesanías 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias8.jpeg" alt="Artesanías 9" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias9.jpeg" alt="Artesanías 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card General"><img src="../../../view/artesanias/Artesanias_Martha_E/img/artesanias10.jpeg" alt="Artesanías 11" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== ARETES (6) ===== -->
	    <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes.jpeg" alt="Aretes 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes1.jpeg" alt="Aretes 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes2.jpeg" alt="Aretes 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes3.jpeg" alt="Aretes 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes4.jpeg" alt="Aretes 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes5.jpeg" alt="Aretes 6" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes6.jpeg" alt="Aretes 7" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Aretes"><img src="../../../view/artesanias/Artesanias_Martha_E/img/aretes7.jpeg" alt="Aretes 8" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== BOLSOS (7) ===== -->
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos.jpeg" alt="Bolsos 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos1.jpeg" alt="Bolsos 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos2.jpeg" alt="Bolsos 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos3.jpeg" alt="Bolsos 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos4.jpeg" alt="Bolsos 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos5.jpeg" alt="Bolsos 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos6.jpeg" alt="Bolsos 7" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Bolsos"><img src="../../../view/artesanias/Artesanias_Martha_E/img/bolsos7.jpeg" alt="Bolsos 8" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== COLLARES (3) ===== -->
	    <!-- <div class="food_card Collares"><img src="../../../view/artesanias/Artesanias_Martha_E/img/collares.jpeg" alt="Collares 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Collares"><img src="../../../view/artesanias/Artesanias_Martha_E/img/collares1.jpeg" alt="Collares 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Collares"><img src="../../../view/artesanias/Artesanias_Martha_E/img/collares2.jpeg" alt="Collares 3" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== CUADROS (3) ===== -->
	    <!-- <div class="food_card Cuadros"><img src="../../../view/artesanias/Artesanias_Martha_E/img/cuadro.jpeg" alt="Cuadros 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Cuadros"><img src="../../../view/artesanias/Artesanias_Martha_E/img/cuadro1.jpeg" alt="Cuadros 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Cuadros"><img src="../../../view/artesanias/Artesanias_Martha_E/img/cuadro2.jpeg" alt="Cuadros 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Cuadros"><img src="../../../view/artesanias/Artesanias_Martha_E/img/cuadro3.jpeg" alt="Cuadros 4" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== LAMPARAS (11) ===== -->
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas.jpeg" alt="Lámparas 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas1.jpeg" alt="Lámparas 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas2.jpeg" alt="Lámparas 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas3.jpeg" alt="Lámparas 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas4.jpeg" alt="Lámparas 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas5.jpeg" alt="Lámparas 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas6.jpeg" alt="Lámparas 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas7.jpeg" alt="Lámparas 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas8.jpeg" alt="Lámparas 9" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas9.jpeg" alt="Lámparas 10" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lamparas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lamparas10.jpeg" alt="Lámparas 11" width="1200" height="800" loading="lazy" decoding="async"></div> -->


	    <!-- ===== LUGAR (10) ===== -->
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar.jpeg" alt="Lugar 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar1.jpeg" alt="Lugar 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar2.jpeg" alt="Lugar 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar3.jpeg" alt="Lugar 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar4.jpeg" alt="Lugar 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar"><img src="../../../view/artesanias/Artesanias_Martha_E/img/lugar5.jpeg" alt="Lugar 6" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== MANILLAS (4) ===== -->
	    <div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas.jpeg" alt="Manillas 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas1.jpeg" alt="Manillas 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas2.jpeg" alt="Manillas 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas3.jpeg" alt="Manillas 4" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas4.jpeg" alt="Manillas 4" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Manillas"><img src="../../../view/artesanias/Artesanias_Martha_E/img/manillas5.jpeg" alt="Manillas 4" width="1200" height="800" loading="lazy" decoding="async"></div>


	  </div>

	</section>


	<script src="<?php echo '../../../view/artesanias/Artesanias_Martha_E/galery/productos.js?v=' . filemtime('../../../view/artesanias/Artesanias_Martha_E/galery/productos.js'); ?>" type="text/javascript"></script>
