<?php
$cssTime = filemtime('../../global/menu/menu.css'); // ejemplo: '../5.Video/video.css'
?>
	<link rel="stylesheet" href="../../global/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../index.php" aria-label="Inicio">
			<h1 class="brand-text">Arbeláez Cundinamarca</h1>

			<!-- <img src="../../gastronomia/huerto/menu/img/logo_huerto.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../index.php">Inicio</a></li>
				<li><a href="../../artesanias/Almacen_Religioso/index.php">Artesanías</a></li>
				<li><a href="../../alojamiento/index.php">Alojamiento</a></li>
				<li><a href="../../gastronomia/index.php">Gastronomía</a></li>
				<li><a href="../../rio/index.php">Zonas de agua</a></li>
				<li><a href="../../festividades/index.php">Festividades</a></li>
			</ul>
		</nav>
	</header>
