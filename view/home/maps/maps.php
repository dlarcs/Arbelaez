<?php
$cssTime = filemtime('../../view/home/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/maps/maps.css?v=<?= $cssTime ?>">
<section  class="seccion_maps">
  <div class="maps">
  <div class="text_maps">
      <h1>¡CÓMO LLEGAR!</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7957.460457410218!2d-74.417816394458!3d4.272579019638178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1d28c3fd6cdb%3A0x9b331c86f36712e0!2sArbel%C3%A1ez%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1756420680597!5m2!1ses-419!2sco" width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>

</section>

<script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
