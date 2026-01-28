<?php
$cssPath = '../../view/home/video/video.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

?>
<video class="video_box"controls playsinline muted preload="metadata" poster="poster.jpg">
  <source src="../../view/home/img/VIDEO.MP4" type="video/mp4">
  <source src="../../view/home/img/VIDEO.MP4" type="video/webm">
  Tu navegador no soporta video HTML5.
</video>
