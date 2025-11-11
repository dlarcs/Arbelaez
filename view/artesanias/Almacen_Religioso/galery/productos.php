<?php
$cssTime = filemtime('../../../view/artesanias/Almacen_Religioso/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/artesanias/Almacen_Religioso/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/artesanias/Almacen_Religioso/galery/productos.css?v=<?= $cssTime ?>">
	<section class="section_food_gallery" id="producto_Almacen_Religioso">

	  <!-- Título principal -->
	  <h1>Productos</h1>

	  <!-- ===== Filtros de categorías ===== -->
		<div class="categories_food_gallery">
     <ul>
       <li class="filter_items active" data-filter="all">Todos</li>
       <li class="filter_items" data-filter="Artesanias">Artesanías</li>
       <li class="filter_items" data-filter="Plantas">Plantas</li>
       <li class="filter_items" data-filter="Religioso">Religioso</li>
			 <li class="filter_items" data-filter="General">General</li>
     </ul>
   </div>
	  <!-- ===== Contenedor ===== -->
	  <div class="food_gallery_container">

	    <!-- ===== ARTESANIAS (20) ===== -->
			<div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias.jpg" alt="Artesanías 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias1.jpg" alt="Artesanías 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias2.jpg" alt="Artesanías 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias3.jpg" alt="Artesanías 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias4.jpg" alt="Artesanías 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias5.jpg" alt="Artesanías 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias6.jpg" alt="Artesanías 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias7.jpg" alt="Artesanías 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias8.jpg" alt="Artesanías 9" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias9.jpg" alt="Artesanías 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias10.jpg" alt="Artesanías 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias11.jpg" alt="Artesanías 12" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias12.jpg" alt="Artesanías 13" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias13.jpg" alt="Artesanías 14" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias14.jpg" alt="Artesanías 15" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias15.jpg" alt="Artesanías 16" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias16.jpg" alt="Artesanías 17" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias17.jpg" alt="Artesanías 18" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias18.jpg" alt="Artesanías 19" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias19.jpg" alt="Artesanías 20" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias20.jpg" alt="artesanias 21" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias21.jpg" alt="Artesanías 22" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Artesanias"><img src="../../../view/artesanias/Almacen_Religioso/img/artesanias22.jpg" alt="Artesanías 23" width="1200" height="800" loading="lazy" decoding="async"></div> -->

	    <!-- ===== plantas (6) ===== -->
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas.jpg" alt="plantas 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas1.jpg" alt="plantas 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas2.jpg" alt="plantas 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas3.jpg" alt="plantas 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas4.jpg" alt="plantas 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Plantas"><img src="../../../view/artesanias/Almacen_Religioso/img/plantas5.jpg" alt="plantas 6" width="1200" height="800" loading="lazy" decoding="async"></div>

	    <!-- ===== Religioso ===== -->
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso.jpg" alt="religioso 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso1.jpg" alt="religioso 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso2.jpg" alt="religioso 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso3.jpg" alt="religioso 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso4.jpg" alt="religioso 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso5.jpg" alt="religioso 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso6.jpg" alt="religioso 7" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso7.jpg" alt="religioso 8" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso8.jpg" alt="religioso 9" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso9.jpg" alt="religioso 10" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso10.jpg" alt="religioso 11" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso11.jpg" alt="religioso 12" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso12.jpg" alt="religioso 13" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso13.jpg" alt="religioso 14" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso14.jpg" alt="religioso 15" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <!-- <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso15.jpg" alt="religioso 16" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso16.jpg" alt="religioso 17" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso17.jpg" alt="religioso 18" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso18.jpg" alt="religioso 19" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso19.jpg" alt="religioso 20" width="1200" height="800" loading="lazy" decoding="async"></div>
	    <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso20.jpg" alt="religioso 21" width="1200" height="800" loading="lazy" decoding="async"></div>
			<div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso21.jpg" alt="religioso 22" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso22.jpg" alt="religioso 23" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso23.jpg" alt="religioso 24" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso24.jpg" alt="religioso 25" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso25.jpg" alt="religioso 26" width="1200" height="800" loading="lazy" decoding="async"></div>
		  <div class="food_card Religioso"><img src="../../../view/artesanias/Almacen_Religioso/img/religioso26.jpg" alt="religioso 27" width="1200" height="800" loading="lazy" decoding="async"></div> -->


	  </div>

	</section>


	<script src="<?php echo '../../../view/artesanias/Almacen_Religioso/galery/productos.js?v=' . filemtime('../../../view/artesanias/Almacen_Religioso/galery/productos.js'); ?>" type="text/javascript"></script>
