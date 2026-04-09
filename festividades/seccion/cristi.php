<?php
$cssTime = filemtime('../../festividades/seccion/cristi.css');
$jsTime  = filemtime('../../festividades/seccion/cristi.js');
?>

<link rel="stylesheet" href="../../festividades/seccion/cristi.css?v=<?= $cssTime ?>">

<section class="festivities-section">
  <div class="festivities-container">
    <h1 class="main-title">Festividades de Arbeláez</h1>
    <p class="main-subtitle">
      Tradición, cultura y celebración en momentos especiales del municipio.
    </p>

    <!-- Corpus Christi -->
    <div class="gallery-block">
      <h2 class="gallery-title">Corpus Christi</h2>

      <div class="marquee-wrapper" id="marqueeWrapperCorpus">
        <div class="fade-left"></div>

        <div class="marquee-inner" id="marqueeInnerCorpus">
          <div class="marquee-track" id="marqueeTrackCorpus"></div>
        </div>

        <div class="fade-right"></div>
      </div>
    </div>

    <!-- La Diablada -->
    <div class="gallery-block">
      <h2 class="gallery-title">La Diablada</h2>

      <div class="marquee-wrapper" id="marqueeWrapperDiablada">
        <div class="fade-left"></div>

        <div class="marquee-inner" id="marqueeInnerDiablada">
          <div class="marquee-track" id="marqueeTrackDiablada"></div>
        </div>

        <div class="fade-right"></div>
      </div>
    </div>

    <!-- Cumpleaños de Arbeláez -->
    <!-- <div class="gallery-block">
      <h2 class="gallery-title">Cumpleaños de Arbeláez</h2>

      <div class="marquee-wrapper" id="marqueeWrapperCumple">
        <div class="fade-left"></div>

        <div class="marquee-inner" id="marqueeInnerCumple">
          <div class="marquee-track" id="marqueeTrackCumple"></div>
        </div>

        <div class="fade-right"></div>
      </div>
    </div> -->
  </div>
</section>

<script src="../../festividades/seccion/cristi.js?v=<?= $jsTime ?>" type="text/javascript"></script>
