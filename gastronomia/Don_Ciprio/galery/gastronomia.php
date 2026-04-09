<?php
$cssTime = filemtime('../../gastronomia/Don_Ciprio/galery/gastronomia.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../gastronomia/Don_Ciprio/galery/gastronomia.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../gastronomia/Don_Ciprio/galery/gastronomia.css?v=<?= $cssTime ?>">
	<!-- ===== Contenedor de platos ===== -->
	<section class="section_food_gallery" id="galery_Don_Ciprio">
		<h1>Nuestra Gastronomía</h1>

		<div class="categories_food_gallery">
			<ul>
				<li class="filter_items active" data-filter="all">Todos</li>
				<li class="filter_items" data-filter="comida">Comida</li>
				<li class="filter_items" data-filter="general">General</li>
			</ul>
		</div>
	  <div class="food_gallery_container">


	    <!-- ===== Comida (comida.jpeg a comida8.jpeg) ===== -->
	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida.jpeg" alt="Comida" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida1.jpeg" alt="Comida 1" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida2.jpeg" alt="Comida 2" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida3.jpeg" alt="Comida 3" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida4.jpeg" alt="Comida 4" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida5.jpeg" alt="Comida 5" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida6.jpeg" alt="Comida 6" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida7.jpeg" alt="Comida 7" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card comida">
	      <img src="../../gastronomia/Don_Ciprio/img/comida8.jpeg" alt="Comida 8" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <!-- ===== General (general.jpeg a general19.jpeg) ===== -->
	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general.jpeg" alt="General" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general1.jpeg" alt="General 1" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general2.jpeg" alt="General 2" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general3.jpeg" alt="General 3" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general4.jpeg" alt="General 4" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general5.jpeg" alt="General 5" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general6.jpeg" alt="General 6" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general7.jpeg" alt="General 7" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general8.jpeg" alt="General 8" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general9.jpeg" alt="General 9" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general10.jpeg" alt="General 10" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general11.jpeg" alt="General 11" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general12.jpeg" alt="General 12" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general13.jpeg" alt="General 13" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general14.jpeg" alt="General 14" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general15.jpeg" alt="General 15" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general16.jpeg" alt="General 16" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general17.jpeg" alt="General 17" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general18.jpeg" alt="General 18" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	    <div class="food_card general">
	      <img src="../../gastronomia/Don_Ciprio/img/general19.jpeg" alt="General 19" loading="lazy" decoding="async" fetchpriority="low">
	      <div class="overlay_food_card"><div class="food_info"></div></div>
	    </div>

	  </div>
	</section>


	<script src="<?php echo '../../gastronomia/Don_Ciprio/galery/gastronomia.js?v=' . filemtime('../../gastronomia/seccion/gastronomia.js'); ?>" type="text/javascript"></script>
