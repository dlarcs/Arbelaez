<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/imagen/imagen.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="/home/imagen/imagen.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="seccion_imagen" aria-label="Portada Yo amo Arbeláez">
  <img
  src="/home/img/parque_principal.jpg"
   alt="Turismo en Arbeláez"
   width="800"
   height="600"
   loading="lazy"
   decoding="async"
  >
  <div class="imagen">
    <div class="text_imagen">
      <span class="text_imagen__eyebrow">Turismo · Naturaleza · Cultura</span>
      <h1>¡Bienvenido a lo mejor de Arbeláez!</h1>
      <p>
        Descubre paisajes, sabores, artesanías y experiencias que hacen único este rincón de Cundinamarca.
      </p>
    </div>
  </div>
</section>
