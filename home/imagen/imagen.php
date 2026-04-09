<?php
$cssPath = '../../home/imagen/imagen.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

// Ruta de la imagen de fondo para el preload (igual a la usada en el CSS)
$bgImage = '../../../home/img/yoamoarbelaez1.jpeg';
?>

<!-- Rendimiento: precarga de la imagen LCP y fuentes -->
<link rel="preload" as="image" href="<?= $bgImage ?>">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssWeb  = '/home/imagen/imagen.css';
$heroWeb = '/home/img/yoamoarbelaez1.jpeg';

$cssFile = $base . $cssWeb;
$cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
?>

<link rel="preload" as="image" href="<?= $heroWeb ?>">
<link rel="stylesheet" href="<?= $cssWeb ?>?v=<?= $cssTime ?>">

<section class="seccion_imagen" aria-label="Portada Yo amo Arbeláez">
  <img
    src="<?= $heroWeb ?>"
    alt="Paisaje de Arbeláez al atardecer"
    fetchpriority="high"
    loading="eager"
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
