<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Artesanías</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="../../view/home/img/logo_pw.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../view/home/img/logo_pw.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../view/home/img/logo_pw.png">
    <link rel="mask-icon" href="../../view/home/img/logo_pw.png" color="#005548">
    <meta name="theme-color" content="#005548">
  </head>
    <body class="body_artesanias">
      <?php
      $cssTime = filemtime('../../view/artesanias/style.css');
      ?>
      <link rel="stylesheet" href="../../view/artesanias/style.css?v=<?= $cssTime ?>">
      <?php include "../../view/global/menu/menu.php" ?>

      <div class="container_artesanias">
        <?php include "../../view/artesanias/seccion/slider/slider.php" ?>
        <?php include "../../view/artesanias/seccion/artesanias.php" ?>
        <?php include "../../view/global/footer/footer.php" ?>
      </div>
  </body>
</html>
