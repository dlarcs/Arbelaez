<?php
$cssPath = '../../view/home/imagen/imagen.css';
$cssTime = @filemtime($cssPath) ?: time();

/*
  Recomendación: exporta 4 tamaños (mismo encuadre):
  yoamoarbelaez1-640.jpg
  yoamoarbelaez1-960.jpg
  yoamoarbelaez1-1280.jpg
  yoamoarbelaez1-1920.jpg
  (Opcional WebP/AVIF con mismos sufijos)
*/

$imgBase = '../../view/home/img/yoamoarbelaez1';
$imgJpg  = [
  '640'  => $imgBase . '-640.jpg',
  '960'  => $imgBase . '-960.jpg',
  '1280' => $imgBase . '-1280.jpg',
  '1920' => $imgBase . '-1920.jpg',
];

$imgWebp = [
  '640'  => $imgBase . '-640.webp',
  '960'  => $imgBase . '-960.webp',
  '1280' => $imgBase . '-1280.webp',
  '1920' => $imgBase . '-1920.webp',
];

$imgAvif = [
  '640'  => $imgBase . '-640.avif',
  '960'  => $imgBase . '-960.avif',
  '1280' => $imgBase . '-1280.avif',
  '1920' => $imgBase . '-1920.avif',
];

/* Preload del tamaño “típico” LCP */
$preload = $imgJpg['1280'];
?>

<link rel="preload" as="image" href="<?= $preload ?>" imagesizes="100vw"
      imagesrcset="<?= $imgJpg['640'] ?> 640w, <?= $imgJpg['960'] ?> 960w, <?= $imgJpg['1280'] ?> 1280w, <?= $imgJpg['1920'] ?> 1920w">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<div class="title_products">
  <h1>Datos curiosos y tradiciones de Arbeláez</h1>

  <div class="info_product">
    <h2>Arbeláez es un pueblo de clima agradable y paisaje andino, donde las veredas tienen un papel clave: gran parte de la vida diaria, los cultivos y las historias familiares nacen y se sostienen en el campo.</h2>
    <h2>Una tradición muy común en los pueblos cundinamarqueses como Arbeláez es reunirse en el parque y compartir conversación, anécdotas y “plan de tarde” con algo de comer, especialmente en fines de semana y días festivos.</h2>

    <img src="../../view/global/img/logo.png" alt="Logo Arbelaez.com.co" width="140" height="140">

    <h2>Los oficios locales también son parte de la identidad: emprendimientos de gastronomía, artesanías y servicios que pasan de generación en generación y mantienen viva la cultura del “hecho en el pueblo”.</h2>
    <h2>En Arbeláez, la hospitalidad es una tradición: es común que los visitantes encuentren recomendaciones directas, rutas sencillas para conocer lugares cercanos y negocios familiares donde te atienden como en casa.</h2>
  </div>
</div>

<section class="seccion_imagen" aria-label="Portada Yo amo Arbeláez">
  <picture>
    <!-- Si tienes AVIF/WebP, se usarán; si no, el navegador cae al JPG -->
    <source type="image/avif"
      srcset="<?= $imgAvif['640'] ?> 640w, <?= $imgAvif['960'] ?> 960w, <?= $imgAvif['1280'] ?> 1280w, <?= $imgAvif['1920'] ?> 1920w"
      sizes="100vw">
    <source type="image/webp"
      srcset="<?= $imgWebp['640'] ?> 640w, <?= $imgWebp['960'] ?> 960w, <?= $imgWebp['1280'] ?> 1280w, <?= $imgWebp['1920'] ?> 1920w"
      sizes="100vw">

    <img
      src="<?= $imgJpg['1280'] ?>"
      srcset="<?= $imgJpg['640'] ?> 640w, <?= $imgJpg['960'] ?> 960w, <?= $imgJpg['1280'] ?> 1280w, <?= $imgJpg['1920'] ?> 1920w"
      sizes="100vw"
      alt="Paisaje de Arbeláez al atardecer"
      decoding="async"
      fetchpriority="high"
      loading="eager"
      width="1920"
      height="1080"
    >
  </picture>

  <div class="imagen">
    <div class="text_imagen">
      <h1>¡Bienvenido a lo mejor de Arbeláez!</h1>
    </div>
  </div>
<
