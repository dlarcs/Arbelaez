<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Avistamiento de aves en Arbeláez – Birdwatching in Arbeláez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="es">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/aves/avistamiento-de-aves/">

  <!-- CSS (cache-busting robusto) -->
  <?php
    $cssMain = '../../view/aves/style.css';
    $cssTime = file_exists($cssMain) ? filemtime($cssMain) : time();

    // (Opcional) CSS específico para la galería de aves
    $cssBirds = '../../view/aves/aves/avifauna_gallery.css';
    $cssBirdsTime = file_exists($cssBirds) ? filemtime($cssBirds) : time();
  ?>
  <link rel="stylesheet" href="../../view/aves/style.css?v=<?= $cssTime ?>">
  <link rel="stylesheet" href="../../view/aves/aves/avifauna_gallery.css?v=<?= $cssBirdsTime ?>">

  <!-- JS (Opcional) para galería / filtros / lightbox -->
  <?php
    $jsBirds = '../../view/aves/aves/avifauna_gallery.js';
    $jsBirdsTime = file_exists($jsBirds) ? filemtime($jsBirds) : time();
  ?>
  <script src="../../view/aves/aves/avifauna_gallery.js?v=<?= $jsBirdsTime ?>" defer></script>

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/home/img/logo_pw.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/home/img/logo_pw.png">
  <link rel="mask-icon" href="../../view/home/img/logo_pw.png" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO -->
  <meta name="description" content="Avistamiento de aves en Arbeláez, Cundinamarca: rutas, spots naturales, fotografía, especies y planes tranquilos cerca de Bogotá.">
  <meta name="keywords" content="
  avistamiento de aves Arbeláez, avistamiento de aves Arbelaez, birdwatching Arbeláez, birdwatching Arbelaez,
  aves en Arbeláez, aves en Arbelaez, avifauna Arbeláez, avifauna Arbelaez, turismo de aves Arbeláez,
  turismo de aves Cundinamarca, birding Cundinamarca, birding cerca de Bogotá, planes aves cerca de Bogotá,
  rutas de aves Arbeláez, senderos de aves Arbeláez, caminatas para avistar aves, caminatas ecológicas Arbeláez,
  fotografía de aves Arbeláez, bird photography Colombia, bird photography Cundinamarca, wildlife photography Arbeláez,
  colibríes Arbeláez, hummingbirds Arbeláez, tangaras Arbeláez, tanagers Arbeláez, atrapamoscas Arbeláez,
  flycatchers Colombia, carpinteros Arbeláez, woodpeckers Colombia, búhos Arbeláez, owls Colombia,
  rapaces Arbeláez, raptors Colombia, halcones Colombia, gavilanes Colombia, loros Arbeláez, parrots Colombia,
  observación de aves Colombia, observación de aves Cundinamarca, guía de aves Arbeláez, guía de avifauna Arbeláez,
  hotspots de aves Cundinamarca, mejores lugares para ver aves, mejores horas para avistar aves, amanecer birdwatching,
  aves Sumapaz, Provincia del Sumapaz aves, bosque andino aves, aves de bosque andino,
  cafetales y aves, aves en cafetales, ecosistemas de Arbeláez, biodiversidad Arbeláez,
  turismo responsable, turismo sostenible, educación ambiental, conservación de aves, conservación de hábitat,
  experiencia local, guías locales Arbeláez, rutas ecoturísticas Arbeláez, planes en pareja Arbeláez,
  plan familiar Arbeláez, plan fin de semana Arbeláez, escapada tranquila, aire puro, descanso en aves,
  mapa de avistamiento de aves, mapa Arbeláez turismo, qué hacer en Arbeláez aves, Arbeláez Turismo
  ">

  <!-- Open Graph -->
  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Avistamiento de aves en Arbeláez – Birdwatching in Arbeláez">
  <meta property="og:description" content="Descubre el avistamiento de aves en Arbeláez: rutas, spots naturales, fotografía y una experiencia tranquila cerca de Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/aves/avistamiento-de-aves/">
  <meta property="og:image" content="https://www.arbelaez.com.co/view/home/img/og-1200x630.jpg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Avistamiento de aves en Arbeláez – Birdwatching in Arbeláez">
  <meta name="twitter:description" content="Explora rutas de avistamiento de aves en Arbeláez y disfruta la aves en Cundinamarca, cerca de Bogotá.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/view/home/img/og-1200x630.jpg">

  <!-- Social profiles (official) -->
  <link rel="me" href="https://www.facebook.com/profile.php?id=61580302286594">
  <link rel="me" href="https://www.instagram.com/arbelaez_turismo/">
  <link rel="me" href="https://www.tiktok.com/@arbelaez_turismo">

  <!-- Structured data: WebPage + Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebPage",
        "name": "Avistamiento de aves en Arbeláez",
        "url": "https://www.arbelaez.com.co/aves/avistamiento-de-aves/",
        "inLanguage": "es",
        "description": "Rutas, spots, fotografía y avifauna para avistamiento de aves en Arbeláez, Cundinamarca."
      },
      {
        "@type": "Organization",
        "name": "Arbeláez Turismo",
        "url": "https://www.arbelaez.com.co/",
        "sameAs": [
          "https://www.facebook.com/profile.php?id=61580302286594",
          "https://www.instagram.com/arbelaez_turismo/",
          "https://www.tiktok.com/@arbelaez_turismo"
        ]
      }
    ]
  }
  </script>
</head>

<body class="body_aves">
  <?php include "../../view/global/menu/menu.php" ?>

  <div class="container_aves">
    <?php include "../../view/aves/slider/slider.php" ?>

    <!-- CAMBIO: antes era rios/rios.php — ahora una sección dedicada a aves -->
    <?php include "../../view/aves/seccion/aves.php" ?>

    <!-- Puedes mantener el mapa (ideal para “spots” de avistamiento) -->
    <?php include "../../view/aves/maps/maps.php" ?>

    <?php include "../../view/global/footer/footer.php" ?>
  </div>
</body>
</html>
