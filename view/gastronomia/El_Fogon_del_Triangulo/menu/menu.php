<?php
$cssTime = filemtime('../../../view/gastronomia/El_Fogon_del_Triangulo/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Fogon_del_Triangulo/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../../view/home/index.php" aria-label="Inicio">
			<h1 class="brand-text">El Fogón del Triángulo</h1>

			<!-- <img src="../../../view/El_Fogon_del_Triangulo/menu/img/logo_El_Fogon_triangulo.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../../view/home/index.php">Inicio</a></li>
				<li><a href="#menu_El_Fogon_triangulo">Menu</a></li>
				<li><a href="#galery_El_Fogon_triangulo">Galeria</a></li>
				<li><a href="#about_El_Fogon_triangulo">Nosotros</a></li>
				<li><a href="#ubicacion_El_Fogon_triangulo">Ubicación</a></li>
				<li><a class="cta" href="../../../view/gastronomia/index.php">Volver</a></li>
			</ul>
		</nav>
	</header>
