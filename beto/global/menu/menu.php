<?php
$cssTime = filemtime('../../beto/global/menu/menu.css');
$jsTime  = filemtime('../../beto/global/menu/menu.js');
?>
<link rel="stylesheet" href="../../beto/global/menu/menu.css?v=<?= $cssTime ?>">

<header class="site-header">
  <!-- Marca -->
  <a href="#" class="brand">
     <img class="brand__mark" src="../../beto/global/img/GRUPOGRAFI.png" alt=""> 
    <span class="brand__text">
      <span class="brand__name">Design Glow</span>
      <span class="brand__tagline">Señalización · Impresión · Branding</span>
    </span>
  </a>

  <!-- Botón mobile -->
  <button class="nav-toggle" aria-expanded="false" aria-label="Abrir menú principal">
    <span class="nav-toggle__line"></span>
    <span class="nav-toggle__line"></span>
    <span class="nav-toggle__line"></span>
  </button>

  <!-- Menú principal -->
  <nav class="main-nav" aria-label="Menú principal">
    <ul class="nav__list">

      <!-- Página 1 -->
      <li class="nav__item nav__item--has-submenu">
        <button class="nav__link nav__link--parent" data-submenu="corte-acrilico">
          Corte &amp; Acrílico
          <span class="nav__chevron"></span>
        </button>
        <div class="nav__submenu" data-submenu-panel="corte-acrilico">
          <a href="#" class="nav__submenu-link">Corte láser</a>
          <a href="#" class="nav__submenu-link">Avisos en acrílico</a>
          <a href="#" class="nav__submenu-link">Retablos</a>
          <a href="#" class="nav__submenu-link">Neonflex</a>
        </div>
      </li>

      <!-- Página 2 -->
      <li class="nav__item nav__item--has-submenu">
        <button class="nav__link nav__link--parent" data-submenu="vinilos-decoracion">
          Vinilos &amp; Decoración
          <span class="nav__chevron"></span>
        </button>
        <div class="nav__submenu" data-submenu-panel="vinilos-decoracion">
          <a href="#" class="nav__submenu-link">Vinilos adhesivos</a>
          <a href="#" class="nav__submenu-link">Frosted</a>
          <a href="#" class="nav__submenu-link">Microperforado</a>
          <a href="#" class="nav__submenu-link">Tropezones</a>
        </div>
      </li>

      <!-- Página 3 -->
      <li class="nav__item nav__item--has-submenu">
        <button class="nav__link nav__link--parent" data-submenu="gran-formato">
          Gran formato &amp; Exterior
          <span class="nav__chevron"></span>
        </button>
        <div class="nav__submenu" data-submenu-panel="gran-formato">
          <a href="#" class="nav__submenu-link">Impresión gran formato</a>
          <a href="#" class="nav__submenu-link">Pendones</a>
          <a href="#" class="nav__submenu-link">Panaflex</a>
          <a href="#" class="nav__submenu-link">Vallas publicitarias</a>
        </div>
      </li>

      <!-- Página 4 -->
      <li class="nav__item nav__item--has-submenu">
        <button class="nav__link nav__link--parent" data-submenu="papeleria">
          Papelería &amp; Promos
          <span class="nav__chevron"></span>
        </button>
        <div class="nav__submenu" data-submenu-panel="papeleria">
          <a href="#" class="nav__submenu-link">Tarjetas</a>
          <a href="#" class="nav__submenu-link">Volantes</a>
          <a href="#" class="nav__submenu-link">Papelería comercial</a>
          <a href="#" class="nav__submenu-link">Imanes</a>
        </div>
      </li>

      <!-- Página 5 -->
      <li class="nav__item nav__item--has-submenu">
        <button class="nav__link nav__link--parent" data-submenu="branding-vehicular">
          Branding &amp; Vehículos
          <span class="nav__chevron"></span>
        </button>
        <div class="nav__submenu" data-submenu-panel="branding-vehicular">
          <a href="#" class="nav__submenu-link">Branding para carros</a>
          <a href="#" class="nav__submenu-link">Plotter de corte</a>
          <a href="#" class="nav__submenu-link">Habladores</a>
        </div>
      </li>
    </ul>
  </nav>
</header>

<script src="../../beto/global/menu/menu.js?v=<?= $jsTime ?>" type="text/javascript"></script>
