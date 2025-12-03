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
      <iframe
        src="https://maps.app.goo.gl/rzmXcSMqgXMySY4y8"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen>
      </iframe>
    </div>

    <div class="map-actions">
      <a class="map-btn map-btn--primary" href="TU_LINK_DE_DIRECCIONES" target="_blank" rel="noopener">
        Abrir en Maps
      </a>
      <a class="map-btn map-btn--ghost" href="TU_LINK_DE_UBICACION" target="_blank" rel="noopener">
        Ver reseñas
      </a>
    </div>
  </div>
</section>
