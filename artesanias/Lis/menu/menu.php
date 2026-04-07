<?php
$cssTime = filemtime('../../../view/artesanias/Lis/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/artesanias/Lis/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../../view/home/index.php" aria-label="Inicio">
			<h1 class="brand-text">Artesanías Lis</h1>

			<!-- <img src="../../../view/gastronomia/huerto/menu/img/logo_huerto.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../../view/home/index.php">Inicio</a></li>
				<li><a href="#producto_Lis">Productos</a></li>
				<li><a href="#about_Lis">Nosotros</a></li>
				<li><a href="#ubicacion_Lis">Ubicación</a></li>
				<li><a class="cta" href="../../../view/artesanias/index.php">Volver</a></li>
			</ul>
		</nav>
	</header>
