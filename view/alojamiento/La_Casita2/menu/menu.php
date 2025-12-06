<?php
$cssTime = filemtime('../../../view/alojamiento/La_Casita2/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/La_Casita2/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<header class="site-header">
  <a class="brand_menu" href="../../../view/home/index.php" aria-label="Inicio">
    <h1 class="brand-text">La Casita N°2</h1>
  </a>

  <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

  <!-- Botón hamburguesa -->
  <label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

  <!-- Navegación -->
  <nav id="site-nav" class="nav">
    <ul class="nav-list">
      <li><a href="../../../view/home/index.php">Inicio</a></li>
      <li><a href="#producto_La_Casita2">Galería</a></li>
      <li><a href="#about_La_Casita2">Nosotros</a></li>
      <li><a href="#ubicacion_La_Casita2">Ubicación</a></li>
      <li><a class="cta" href="../../../view/alojamiento/index.php">Volver</a></li>
    </ul>
  </nav>
</header>
