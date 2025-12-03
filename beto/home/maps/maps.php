<?php
$cssTime = filemtime('../../beto/home/maps/maps.css');
?>
<link rel="stylesheet" href="../../beto/home/maps/maps.css?v=<?= $cssTime ?>">
<section class="map-section" aria-labelledby="map-title">
  <header class="map-head">
    <p class="map-eyebrow">Ubicación</p>
    <h2 id="map-title" class="map-title">¿Cómo llegar?</h2>
    <p class="map-sub">Encuéntranos en Google Maps y llega fácil.</p>
  </header>

  <div class="map-card">
    <div class="map-frame" role="region" aria-label="Mapa de Google">
      <!-- Pega aquí tu iframe de Google Maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3976.9199550901385!2d-74.09431654232786!3d4.608350199445022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses!2sco!4v1764721878043!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="map-actions">
      <a class="map-btn map-btn--primary" href="https://maps.app.goo.gl/rzmXcSMqgXMySY4y8" target="_blank" rel="noopener">
        Abrir en Maps
      </a>
      <a class="map-btn map-btn--ghost" href="" target="_blank" rel="noopener">
        Contactar WhatsApp
      </a>
    </div>
  </div>
</section>
