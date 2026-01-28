<?php
$cssPath = '../../view/home/video/video.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<video
  class="autoplay-on-view"
  playsinline
  muted
  loop
  preload="metadata"
  poster="poster.jpg"
>
  <source src="../../view/home/img/VIDEO.MP4" type="video/mp4">
  Tu navegador no soporta video HTML5.
</video>

<script>
  const videos = document.querySelectorAll('video.autoplay-on-view');

  const io = new IntersectionObserver((entries) => {
    entries.forEach(async (entry) => {
      const v = entry.target;

      if (entry.isIntersecting) {
        // intenta reproducir cuando sea visible
        try {
          v.setAttribute('autoplay', 'autoplay'); // ayuda en algunos navegadores
          await v.play();
        } catch (e) {
          // si el navegador bloquea autoplay, quedará listo para que el usuario le dé play
        }
      } else {
        v.pause();
      }
    });
  }, { threshold: 0.5 }); // 50% visible

  videos.forEach(v => io.observe(v));
</script>
