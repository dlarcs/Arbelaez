<?php
$cssPath = '../../view/home/imagen/imagen.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

// Ruta de la imagen de fondo para el preload (igual a la usada en el CSS)
$bgImage = '../../../view/home/img/yoamoarbelaez1.jpeg';
?>

<!-- Rendimiento: precarga de la imagen LCP y fuentes -->
<link rel="preload" as="image" href="<?= $bgImage ?>">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<div class="title_products">
  <h1>Datos curiosos y tradiciones de Arbeláez</h1>

  <div class="info_product">
    <h2>
      Arbeláez es un pueblo de clima agradable y paisaje andino, donde las veredas tienen un papel clave:
      gran parte de la vida diaria, los cultivos y las historias familiares nacen y se sostienen en el campo.
    </h2>

    <h2>
      Una tradición muy común en los pueblos cundinamarqueses como Arbeláez es reunirse en el parque y
      compartir conversación, anécdotas y “plan de tarde” con algo de comer, especialmente en fines de semana
      y días festivos.
    </h2>

    <img src="../../view/global/img/logo.png" alt="Logo Arbelaez.com.co">

    <h2>
      Los oficios locales también son parte de la identidad: emprendimientos de gastronomía, artesanías y servicios
      que pasan de generación en generación y mantienen viva la cultura del “hecho en el pueblo”.
    </h2>

    <h2>
      En Arbeláez, la hospitalidad es una tradición: es común que los visitantes encuentren recomendaciones directas,
      rutas sencillas para conocer lugares cercanos y negocios familiares donde te atienden como en casa.
    </h2>
  </div>
</div>

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
<article id="slide-1" class="slide is-current" aria-roledescription="slide" aria-label="1 de 4">
  <video class="slide__media"
         src="../../view/home/img/VIDEO.MP4"
         autoplay
         muted
         loop
         playsinline
         preload="metadata">
  </video>

  <div class="slide__caption">
    <h2>Ganador de la mejor hamburguesa de Arbeláez</h2>
    <a href="#tourburger"><p>Don Ciprio</p></a>
  </div>
</article>
