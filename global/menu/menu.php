<?php
$cssFile = '../global/menu/menu.css';
$cssTime = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="<?= $cssFile ?><?= $cssTime ? '?v=' . $cssTime : '' ?>">

<header class="site-header">
  <a class="brand_menu" href="../index.php" aria-label="Inicio">
    Arbeláez Cundinamarca
  </a>

  <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>

  <label for="nav-toggle" class="burger" aria-label="Abrir menú">
    <span></span><span></span><span></span>
  </label>

  <label for="nav-toggle" class="scrim" aria-hidden="true"></label>

  <nav class="nav" aria-label="Navegación principal">
    <a href="../index.php">Inicio</a>
    <a href="../artesanias/index.php">Artesanías</a>
    <a href="../alojamiento/index.php">Alojamiento</a>
    <a href="../gastronomia/index.php">Gastronomía</a>
    <a href="../rio/index.php">Zonas de agua</a>
    <a href="../festividades/index.php">Festividades</a>
  </nav>
</header>
