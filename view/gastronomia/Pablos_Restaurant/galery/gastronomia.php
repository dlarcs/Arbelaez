<?php
$cssTime = filemtime('../../../view/gastronomia/Pablos_Restaurant/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/gastronomia/Pablos_Restaurant/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Pablos_Restaurant/galery/gastronomia.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="galery_Pablos_Restaurant">
	  <!-- Título principal -->
	  <h1>Nuestra Gastronomía</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
				<li class="filter_items " data-filter="Desayunos">Desayunos</li>
	      <li class="filter_items" data-filter="Almuerzos">Almuerzos</li>
	      <li class="filter_items" data-filter="Ensalada">Ensalada</li>
				<li class="filter_items" data-filter="Especial">Especial</li>
	      <li class="filter_items" data-filter="Jugo">Jugos</li>
				 <li class="filter_items" data-filter="Sopas">Sopas</li>
				  <li class="filter_items" data-filter="Lugar">Lugar</li>
	    </ul>
	  </div>

	  <!-- ===== Contenedor ===== -->
	  <div class="food_gallery_container">
			<!-- ===== Desayunos: Desayunos (0–8) ===== -->
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno.jpg"  alt="Pablos Restaurant — Desayunos"     width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno1.jpg" alt="Pablos Restaurant — Desayunos 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno2.jpg" alt="Pablos Restaurant — Desayunos 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno3.jpg" alt="Pablos Restaurant — Desayunos 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno4.jpg" alt="Pablos Restaurant — Desayunos 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno5.jpg" alt="Pablos Restaurant — Desayunos 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno6.jpg" alt="Pablos Restaurant — Desayunos 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno7.jpg" alt="Pablos Restaurant — Desayunos 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno8.jpg" alt="Pablos Restaurant — Desayunos 8"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno9.jpg" alt="Pablos Restaurant — Desayunos 9"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/desayuno10.jpg" alt="Pablos Restaurant — Desayunos 10"   width="1200" height="800" loading="lazy" decoding="async"></div>


	    <!-- ===== Almuerzos: almuerzo (0–8) ===== -->
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo.jpeg"  alt="Pablos Restaurant — Almuerzo"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo1.jpeg" alt="Pablos Restaurant — Almuerzo 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo2.jpeg" alt="Pablos Restaurant — Almuerzo 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo3.jpeg" alt="Pablos Restaurant — Almuerzo 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo4.jpeg" alt="Pablos Restaurant — Almuerzo 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo5.jpeg" alt="Pablos Restaurant — Almuerzo 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo6.jpg" alt="Pablos Restaurant — Almuerzo 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo7.jpg" alt="Pablos Restaurant — Almuerzo 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Restaurant/img/almuerzo8.jpg" alt="Pablos Restaurant — Almuerzo 8"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Ensalada: Ensalada (0–1) ===== -->
	    <div class="food_card Ensalada" data-filter="Ensalada"><img src="../../../view/gastronomia/Pablos_Restaurant/img/ensaladas.jpeg"  alt="Pablos Restaurant — Ensalada"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Ensalada" data-filter="Ensalada"><img src="../../../view/gastronomia/Pablos_Restaurant/img/ensaladas1.jpeg" alt="Pablos Restaurant — Ensalada 1"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Especial: Especial (0–32) ===== -->
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial.jpeg"  alt="Pablos Restaurant — Especial"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial1.jpeg" alt="Pablos Restaurant — Especial 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial2.jpeg" alt="Pablos Restaurant — Especial 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial3.jpeg" alt="Pablos Restaurant — Especial 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial4.jpg" alt="Pablos Restaurant — Especial 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial5.jpeg" alt="Pablos Restaurant — Especial 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial6.jpg" alt="Pablos Restaurant — Especial 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial7.jpg" alt="Pablos Restaurant — Especial 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial8.jpg" alt="Pablos Restaurant — Especial 8"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial9.jpg" alt="Pablos Restaurant — Especial 9"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial10.jpg" alt="Pablos Restaurant — Especial 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial11.jpg" alt="Pablos Restaurant — Especial 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial12.jpg" alt="Pablos Restaurant — Especial 12" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial13.jpg" alt="Pablos Restaurant — Especial 13" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial14.jpg" alt="Pablos Restaurant — Especial 14" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial15.jpg" alt="Pablos Restaurant — Especial 15" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial16.jpg" alt="Pablos Restaurant — Especial 16" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial17.jpg" alt="Pablos Restaurant — Especial 17" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial18.jpg" alt="Pablos Restaurant — Especial 18" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial19.jpg" alt="Pablos Restaurant — Especial 19" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial20.jpg" alt="Pablos Restaurant — Especial 20" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial21.jpg" alt="Pablos Restaurant — Especial 21" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial22.jpg" alt="Pablos Restaurant — Especial 22" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial23.jpg" alt="Pablos Restaurant — Especial 23" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Restaurant/img/especial24.jpg" alt="Pablos Restaurant — Especial 24" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Jugo: jugo (0–3) ===== -->
	    <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/Pablos_Restaurant/img/jugo1.jpg" alt="Pablos Restaurant — Jugo 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/Pablos_Restaurant/img/jugo2.jpg" alt="Pablos Restaurant — Jugo 2" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Sopas: sopas (0–1) ===== -->
	    <div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/Pablos_Restaurant/img/sopas.jpeg"  alt="Pablos Restaurant — Sopas"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/Pablos_Restaurant/img/sopas1.jpeg" alt="Pablos Restaurant — Sopas 1" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Lugar: lugar (0–11) ===== -->
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar.jpeg"   alt="Pablos Restaurant — Lugar"    width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar1.jpeg"  alt="Pablos Restaurant — Lugar 1"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar2.jpeg"  alt="Pablos Restaurant — Lugar 2"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar3.jpeg"  alt="Pablos Restaurant — Lugar 3"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar4.jpeg"  alt="Pablos Restaurant — Lugar 4"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar5.jpeg"  alt="Pablos Restaurant — Lugar 5"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar6.jpeg"  alt="Pablos Restaurant — Lugar 6"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar7.jpeg"  alt="Pablos Restaurant — Lugar 7"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar8.jpeg"  alt="Pablos Restaurant — Lugar 8"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar9.jpeg"  alt="Pablos Restaurant — Lugar 9"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar10.jpeg" alt="Pablos Restaurant — Lugar 10" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar11.jpeg" alt="Pablos Restaurant — Lugar 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	  </div>
	</section>
	<script src="<?php echo '../../../view/gastronomia/Pablos_Restaurant/galery/gastronomia.js?v=' . filemtime('../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
