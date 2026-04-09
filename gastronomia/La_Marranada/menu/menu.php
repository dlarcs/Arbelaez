<?php
$cssTime = filemtime('../../../gastronomia/La_Marranada/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../gastronomia/La_Marranada/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../../home/index.php" aria-label="Inicio">
			<h1 class="brand-text">La Marranada Campestre</h1>

			<!-- <img src="../../../gastronomia/La_Marranada°/menu/img/logo_La_Marranada.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../../home/index.php">Inicio</a></li>
				<li><a href="#menu_La_Marranada">Menu</a></li>
				<li><a href="#galery_La_Marranada">Galeria</a></li>
				<li><a href="#about_La_Marranada">Nosotros</a></li>
				<li><a href="#ubicacion_La_Marranada">Ubicación</a></li>
				<li><a class="cta" href="../../../gastronomia/index.php">Volver</a></li>
			</ul>
		</nav>
	</header>
