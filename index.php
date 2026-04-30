<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">

  <title>Arbeláez Cundinamarca | Turismo, Naturaleza, Gastronomía y Alojamiento</title>

  <link rel="canonical" href="https://www.arbelaez.com.co/">
  <meta name="description" content="Descubre Arbeláez, Cundinamarca: turismo cerca de Bogotá, alojamiento, gastronomía, artesanías, naturaleza, ríos, cultura y lugares para visitar.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="theme-color" content="#005548">

  <?php
  $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

  $cssFile = $base . '/home/style.css';
  $jsFile  = $base . '/home/app.js';

  $cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
  $jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
  ?>

  <link rel="stylesheet" href="/home/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

  <script defer src="/home/app.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>

  <!-- Imagen que aparece al compartir en WhatsApp / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Arbelaez.com.co">
  <meta property="og:title" content="Arbeláez Cundinamarca | Turismo, Naturaleza, Gastronomía y Alojamiento">
  <meta property="og:description" content="Descubre Arbeláez, Cundinamarca: turismo cerca de Bogotá, alojamiento, gastronomía, artesanías, naturaleza, ríos, cultura y lugares para visitar.">
  <meta property="og:url" content="https://www.arbelaez.com.co/">
  <meta property="og:image" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">
  <meta property="og:image:secure_url" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <meta name="keywords" content="
    Arbeláez, Arbeláez Cundinamarca, turismo Arbeláez, lugares turísticos Arbeláez,
    qué hacer en Arbeláez, Arbeláez Colombia, turismo rural Colombia,
    viajar cerca de Bogotá, pueblos cerca de Bogotá, naturaleza Cundinamarca,
    alojamiento Arbeláez, hoteles Arbeláez, hospedaje Arbeláez,
    gastronomía Arbeláez, restaurantes Arbeláez,
    artesanías Arbeláez, cultura Arbeláez, turismo ecológico Colombia,
    ríos en Cundinamarca, cascadas Arbeláez, senderismo Colombia,
    planes turísticos Bogotá, turismo sostenible Colombia,

    Arbelaez tourism, Arbelaez Colombia travel, things to do in Arbelaez,
    places near Bogota, tourism near Bogota, rural tourism Colombia,
    eco tourism Colombia, nature tourism Colombia,
    Arbelaez hotels, Arbelaez accommodation, Arbelaez restaurants,
    local food Colombia, Colombian crafts, cultural tourism Colombia,
    travel Cundinamarca, visit Colombia nature,
    hidden gems Colombia, weekend trips Bogota,
    Colombia countryside tourism, explore Colombia towns,
    authentic Colombia travel, Colombian villages,
    Colombia eco destinations, travel Colombia guide
    ">

  <!-- Imagen que aparece al compartir en Twitter/X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Arbeláez Cundinamarca | Turismo, Naturaleza, Gastronomía y Alojamiento">
  <meta name="twitter:description" content="Descubre Arbeláez: alojamiento, gastronomía, artesanías, naturaleza y lugares turísticos.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">

  <!-- Imagen pequeña que aparece en la pestaña del navegador -->
  <link rel="icon" href="/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/home/img/logo_pw.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/home/img/logo_pw.png">

</head>

<body class="body_home">

  <?php include $base . "/global/menu/menu.php"; ?>

  <div class="container_home">
    <?php include $base . "/home/slider/slider.php"; ?>
    <?php include $base . "/home/intro/intro.php"; ?>
    <?php include $base . "/home/places/places.php"; ?>
    <?php include $base . "/home/imagen/imagen.php"; ?>
    <?php include $base . "/home/Rifa/rifa.php"; ?>
    <?php include $base . "/home/mural/murales.php" ?>
    <?php include $base . "/home/text/text.php"; ?>
    <?php include $base . "/home/maps/maps.php"; ?>
  </div>

  <?php include $base . "/global/footer/footer.php"; ?>

  <section class="scroll-indicator" aria-label="Más contenido abajo">
    <span class="scroll-indicator__circle">
      <span class="scroll-indicator__arrow"></span>
    </span>
  </section>

</body>
</html>
