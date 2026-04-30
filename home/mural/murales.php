<?php
$cssTime = filemtime('../home/mural/murales.css');
?>
<link rel="stylesheet" href="../home/mural/murales.css?v=<?= $cssTime ?>">

<section class="mural-banner sr-item">
  <div class="mural-banner__content">
    <span class="mural-banner__tag">Registro digital</span>

    <h2 class="mural-banner__title">
      ¿Tienes un mural en Arbeláez?
    </h2>

    <p class="mural-banner__text">
      Envíanos una fotografía y ayúdanos a conservar la memoria visual de nuestro municipio.
    </p>

    <a
      class="mural-banner__btn"
      href="https://wa.me/573138846378?text=Hola,%20quiero%20enviar%20la%20foto%20de%20un%20mural"
      target="_blank"
      rel="noopener"
    >
      Enviar mi mural
    </a>
  </div>
</section>
