<?php
$cssTime = filemtime('../../../view/gastronomia/La_Marranada/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/gastronomia/La_Marranada/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/La_Marranada/galery/gastronomia.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="galery_La_Marranada">

			  <!-- Título principal -->
			  <h1>Nuestra Gastronomía</h1>

			  <!-- ===== Filtros de categorías ===== -->
			  <div class="categories_food_gallery">
			    <ul>
			      <li class="filter_items active" data-filter="all">Todos</li>
			      <li class="filter_items" data-filter="especial">especial</li>
						<li class="filter_items" data-filter="almuerzo">Almuerzo</li>
						<li class="filter_items" data-filter="sopas">Sopas</li>
			      <li class="filter_items" data-filter="Lugar">Lugar</li>
						<li class="filter_items" data-filter="naturaleza">Naturaleza</li>

			    </ul>
			  </div>

			  <!-- ===== Contenedor ===== -->
			  <div class="food_gallery_container">

			    <!-- ===== gastronomia (20) ===== -->
			    <div class="food_card General">
			      <img src="../../../view/gastronomia/La_Marranada/img/especial.jpg" alt="especial" width="1200" height="800" loading="lazy" decoding="async">
			    </div>

			    <!-- ===== Comida ===== -->
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial1.jpg" alt="especial 1" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial2.jpg" alt="especial 2" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial3.jpg" alt="especial 3" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial4.jpg" alt="especial 4" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial5.jpg" alt="especial 5" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial6.jpg" alt="especial 6" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial7.jpg" alt="especial 7" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial8.jpg" alt="especial 8" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial9.jpg" alt="especial 9" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card especial"><img src="../../../view/gastronomia/La_Marranada/img/especial10.jpg" alt="especial 10" width="1200" height="800" loading="lazy" decoding="async"></div>
					<!-- ===== Almuerzo  ===== -->
					<div class="food_card almuerzo"><img src="../../../view/gastronomia/La_Marranada/img/almuerzo.jpg" alt="almuerzo 0" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card almuerzo"><img src="../../../view/gastronomia/La_Marranada/img/almuerzo1.jpg" alt="almuerzo 1" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card almuerzo"><img src="../../../view/gastronomia/La_Marranada/img/almuerzo2.jpg" alt="almuerzo 2" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card almuerzo"><img src="../../../view/gastronomia/La_Marranada/img/almuerzo3.jpg" alt="almuerzo 3" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card almuerzo"><img src="../../../view/gastronomia/La_Marranada/img/almuerzo4.jpg" alt="almuerzo 4" width="1200" height="800" loading="lazy" decoding="async"></div>

			    <!-- ===== Lugar  ===== -->
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar18.jpg" alt="Lugar 0" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar.jpg" alt="Lugar 1" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar1.jpg" alt="Lugar 2" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar2.jpg" alt="Lugar 3" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar3.jpg" alt="Lugar 4" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar4.jpg" alt="Lugar 5" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar5.jpg" alt="Lugar 6" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar6.jpg" alt="Lugar 7" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar7.jpg" alt="Lugar 8" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar10.jpg" alt="Lugar 11" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar11.jpg" alt="Lugar 12" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar12.jpg" alt="Lugar 13" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar13.jpg" alt="Lugar 14" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar14.jpg" alt="Lugar 15" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar15.jpg" alt="Lugar 16" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar16.jpg" alt="Lugar 17" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card Lugar"><img src="../../../view/gastronomia/La_Marranada/img/lugar17.jpg" alt="Lugar 18" width="1200" height="800" loading="lazy" decoding="async"></div>

					<!-- ===== naturaleza (7) ===== -->
				  <div class="food_card naturaleza"><img src="../../../view/gastronomia/La_Marranada/img/naturaleza.jpg" alt="naturaleza 0" width="1200" height="800" loading="lazy" decoding="async"></div>
				  <div class="food_card naturaleza"><img src="../../../view/gastronomia/La_Marranada/img/naturaleza1.jpg" alt="naturaleza 1" width="1200" height="800" loading="lazy" decoding="async"></div>
				  <div class="food_card naturaleza"><img src="../../../view/gastronomia/La_Marranada/img/naturaleza2.jpg" alt="naturaleza 2" width="1200" height="800" loading="lazy" decoding="async"></div>
					<!-- ===== sopas (7) ===== -->
					<div class="food_card sopas"><img src="../../../view/gastronomia/La_Marranada/img/sopas.jpg" alt="sopas 0" width="1200" height="800" loading="lazy" decoding="async"></div>
					<div class="food_card sopas"><img src="../../../view/gastronomia/La_Marranada/img/sopas1.jpg" alt="sopas 1" width="1200" height="800" loading="lazy" decoding="async"></div>

			  </div>
	</section>

	<script src="<?php echo '../../../view/gastronomia/La_Marranada/galery/gastronomia.js?v=' . filemtime('../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
