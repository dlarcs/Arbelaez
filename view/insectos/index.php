<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insectos en Arbeláez – Mariposas, libélulas, escarabajos, rutas y fotografía</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="es">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/insectos/">

  <!-- CSS (cache-busting robusto) -->
  <?php
    $cssMain = '../../view/insectos/style.css';
    $cssTime = file_exists($cssMain) ? filemtime($cssMain) : time();

  ?>
  <link rel="stylesheet" href="../../view/insectos/style.css?v=<?= $cssTime ?>">


  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/insectos/img/Mariposa_malaquita.jpeg">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/insectos/img/Mariposa_malaquita.jpeg">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/insectos/img/Mariposa_malaquita.jpeg">
  <link rel="mask-icon" href="../../view/insectos/img/Mariposa_malaquita.jpeg" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO -->
  <meta name="description" content="Explora insectos en Arbeláez, Cundinamarca: mariposas, libélulas, escarabajos y más. Descubre rutas, spots naturales, macrofotografía y planes tranquilos cerca de Bogotá.">
  <meta name="keywords" content="
  insectos en Arbeláez, insectos en Arbelaez, insectos Cundinamarca, insectos cerca de Bogotá,
  mariposas Arbeláez, mariposas Cundinamarca, avistamiento de mariposas, butterfly watching Colombia,
  libélulas Arbeláez, caballitos del diablo, dragonflies Colombia, damselflies Colombia,
  escarabajos Arbeláez, escarabajos Colombia, mariquitas, beetles Colombia,
  abejas Arbeláez, avispas Arbeláez, polinizadores, polinización, apicultura local,
  hormigas Arbeláez, hormiga arriera, biodiversidad Arbeláez, biodiversidad Sumapaz,
  macrofotografía Arbeláez, fotografía macro insectos, macro photography Colombia,
  rutas de naturaleza Arbeláez, senderos ecológicos, caminatas suaves, turismo de naturaleza,
  turismo sostenible, turismo responsable, educación ambiental, conservación, hábitats,
  spots de insectos, lugares para ver mariposas, lugares para ver libélulas,
  quebradas y humedales, bosques y cafetales, jardines y veredas, ecosistemas Arbeláez,
  plan en pareja Arbeláez, plan familiar Arbeláez, plan fin de semana cerca de Bogotá,
  qué hacer en Arbeláez, Arbeláez turismo, arbelaez.com.co insectos
  ">

  <!-- Open Graph -->
  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Insectos en Arbeláez – Rutas, especies y fotografía">
  <meta property="og:description" content="Descubre insectos en Arbeláez: mariposas, libélulas, escarabajos y más. Spots naturales y macrofotografía cerca de Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/insectos/">
  <meta property="og:image" content="https://www.arbelaez.com.co/insectos/img/Mariposa_malaquita.jpeg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Insectos en Arbeláez – Rutas y especies">
  <meta name="twitter:description" content="Explora insectos en Arbeláez (Cundinamarca): mariposas, libélulas y más. Un plan de naturaleza cerca de Bogotá.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/insectos/img/Mariposa_malaquita.jpeg">

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
        "name": "Insectos en Arbeláez",
        "url": "https://www.arbelaez.com.co/insectos/",
        "inLanguage": "es",
        "description": "Guía de insectos en Arbeláez: mariposas, libélulas, escarabajos, rutas, spots y fotografía macro."
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

<body class="body_insectos">
  <?php include "../../global/menu/menu.php" ?>

  <div class="container_insectos">
    <?php include "../../view/insectos/slider/slider.php" ?>
    <?php include "../../view/insectos/seccion/insectos.php" ?>
    <?php include "../../view/insectos/text/text.php" ?>
    <?php include "../../view/global/footer/footer.php" ?>
  </div>
</body>
</html>
