<?php
$cssTime = filemtime('../../view/global/menu/menu.css');
?>
<link rel="stylesheet" href="../../view/global/menu/menu.css?v=<?= $cssTime ?>">

<header class="site-header">
  <a href="#main" class="skip-link">Saltar al contenido principal</a>

  <!-- Marca / logo -->
  <a class="brand_menu" href="../../view/home/index.php" aria-label="Inicio">

    <img src="../../view/global/img/logo.png" alt="Arbeláez" class="brand-logo">

  </a>

  <!-- Navegación -->
  <nav class="nav" aria-label="Navegación principal">
    <ul class="nav-list">
      <li><a href="../../view/home/index.php">Inicio</a></li>
      <li><a href="../../view/artesanias/index.php">Artesanías</a></li>
      <li><a href="../../view/alojamientos/index.php">Alojamientos</a></li>

      <li class="dropdown">
        <details>
          <summary>Más <span class="caret" aria-hidden="true">▾</span></summary>
          <ul class="dropdown-menu">
            <li><a href="../../view/history/index.php">Historia</a></li>
            <!-- Agrega aquí lo que quieras dentro de “Más” -->
            <!-- <li><a href="../../view/turismo/index.php">Turismo</a></li> -->
            <!-- <li><a href="../../view/contacto/index.php">Contacto</a></li> -->
          </ul>
        </details>
      </li>
    </ul>
  </nav>


</header>
