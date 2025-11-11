<?php
$cssTime = filemtime('../../../view/gastronomia/El_Fogon_del_Triangulo/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/gastronomia/El_Fogon_del_Triangulo/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Fogon_del_Triangulo/galery/gastronomia.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="galery_El_Fogon_triangulo">

		<!-- Título principal -->
		<h1>Nuestra Gastronomía</h1>

		<!-- ===== Filtros de categorías ===== -->
		<div class="categories_food_gallery">
			<ul>
				<li class="filter_items active" data-filter="all">Todos</li>
				<li class="filter_items" data-filter="Almuerzos">Almuerzos</li>
				<li class="filter_items" data-filter="Especiales">Especiales</li>
				<li class="filter_items" data-filter="General">General</li>
			</ul>
		</div>

		<!-- ===== Contenedor de platos ===== -->
		<div class="food_gallery_container">

  <!-- ===== Almuerzos ===== -->
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo.jpg" alt="Almuerzo" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo1.jpg" alt="Almuerzo 1" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo2.jpg" alt="Almuerzo 2" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo3.jpg" alt="Almuerzo 3" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo4.jpg" alt="Almuerzo 4" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo5.jpg" alt="Almuerzo 5" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo6.jpg" alt="Almuerzo 6" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo7.jpg" alt="Almuerzo 7" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo8.jpg" alt="Almuerzo 8" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo9.jpg" alt="Almuerzo 9" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Almuerzos">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/almuerzo10.jpg" alt="Almuerzo 10" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <!-- ===== Especiales ===== -->
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial.jpg" alt="Especial" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial1.jpg" alt="Especial 1" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial2.jpg" alt="Especial 2" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial3.jpg" alt="Especial 3" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial4.jpg" alt="Especial 4" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial5.jpg" alt="Especial 5" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial6.jpg" alt="Especial 6" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial7.jpg" alt="Especial 7" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card Especiales">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/especial8.jpg" alt="Especial 8" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

  <!-- ===== General (Lugares) ===== -->
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar.jpg" alt="Lugar" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar1.jpg" alt="Lugar 1" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar2.jpg" alt="Lugar 2" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar3.jpg" alt="Lugar 3" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar4.jpg" alt="Lugar 4" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar5.jpg" alt="Lugar 5" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar6.jpg" alt="Lugar 6" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar7.jpg" alt="Lugar 7" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar8.jpg" alt="Lugar 8" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar9.jpg" alt="Lugar 9" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar10.jpg" alt="Lugar 10" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar11.jpg" alt="Lugar 11" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>
  <div class="food_card General">
    <img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/lugar12.jpg" alt="Lugar 12" loading="lazy" decoding="async" fetchpriority="low">
    <div class="overlay_food_card"><div class="food_info"></div></div>
  </div>

</div>

	</section>

	<script src="<?php echo '../../../view/gastronomia/El_Fogon_del_Triangulo/galery/gastronomia.js?v=' . filemtime('../../view/gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
