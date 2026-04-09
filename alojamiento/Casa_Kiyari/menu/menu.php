<?php
$cssTime = filemtime('../alojamiento/Casa_Kiyari/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../alojamiento/Casa_Kiyari/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<header class="site-header">
  <a class="brand_menu" href="../home/index.php" aria-label="Inicio">
    <h1 class="brand-text">Kiyari</h1>
  </a>

  <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

  <!-- Botón hamburguesa -->
  <label for="nav-toggle" class="burger" aria-label="Abrir menú" aria-controls="site-nav"></label>

  <!-- Navegación -->
  <nav id="site-nav" class="nav">
    <ul class="nav-list">
      <li><a href="../home/index.php">Inicio</a></li>
      <li><a href="#producto_Casa_Kiyari">Galería</a></li>
      <li><a href="#about_Casa_Kiyari">Nosotros</a></li>
      <li><a href="#ubicacion_Casa_Kiyari">Ubicación</a></li>
      <li><a class="cta" href="../alojamiento/index.php">Volver</a></li>
    </ul>
  </nav>
</header>
