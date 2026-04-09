<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
?>
<!DOCTYPE html>
<html lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Arbeláez Turismo | Cundinamarca | Qué comprar, Qué Hacer, Dónde Comer y Dónde Dormir | Things to Do, Where to Eat & Stay</title>
  <meta name="description" content="Descubre Arbeláez, Cundinamarca: naturaleza, alojamiento, gastronomía, artesanías y lugares turísticos cerca de Bogotá.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="theme-color" content="#005548">

  <link rel="canonical" href="https://www.arbelaez.com.co/">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Arbelaez.com.co">
  <meta property="og:title" content="Arbeláez Turismo | Cundinamarca">
  <meta property="og:description" content="Descubre Arbeláez: alojamiento, gastronomía, artesanías, naturaleza y lugares turísticos.">
  <meta property="og:url" content="https://www.arbelaez.com.co/">
  <meta property="og:image" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Arbeláez Turismo | Cundinamarca">
  <meta name="twitter:description" content="Descubre Arbeláez: alojamiento, gastronomía, artesanías, naturaleza y lugares turísticos.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">

  <link rel="icon" type="image/png" sizes="32x32" href="/home/img/logo1.jpeg">
  <link rel="icon" type="image/png" sizes="16x16" href="/home/img/logo1.jpeg">
  <link rel="apple-touch-icon" sizes="180x180" href="/home/img/logo1.jpeg">
  <link rel="manifest" href="/site.webmanifest">
</head>

<body class="body_home">
  <?php include $base . "/global/menu/menu.php"; ?>
  <?php include $base . "/home/slider/slider.php"; ?>
  <?php include $base . "/home/intro/intro.php"; ?>
  <?php include $base . "/home/places/places.php"; ?>
  <?php include $base . "/home/imagen/imagen.php"; ?>
  <?php include $base . "/home/Rifa/rifa.php"; ?>
  <?php include $base . "/home/text/text.php"; ?>
  <?php include $base . "/home/maps/maps.php"; ?>
  <?php include $base . "/global/footer/footer.php"; ?>
</body>
</html>
