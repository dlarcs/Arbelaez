<?php
$cssPath = $_SERVER['DOCUMENT_ROOT'] . '/home/slider/slider.css';
$jsPath  = $_SERVER['DOCUMENT_ROOT'] . '/home/slider/slider.js';

$cssUrl = '../../home/slider/slider.css';
$jsUrl  = '../../home/slider/slider.js';

$cssTime = is_file($cssPath) ? filemtime($cssPath) : time();
$jsTime  = is_file($jsPath) ? filemtime($jsPath) : time();
?>

<link rel="stylesheet" href="<?= $cssUrl ?>?v=<?= $cssTime ?>">

<section class="slider" id="sliderMain" aria-roledescription="carrusel" aria-label="Slider principal">

  <div class="slider__slides" aria-hidden="true">

    <picture class="slider__image is-active">
      <source srcset="../../home/img/parque_principal1.webp" type="image/webp">
      <img src="../../home/img/parque_principal1.jpg" alt="" fetchpriority="high" decoding="async">
    </picture>

    <picture class="slider__image">
      <source srcset="../../home/img/lugar2.webp" type="image/webp">
      <img src="../../home/img/lugar2.jpg" alt="" loading="lazy" decoding="async">
    </picture>

    <picture class="slider__image">
      <source srcset="../../gastronomia/La_Marranada/img/especial7.webp" type="image/webp">
      <img src="../../gastronomia/La_Marranada/img/especial7.jpg" alt="" loading="lazy" decoding="async">
    </picture>

    <picture class="slider__image">
      <source srcset="../../artesanias/Artesanias_Martha_E/img/manillas2.webp" type="image/webp">
      <img src="../../artesanias/Artesanias_Martha_E/img/manillas2.jpeg" alt="" loading="lazy" decoding="async">
    </picture>

    <picture class="slider__image">
      <source srcset="../../alojamiento/Casa_Kiyari/img/general12.webp" type="image/webp">
      <img src="../../alojamiento/Casa_Kiyari/img/general12.jpg" alt="" loading="lazy" decoding="async">
    </picture>

  </div>

  <div class="slider__overlay" aria-hidden="true"></div>

  <div class="slider__inner">

    <div class="slider__badge" id="sliderBadge">
      <span class="slider__badgeIcon" aria-hidden="true">📍</span>
      <a href="https://maps.app.goo.gl/rBTFjDPx4z9RRD479" target="_blank" rel="noopener noreferrer">
        <span class="slider__badgeText">Arbeláez, Cundinamarca • 2026</span>
      </a>
    </div>

    <h1 class="slider__title" id="sliderTitle">
      Arbeláez se llena de<br>
      <span class="slider__titleGradient">color</span>
    </h1>

    <p class="slider__desc" id="sliderDesc">
      Iniciativa comunitaria para embellecer, dar identidad visual y aumentar la visibilidad
      de los negocios de Arbeláez mediante murales, pintura de fachadas y señalización.
    </p>

    <div class="slider__actions">
      <a class="sliderBtn sliderBtn--primary" href="#rifa" id="sliderBtnPrimary">
        Conocer más
      </a>
    </div>

    <div class="slider__controls">
      <button class="sliderNav sliderNav--prev" type="button" aria-label="Anterior" data-slider-prev>
        <span aria-hidden="true">‹</span>
      </button>

      <div class="slider__dots" role="tablist" aria-label="Indicadores del slider" data-slider-dots></div>

      <button class="sliderNav sliderNav--next" type="button" aria-label="Siguiente" data-slider-next>
        <span aria-hidden="true">›</span>
      </button>
    </div>

  </div>

  <div class="slider__progress" aria-hidden="true">
    <div class="slider__progressBar" data-slider-progress></div>
  </div>

</section>

<script defer src="<?= $jsUrl ?>?v=<?= $jsTime ?>"></script>
