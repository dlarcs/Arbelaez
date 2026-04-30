<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/slider/slider.css';
$jsFile  = $base . '/home/slider/slider.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link rel="stylesheet" href="/home/slider/slider.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="slider" id="sliderMain" aria-roledescription="carrusel" aria-label="Slider principal">
  <div class="slider__bg" aria-hidden="true"></div>
  <div class="slider__overlay" aria-hidden="true"></div>

  <div class="slider__inner">
    <div class="slider__badge" id="sliderBadge">
      <span class="slider__badgeIcon" aria-hidden="true">📍</span>

      <a href="https://maps.app.goo.gl/rBTFjDPx4z9RRD479" target="_blank" rel="noopener noreferrer">
        <span class="slider__badgeText">Arbeláez, Cundinamarca • 2026</span>
      </a>
    </div>

    <h1 class="slider__title" id="sliderTitle">
      Arbeláez, Cundinamarca: turismo, naturaleza y cultura cerca de Bogotá
      <span class="slider__titleGradient">color</span>
    </h1>

    <p class="slider__desc" id="sliderDesc">
      Iniciativa comunitaria para embellecer, dar identidad visual y aumentar la visibilidad
      de los negocios de Arbeláez mediante murales, pintura de fachadas y señalización.
    </p>

    <div class="slider__actions">
      <a class="sliderBtn sliderBtn--primary" href="#conocer" id="sliderBtnPrimary">
        <span>Conocer más</span>
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

<script defer src="/home/slider/slider.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
