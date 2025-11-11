<?php
$cssTime = filemtime('../../view/Radio/vivo/vivo.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/Radio/vivo/vivo.css?v=<?= $cssTime ?>">

<section>
  <div class="radio-card" role="region" aria-label="Radio en vivo">
  <div class="radio-top">
    <img class="radio-logo" src="logo-radio.png" alt="Logo de la radio">
    <div>
      <h2 class="radio-title">Tu Radio – En vivo</h2>
      <div class="radio-live" aria-live="polite">● LIVE</div>
    </div>
  </div>

  <!-- El elemento <audio> puede quedar sin src; lo fijamos por JS para manejar HLS -->
  <audio id="radioAudio" preload="none" crossorigin="anonymous"></audio>

  <div class="radio-ctrls">
    <button id="playBtn" class="btn btn-primary" aria-pressed="false" aria-label="Reproducir">▶️ Reproducir</button>
    <label for="vol" class="sr-only">Volumen</label>
    <input id="vol" class="vol" type="range" min="0" max="1" step="0.01" value="0.9" aria-label="Volumen">
  </div>

  <div id="status" class="status">Listo para reproducir.</div>
  <div id="nowPlaying" class="np" aria-live="polite"></div>

  <div class="fallback">
    Si no suena en tu navegador,
    <a id="openExternal" href="#" rel="noopener" target="_blank">abre el stream en tu reproductor</a>.
  </div>
</div>
</section>
<script src="../../view/Radio/vivo/vivo.js?v=<?= $jsTime ?>" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
