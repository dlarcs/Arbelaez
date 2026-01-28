<?php
declare(strict_types=1);

function asset_v(string $publicPath, string $fsPath): string {
  if (!is_file($fsPath)) return $publicPath;
  $v = filemtime($fsPath);
  $sep = (strpos($publicPath, '?') !== false) ? '&' : '?';
  return $publicPath . $sep . 'v=' . $v;
}

$cssPublic = '../../view/home/maps/maps.css';
$cssFs     = __DIR__ . '/../../view/home/maps/maps.css';

$jsPublic  = '../../view/home/maps/maps.js'; // <-- AJUSTA si tu JS está en otra ruta
$jsFs      = __DIR__ . '/../../view/home/maps/maps.js';
?>
<link rel="stylesheet" href="<?= asset_v($cssPublic, $cssFs) ?>">

<section class="seccion_maps">
  <div class="maps">
    <div class="text_maps">
      <h1>¡CÓMO LLEGAR!</h1>

      <div class="maps__frame">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7957.460457410218!2d-74.417816394458!3d4.272579019638178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1d28c3fd6cdb%3A0x9b331c86f36712e0!2sArbel%C3%A1ez%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1756420680597!5m2!1ses-419!2sco"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa de Arbeláez"
        ></iframe>
      </div>
    </div>
  </div>
</section>

<!-- VIDEO SLIDE -->
<article id="slide-1" class="slide is-current" aria-roledescription="slide" aria-label="1 de 4">
  <video
    class="slide__media"
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    poster="../../view/home/img/ganador.png"
  >
    <source src="../../view/home/video/VIDEO.mp4" type="video/mp4">
    Tu navegador no soporta video.
  </video>
</article>

<script src="<?= asset_v($jsPublic, $jsFs) ?>"></script>

<!-- “Forzar” autoplay (por si el navegador se pone exigente) -->
<script>
  window.addEventListener('load', () => {
    const v = document.querySelector('#slide-1 video');
    if (!v) return;
    v.play().catch(() => { /* si el navegador lo bloquea, no rompe nada */ });
  });
</script>
