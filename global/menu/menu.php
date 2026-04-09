<?php
$cssTime = filemtime('../global/menu/menu.css'); 
?>
	<link rel="stylesheet" href="../global/menu/menu.css?v=<?= $cssTime ?>">
	<!-- ===== HEADER PRINCIPAL DE LA PÁGINA ===== -->
	<!-- HEADER -->
	<header class="site-header">
  <!-- Enlace de salto (accesibilidad) -->
  <a href="#main" class="skip-link">Saltar al contenido principal</a>

  <!-- Marca / logo -->
  <a class="brand_menu" href="../index.php" aria-label="Inicio">
    <h1 class="brand-text">Arbeláez Cundinamarca</h1>
    <!-- <img src="../../pages/kapaLuna360°/menu/img/logo_kapaLuna.png" alt="Arbeláez Turismo" class="brand-logo"> -->
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
    <!-- Botón cerrar dentro del panel -->

    <ul class="nav-list">
      <li><a href="../index.php">Inicio</a></li>
      <!-- <li><a href="../galery/index.php">Galería</a></li> -->
			<li><a href="../artesanias/index.php">Artesanías</a></li>
			<li><a href="../alojamiento/index.php">Alojamiento</a></li>
      <li><a href="../gastronomia/index.php">Gastronomía</a></li>
      <!-- <li><a href="../">Ferias</a></li> -->
    </ul>
  </nav>
</header>
