<?php
$cssTime = filemtime('../../../view/gastronomia/Pablos_Rios/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/gastronomia/Pablos_Rios/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Pablos_Rios/galery/gastronomia.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="galery_Pablos_Rios">
	  <!-- Título principal -->
	  <h1>Nuestra Gastronomía</h1>

	  <!-- ===== Filtros de categorías ===== -->
	  <div class="categories_food_gallery">
	    <ul>
	      <li class="filter_items active" data-filter="all">Todos</li>
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


	    <!-- ===== Almuerzos: almuerzo (0–8) ===== -->
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo.jpeg"  alt="Pablos Restaurant — Almuerzo"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo1.jpeg" alt="Pablos Restaurant — Almuerzo 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo2.jpeg" alt="Pablos Restaurant — Almuerzo 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo3.jpeg" alt="Pablos Restaurant — Almuerzo 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo4.jpeg" alt="Pablos Restaurant — Almuerzo 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo5.jpeg" alt="Pablos Restaurant — Almuerzo 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo6.jpg" alt="Pablos Restaurant — Almuerzo 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo7.jpg" alt="Pablos Restaurant — Almuerzo 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/Pablos_Rios/img/almuerzo8.jpg" alt="Pablos Restaurant — Almuerzo 8"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Ensalada: Ensalada (0–1) ===== -->
	    <div class="food_card Ensalada" data-filter="Ensalada"><img src="../../../view/gastronomia/Pablos_Rios/img/ensaladas.jpeg"  alt="Pablos Restaurant — Ensalada"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Ensalada" data-filter="Ensalada"><img src="../../../view/gastronomia/Pablos_Rios/img/ensaladas1.jpeg" alt="Pablos Restaurant — Ensalada 1"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Especial: Especial (0–32) ===== -->
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial.jpeg"  alt="Pablos Restaurant — Especial"     width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial1.jpeg" alt="Pablos Restaurant — Especial 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial2.jpeg" alt="Pablos Restaurant — Especial 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial3.jpeg" alt="Pablos Restaurant — Especial 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial4.jpeg" alt="Pablos Restaurant — Especial 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial5.jpeg" alt="Pablos Restaurant — Especial 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial6.jpg" alt="Pablos Restaurant — Especial 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial7.jpg" alt="Pablos Restaurant — Especial 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial8.jpg" alt="Pablos Restaurant — Especial 8"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial9.jpg" alt="Pablos Restaurant — Especial 9"   width="1200" height="800" loading="lazy" decoding="async"></div>

	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial10.jpg" alt="Pablos Restaurant — Especial 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial11.jpg" alt="Pablos Restaurant — Especial 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial12.jpg" alt="Pablos Restaurant — Especial 12" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial13.jpg" alt="Pablos Restaurant — Especial 13" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial14.jpg" alt="Pablos Restaurant — Especial 14" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial15.jpg" alt="Pablos Restaurant — Especial 15" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial16.jpg" alt="Pablos Restaurant — Especial 16" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial17.jpg" alt="Pablos Restaurant — Especial 17" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial18.jpg" alt="Pablos Restaurant — Especial 18" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial19.jpg" alt="Pablos Restaurant — Especial 19" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial20.jpg" alt="Pablos Restaurant — Especial 20" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial21.jpg" alt="Pablos Restaurant — Especial 21" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial22.jpg" alt="Pablos Restaurant — Especial 22" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial23.jpg" alt="Pablos Restaurant — Especial 23" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial24.jpg" alt="Pablos Restaurant — Especial 24" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial25.jpg" alt="Pablos Restaurant — Especial 25" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial26.jpg" alt="Pablos Restaurant — Especial 26" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial27.jpg" alt="Pablos Restaurant — Especial 27" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial28.jpg" alt="Pablos Restaurant — Especial 28" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial29.jpg" alt="Pablos Restaurant — Especial 29" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial30.jpg" alt="Pablos Restaurant — Especial 30" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial31.jpg" alt="Pablos Restaurant — Especial 31" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/Pablos_Rios/img/especial32.jpg" alt="Pablos Restaurant — Especial 32" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Jugo: jugo (0–3) ===== -->
	    <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/Pablos_Rios/img/jugo.jpg"  alt="Pablos Restaurant — Jugo"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/Pablos_Rios/img/jugo1.jpg" alt="Pablos Restaurant — Jugo 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/Pablos_Rios/img/jugo2.jpg" alt="Pablos Restaurant — Jugo 2" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Sopas: sopas (0–1) ===== -->
	    <div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/Pablos_Rios/img/sopas.jpeg"  alt="Pablos Restaurant — Sopas"   width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/Pablos_Rios/img/sopas1.jpeg" alt="Pablos Restaurant — Sopas 1" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Lugar: lugar (0–11) ===== -->
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar.jpeg"   alt="Pablos Restaurant — Lugar"    width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar1.jpeg"  alt="Pablos Restaurant — Lugar 1"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar2.jpeg"  alt="Pablos Restaurant — Lugar 2"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar3.jpeg"  alt="Pablos Restaurant — Lugar 3"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar4.jpeg"  alt="Pablos Restaurant — Lugar 4"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar5.jpeg"  alt="Pablos Restaurant — Lugar 5"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar6.jpeg"  alt="Pablos Restaurant — Lugar 6"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar7.jpeg"  alt="Pablos Restaurant — Lugar 7"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar8.jpeg"  alt="Pablos Restaurant — Lugar 8"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar9.jpeg"  alt="Pablos Restaurant — Lugar 9"  width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar10.jpeg" alt="Pablos Restaurant — Lugar 10" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar11.jpeg" alt="Pablos Restaurant — Lugar 11" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/Pablos_Rios/img/lugar12.jpg" alt="Pablos Restaurant — Lugar 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	  </div>
	</section>
	<script src="<?php echo '../../../view/gastronomia/Pablos_Rios/galery/gastronomia.js?v=' . filemtime('../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
