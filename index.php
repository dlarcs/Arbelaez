<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">

  <title>Arbeláez Cundinamarca | Turismo, Naturaleza, Gastronomía y Alojamiento</title>

  <?php
  $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

  $cssFile = $base . '/home/style.css';
  $jsFile  = $base . '/home/app.js';

  $cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
  $jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
  ?>

  <!-- SEO principal para Google -->
  <meta name="description" content="Descubre Arbeláez, Cundinamarca: turismo cerca de Bogotá, alojamiento, gastronomía, artesanías, naturaleza, ríos, cultura y lugares para visitar.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <link rel="canonical" href="https://www.arbelaez.com.co/">
  <meta name="theme-color" content="#005548">

  <!-- Open Graph: WhatsApp / Facebook -->
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

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Arbeláez Cundinamarca | Turismo, Naturaleza, Gastronomía y Alojamiento">
  <meta name="twitter:description" content="Descubre Arbeláez: alojamiento, gastronomía, artesanías, naturaleza y lugares turísticos.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/home/img/logo1.jpeg">

  <!-- Iconos -->
  <link rel="icon" href="/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/home/img/logo_pw.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/home/img/logo_pw.png">

  <!-- CSS -->
  <link rel="stylesheet" href="/home/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

  <!-- Datos estructurados para Google -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebSite",
        "@id": "https://www.arbelaez.com.co/#website",
        "name": "Arbeláez Turismo",
        "url": "https://www.arbelaez.com.co/",
        "inLanguage": "es-CO"
      },
      {
        "@type": "TouristDestination",
        "@id": "https://www.arbelaez.com.co/#destination",
        "name": "Arbeláez, Cundinamarca",
        "description": "Destino turístico cerca de Bogotá con naturaleza, alojamiento, gastronomía, artesanías, cultura, ríos y lugares para visitar.",
        "url": "https://www.arbelaez.com.co/",
        "image": "https://www.arbelaez.com.co/home/img/logo1.jpeg",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Arbeláez",
          "addressRegion": "Cundinamarca",
          "addressCountry": "CO"
        }
      }
    ]
  }
  </script>

  <!-- JS -->
  <script defer src="/home/app.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>
</head>

<body class="body_home">

  <?php include $base . "/global/menu/menu.php"; ?>

  <div class="container_home">
    <?php include $base . "/home/slider/slider.php"; ?>
    <?php include $base . "/home/intro/intro.php"; ?>

    <div class="lazy-section" data-url="/home/places/places.php"></div>
    <div class="lazy-section" data-url="/home/imagen/imagen.php"></div>
    <div class="lazy-section" data-url="/home/maps/maps.php"></div>
  </div>

  <?php include $base . "/global/footer/footer.php"; ?>

  <section class="scroll-indicator" aria-label="Más contenido abajo">
    <span class="scroll-indicator__circle">
      <span class="scroll-indicator__arrow"></span>
    </span>
  </section>

</body>
</html>
