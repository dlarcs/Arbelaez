<?php
$cssFile = '../global/menu/menu.css';
$cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
?>

<link rel="stylesheet" href="../global/menu/menu.css?v=<?= $cssTime ?>">

<header class="site-header">
  <a href="#main" class="skip-link">Saltar al contenido principal</a>

  <a class="brand_menu" href="../index.php" aria-label="Inicio">
    <span class="brand-text">Arbeláez Cundinamarca</span>
  </a>

  <input type="checkbox" id="nav-toggle" class="nav-toggle">

  <label
    for="nav-toggle"
    class="burger"
    aria-label="Abrir menú"
    aria-controls="site-nav"
    aria-haspopup="true"
  ></label>

  <label for="nav-toggle" class="scrim" aria-hidden="true"></label>

  <nav id="site-nav" class="nav" aria-label="Navegación principal">
    <ul class="nav-list">
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../artesanias/index.php">Artesanías</a></li>
      <li><a href="../alojamiento/index.php">Alojamiento</a></li>
      <li><a href="../gastronomia/index.php">Gastronomía</a></li>
      <li><a href="../festividades/index.php">Festividades</a></li>
      <li><a href="../rio/index.php">Zonas de agua</a></li>
    </ul>
  </nav>
</header>
