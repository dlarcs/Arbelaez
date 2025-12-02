<?php
$cssPath = '../../view/home/imagen/imagen.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

// Ruta de la imagen de fondo para el preload (igual a la usada en el CSS)
$bgImage = '../../../view/home/img/lugar5.jpg';
?>

<!-- Rendimiento: precarga de la imagen LCP y fuentes -->
<link rel="preload" as="image" href="<?= $bgImage ?>">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">
<div class="title_products">
  <h1>Origen y orgullo de mi tierra</h1>

  <div class="info_product">
    <h2>Descubre Arbeláez a tu ritmo: historias, sabores y lugares que no sabías que existían.
        Conecta con negocios locales y encuentra experiencias hechas para ti. Entra y sorpréndete.</h2>
      <h2>Aquí empieza tu plan perfecto: dónde comer, qué visitar y a quién apoyar.
        Reúne todo en un solo lugar y arma tu ruta por Arbeláez sin complicarte.</h2>
      <img src="../../view/global/img/logo.png" alt="">
      <h2>Un directorio vivo de lo nuestro: emprendedores, oficios y talentos que mueven a Arbeláez.
          Explora sus perfiles, mira sus ofertas y contáctalos en pocos clics.</h2>
      <h2>Arbeláez te espera con puertas abiertas: sabores, hospedajes y experiencias al aire libre.
        En arbelaez.com.co todo está en un solo lugar para que planees sin perder tiempo.</h2>
  </div>
</div>
<section class="seccion_imagen" aria-label="Portada Yo amo Arbeláez">
  <img src="../../view/home/img/lugar5.jpg"
       alt="Paisaje de Arbeláez al atardecer"
       decoding="async" fetchpriority="high">
  <div class="imagen">
    <div class="text_imagen">
      <h1>¡Bienvenido a lo mejor de Arbeláez!</h1>
    </div>
  </div>
</section>
