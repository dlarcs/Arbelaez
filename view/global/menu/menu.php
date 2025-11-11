<?php
$cssTime = filemtime('../../view/global/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../view/global/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
	  <!-- Enlace de salto (accesibilidad) -->

	  <!-- Marca / logo -->
	  <a class="brand_menu" href="../../view/home/index.php" aria-label="Inicio">
	    <h1 class="brand-text">Arbeláez Turismo</h1>
	    <!-- <img src="../../../view/pages/kapaLuna360°/menu/img/logo_kapaLuna.png" alt="Arbeláez Turismo" class="brand-logo"> -->
	  </a>

	  <!-- Toggle (checkbox) -->
	  <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

	  <!-- Botón hamburguesa -->
	  <label for="nav-toggle"
	         class="burger"
	         aria-label="Abrir menú"
	         aria-controls="site-nav"></label>

	  <!-- Scrim para cerrar tocando fuera del panel -->
	  <label for="nav-toggle" class="scrim" aria-hidden="true"></label>

	  <!-- Navegación -->
	  <nav id="site-nav" class="nav" role="navigation" aria-label="Navegación principal">
	    <!-- Botón cerrar dentro del panel (mejora UX sin JS) -->

	    <ul class="nav-list">
	      <li><a href="../../view/home/index.php">Inicio</a></li>
	      <li><a href="../../view/galery/index.php">Galería</a></li>
	      <li><a href="../../view/history/index.php">Historia</a></li>
	      <li><a href="../../">Ferias</a></li>
	    </ul>
	  </nav>
	</header>

	<!-- Recuerda colocar un id="main" en tu contenedor principal -->
	<main id="main">
	  <!-- contenido -->
	</main>
