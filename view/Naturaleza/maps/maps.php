<?php
$cssTime = filemtime('../../view/Naturaleza/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<link rel="stylesheet" href="../../view/Naturaleza/maps/maps.css?v=<?= $cssTime ?>">
<section  class="seccion_maps">
  <div class="maps">
  <div class="text_maps">
      <h1>¡CÓMO LLEGAR!</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!4v1756914775758!6m8!1m7!1sF-1W_GRZbrbFxmoXyR94Fg!2m2!1d4.272190688898911!2d-74.4150226146177!3f92.87335221454985!4f29.9484069356634!5f0.4000000000000002" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
</section>
