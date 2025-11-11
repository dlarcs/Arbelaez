<?php
$cssTime = filemtime('../../../view/gastronomia/kalu/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/gastronomia/kalu/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/kalu/galery/gastronomia.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="galery_kalu">

		<!-- Título principal -->
		<h1>Nuestra Gastronomía</h1>
		<!-- ===== Filtros de categorías ===== -->
		<div class="categories_food_gallery">
			<ul>
				<li class="filter_items active" data-filter="all">Todos</li>
				<li class="filter_items" data-filter="Especial">Especial</li>
				<li class="filter_items" data-filter="Jugo">Jugos</li>
				<li class="filter_items" data-filter="Lugar">Lugar</li>
				<li class="filter_items" data-filter="Lugar">Almuerzos</li>
			</ul>
		</div>

		<!-- ===== Contenedor ===== -->
		<div class="food_gallery_container">

			<!-- ===== Desayunos: Desayunos (0–32) ===== -->
			 <!-- <div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos.jpeg"  alt="kalu Restaurant — Desayunos"     width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos1.jpeg" alt="kalu Restaurant — Desayunos 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos2.jpeg" alt="kalu Restaurant — Desayunos 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos3.jpeg" alt="kalu Restaurant — Desayunos 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos4.jpeg" alt="kalu Restaurant — Desayunos 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos5.jpeg" alt="kalu Restaurant — Desayunos 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos6.jpg" alt="kalu Restaurant — Desayunos 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos7.jpg" alt="kalu Restaurant — Desayunos 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos8.jpg" alt="kalu Restaurant — Desayunos 8"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Desayunos" data-filter="Desayunos"><img src="../../../view/gastronomia/kalu/img/Desayunos9.jpg" alt="kalu Restaurant — Desayunos 9"   width="1200" height="800" loading="lazy" decoding="async"></div>
			 ===== Almuerzos: almuerzo (0–8) =====  -->
		  <!-- <div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo.jpeg"  alt="kalu Restaurant — Almuerzo 0"     width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo1.jpeg" alt="kalu Restaurant — Almuerzo 1"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo2.jpeg" alt="kalu Restaurant — Almuerzo 2"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo3.jpeg" alt="kalu Restaurant — Almuerzo 3"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo4.jpeg" alt="kalu Restaurant — Almuerzo 4"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo5.jpeg" alt="kalu Restaurant — Almuerzo 5"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo6.jpeg" alt="kalu Restaurant — Almuerzo 6"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo7.jpeg" alt="kalu Restaurant — Almuerzo 7"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo8.jpeg" alt="kalu Restaurant — Almuerzo 8"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo9.jpeg" alt="kalu Restaurant — Almuerzo 9"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo10.jpeg" alt="kalu Restaurant — Almuerzo 10"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo11.jpeg" alt="kalu Restaurant — Almuerzo 11"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo12.jpeg" alt="kalu Restaurant — Almuerzo 12"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo13.jpeg" alt="kalu Restaurant — Almuerzo 13"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo14.jpeg" alt="kalu Restaurant — Almuerzo 14"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Almuerzos" data-filter="Almuerzos"><img src="../../../view/gastronomia/kalu/img/almuerzo15.jpeg" alt="kalu Restaurant — Almuerzo 15"   width="1200" height="800" loading="lazy" decoding="async"></div> -->

<!-- ===== Especial: Especial (0–32) ===== -->
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial.jpg" alt="kalu Restaurant — Especial 0" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial1.jpg" alt="kalu Restaurant — Especial 1" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial2.jpg" alt="kalu Restaurant — Especial 2" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial3.jpg" alt="kalu Restaurant — Especial 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial4.jpg" alt="kalu Restaurant — Especial 4" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial5.jpg" alt="kalu Restaurant — Especial 5" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial6.jpg" alt="kalu Restaurant — Especial 6" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial7.jpg" alt="kalu Restaurant — Especial 7" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial8.jpg" alt="kalu Restaurant — Especial 8" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial9.jpg" alt="kalu Restaurant — Especial 9" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial10.jpg" alt="kalu Restaurant — Especial 10" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial11.jpg" alt="kalu Restaurant — Especial 11" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial12.jpg" alt="kalu Restaurant — Especial 12" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial13.jpg" alt="kalu Restaurant — Especial 13" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial14.jpg" alt="kalu Restaurant — Especial 14" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial15.jpg" alt="kalu Restaurant — Especial 15" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial16.jpg" alt="kalu Restaurant — Especial 16" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial17.jpg" alt="kalu Restaurant — Especial 17" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Especial" data-filter="Especial"><img src="../../../view/gastronomia/kalu/img/especial18.jpg" alt="kalu Restaurant — Especial 18" width="1200" height="800" loading="lazy" decoding="async"></div>


			<!-- ===== Jugo: jugo (0–3) ===== -->
			 <div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/kalu/img/jugos.jpg"  alt="kalu Restaurant — Jugo"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/kalu/img/jugos1.jpg" alt="kalu Restaurant — Jugo 1" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/kalu/img/jugos2.jpg" alt="kalu Restaurant — Jugo 2" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/kalu/img/jugos3.jpg" alt="kalu Restaurant — Jugo 3" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Jugo" data-filter="Jugo"><img src="../../../view/gastronomia/kalu/img/jugos4.jpg" alt="kalu Restaurant — Jugo 4" width="1200" height="800" loading="lazy" decoding="async"></div>


			<!-- ===== Sopas: sopas (0–1) ===== -->
			<!-- <div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/kalu/img/sopas.jpeg"  alt="kalu Restaurant — Sopas"   width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Sopas" data-filter="Sopas"><img src="../../../view/gastronomia/kalu/img/sopas1.jpeg" alt="kalu Restaurant — Sopas 1" width="1200" height="800" loading="lazy" decoding="async"></div> -->

			<!-- ===== Lugar: lugar (0–11) ===== -->
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar1.jpg"  alt="kalu Restaurant — Lugar 1"  width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar2.jpg"  alt="kalu Restaurant — Lugar 2"  width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar3.jpg"  alt="kalu Restaurant — Lugar 3"  width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar4.jpg"  alt="kalu Restaurant — Lugar 4"  width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar6.jpg"  alt="kalu Restaurant — Lugar 6"  width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar7.jpg"  alt="kalu Restaurant — Lugar 7"  width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar10.jpg" alt="kalu Restaurant — Lugar 10" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar11.jpg" alt="kalu Restaurant — Lugar 11" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar12.jpg" alt="kalu Restaurant — Lugar 12" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar13.jpg" alt="kalu Restaurant — Lugar 13" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar14.jpg" alt="kalu Restaurant — Lugar 14" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar15.jpg" alt="kalu Restaurant — Lugar 15" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Lugar" data-filter="Lugar"><img src="../../../view/gastronomia/kalu/img/lugar16.jpg" alt="kalu Restaurant — Lugar 16" width="1200" height="800" loading="lazy" decoding="async"></div>

		</div>
	</section>

	<script src="<?php echo '../../../view/gastronomia/kalu/galery/gastronomia.js?v=' . filemtime('../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
