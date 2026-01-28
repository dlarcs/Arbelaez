<?php
$cssPath = '../../view/home/imagen/imagen.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

// Ruta de la imagen de fondo para el preload (igual a la usada en el CSS)
$bgImage = '../../../view/home/img/yoamoarbelaez1.jpeg';
?>

<!-- Rendimiento: precarga de la imagen LCP y fuentes -->
<link rel="preload" as="image" href="<?= $bgImage ?>">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="seccion_imagen" aria-label="Portada Yo amo Arbeláez">
  <img src="../../view/home/img/yoamoarbelaez1.jpeg"
       alt="Paisaje de Arbeláez al atardecer"
       decoding="async" fetchpriority="high">
  <div class="imagen">
    <div class="text_imagen">
      <h1>¡Bienvenido a lo mejor de Arbeláez!</h1>
    </div>
  </div>
</section>
