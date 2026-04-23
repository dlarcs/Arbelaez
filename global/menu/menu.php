<?php
$cssFile = '../global/menu/menu.css';
$jsFile  = '../global/menu/menu.js';

$cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
$jsTime  = is_file($jsFile) ? filemtime($jsFile) : time();
?>

<link rel="stylesheet" href="../global/menu/menu.css?v=<?= $cssTime ?>">

<header class="site-header">
  <a href="#main" class="skip-link">Saltar al contenido principal</a>

  <a class="brand_menu" href="../index.php" aria-label="Inicio">
    <span class="brand-text">Arbeláez Cundinamarca</span>
  </a>

  <button
    class="burger"
    id="menuToggle"
    type="button"
    aria-label="Abrir menú"
    aria-controls="site-nav"
    aria-expanded="false"
  >
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="scrim" id="menuScrim" aria-hidden="true"></div>

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

<script defer src="../global/menu/menu.js?v=<?= $jsTime ?>"></script>
