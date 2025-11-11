<?php
$cssTime = filemtime('../../view/Juntanza_de_Mujeres/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../view/Juntanza_de_Mujeres/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
		<!-- Marca / logo -->
		<a class="brand_menu" href="../../view/home/index.php" aria-label="Inicio">
			<h1 class="brand-text">Juntanza de Mujeres</h1>

			<!-- <img src="../../view/gastronomia/Juntanza_de_Mujeres°/menu/img/logo_Juntanza_de_Mujeres.png" alt="" class="brand-logo"> -->

		</a>

		<!-- Toggle (checkbox) -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

		<!-- Botón hamburguesa -->
		<label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

		<!-- Navegación -->
		<nav id="site-nav" class="nav">
			<ul class="nav-list">
				<li><a href="../../view/home/index.php">Inicio</a></li>
				<li><a href="#menu_Juntanza_de_Mujeres">Menu</a></li>
				<li><a href="#galery_Juntanza_de_Mujeres">Galeria</a></li>
				<li><a href="#about_Juntanza_de_Mujeres">Nosotros</a></li>
				<li><a href="#ubicacion_Juntanza_de_Mujeres">Ubicación</a></li>
				<li><a class="cta" href="../../view/gastronomia/index.php">Volver</a></li>
			</ul>
		</nav>
	</header>
