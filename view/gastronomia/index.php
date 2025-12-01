<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gastronomía</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="../../view/home/img/logo_pw.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../view/home/img/logo_pw.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../view/home/img/logo_pw.png">
    <link rel="mask-icon" href="../../view/home/img/logo_pw.png" color="#005548">
    <meta name="theme-color" content="#005548">

  </head>
    <body class="body_gastronomia">
      <?php
      $cssTime = filemtime('../../view/gastronomia/style.css');
      $jsTime = filemtime('../../view/gastronomia/app.js');   // ejemplo: '../Home/5.Video/video.js'


      ?>
      <link rel="stylesheet" href="../../view/gastronomia/style.css?v=<?= $cssTime ?>">
      <?php include "../../view/global/menu/menu.php" ?>
      <div class="container_gastronomia">
        <?php include "../../view/gastronomia/seccion/slider/slider.php" ?>
        <?php include "../../view/gastronomia/seccion/restaurante.php" ?>
        <?php include "../../view/global/footer/footer.php" ?>
      </div>

      <section class="scroll-indicator" aria-label="Hay más contenido abajo">
        <span class="scroll-indicator__circle">
          <span class="scroll-indicator__arrow"></span>
        </span>
      </section>

  </body>
</html>
<script src="<?php echo '../../view/gastronomia/app.js?v=' . filemtime('../../view/gastronomia/app.js'); ?>" type="text/javascript"></script>
