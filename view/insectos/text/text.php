<?php
$cssTime = filemtime('../../view/Aves/text/text.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/Aves/text/text.js');
?>
<link rel="stylesheet" href="../../view/Aves/text/text.css?v=<?= $cssTime ?>">
<section class="eco" id="eco" aria-label="Explora con responsabilidad">
  <div class="eco__inner">

    <div class="eco__text js-reveal-left">
      <h2 class="eco__title">Explora con<br>Responsabilidad</h2>

      <p class="eco__p">
        Estos lugares son patrimonio natural de nuestra comunidad. Al visitarlos,
        comprométete a no dejar rastro, respetar la flora y fauna local, y
        contribuir a la preservación de estos espacios para futuras generaciones.
      </p>
    </div>

    <figure class="eco__media js-reveal-right" aria-label="Foto de río en bosque">
      <!-- Cambia la imagen aquí -->
      <img
        class="eco__img js-parallax-img"
        src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1600&q=60"
        alt="Río rodeado de bosque"
        loading="lazy"
        decoding="async"
      >
    </figure>

  </div>
</section>
<script src="../../view/Aves/text/text.js?v=<?= $jsTime ?>" type="text/javascript"></script>
