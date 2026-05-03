<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/maps/maps.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="/home/maps/maps.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<a
  class="map-card"
  href="https://maps.app.goo.gl/cqEjb9x9jpsAMsqV6"
  target="_blank"
  rel="noopener"
  aria-label="Abrir mapa de Arbeláez en Google Maps"
>
  <img
    src="/home/maps/maps.png"
    alt="Mapa de Arbeláez, Cundinamarca"
    decoding="async"
    width="900"
    height="400"
  >

  <span>Ver ubicación en Google Maps</span>
</a>
