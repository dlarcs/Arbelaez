<?php
$cssTime = filemtime('../../../view/gastronomia/Pablos_Restaurant/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Pablos_Restaurant/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../../view/home/index.php" aria-label="Inicio">
			<h1 class="brand-text">Pablo's Restaurant</h1>

			<!-- <img src="../../../view/gastronomia/Pablos_Restaurant°/menu/img/logo_Pablos_Restaurant.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../../view/home/index.php">Inicio</a></li>
				<li><a href="#menu_Pablos_Restaurant">Menú</a></li>
				<li><a href="#galery_Pablos_Restaurant">Galería</a></li>
				<li><a href="#about_Pablos_Restaurant">Nosotros</a></li>
				<li><a href="#ubicacion_Pablos_Restaurant">Ubicación</a></li>
				<li><a class="cta" href="../../../view/gastronomia/index.php">Volver</a></li>
			</ul>
		</nav>
	</header>
