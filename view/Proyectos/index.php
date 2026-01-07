<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Básicos -->
  <title>Actividades Turísticas en Arbeláez</title>
  <meta name="description" content="Página para promover el turismo de Arbeláez (Cundinamarca) a través de actividades y proyectos que visibilizan lo mejor del municipio: cultura, gastronomía, naturaleza, emprendimientos y experiencias locales.">
  <link rel="canonical" href="https://www.arbelaez.com.co/view/Proyectos/index.php">
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">

  <!-- Idioma y geografía -->
  <meta name="language" content="es-CO">
  <meta itemprop="addressLocality" content="Arbeláez, Cundinamarca">
  <meta name="geo.region" content="CO-CUN">
  <meta name="geo.placename" content="Arbeláez">

  <!-- Keywords ES + EN (turismo / actividades / experiencias) -->
  <meta name="keywords" content="Turismo Arbeláez, actividades Arbeláez, proyectos Arbeláez, eventos Arbeláez, Arbeláez Cundinamarca, qué hacer en Arbeláez, plan en Arbeláez, fin de semana Arbeláez, visita Arbeláez, turismo cerca de Bogotá, turismo Cundinamarca, naturaleza Arbeláez, miradores Arbeláez, rutas Arbeláez, gastronomía Arbeláez, emprendimientos Arbeláez, cultura Arbeláez, artesanías Arbeláez, experiencia local, rutas turísticas, turismo cultural, turismo gastronómico, turismo de naturaleza, turismo comunitario, actividades para familias, actividades para parejas, actividades para grupos, colegios en Arbeláez, universidades en Arbeláez, empresas en Arbeláez, integración empresarial, voluntariado Arbeláez, fotografía turística, puntos instagrameables, monumentos Arbeláez, murales Arbeláez, Arbeláez se llena de color, TourBurger Arbeláez, ferias Arbeláez, mercados locales, agenda cultural Arbeláez, turismo sostenible, turismo responsable, discover Arbelaez, Arbelaez tourism, things to do in Arbelaez, Arbelaez activities, visit Arbelaez, cultural tourism, food tourism, nature tourism, local experiences, weekend trip Colombia">

  <!-- Icono / tema -->
  <link rel="icon" href="https://www.arbelaez.com.co/media/turismo/favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="https://www.arbelaez.com.co/media/turismo/apple-touch-icon.png">
  <meta name="theme-color" content="#005548">

  <!-- Rendimiento -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="image" href="https://www.arbelaez.com.co/media/turismo/hero-arbelaez.webp">

  <?php $cssTime = filemtime('../../view/Proyectos/style.css'); ?>
  <link rel="stylesheet" href="../../view/Proyectos/style.css?v=<?= $cssTime ?>">

  <!-- Datos estructurados: TouristInformationCenter -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TouristInformationCenter",
    "name": "Actividades Turísticas en Arbeláez",
    "image": "https://www.arbelaez.com.co/media/turismo/og-1200x630.jpg",
    "url": "https://www.arbelaez.com.co/view/Proyectos/index.php",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Arbeláez",
      "addressRegion": "Cundinamarca",
      "addressCountry": "CO"
    },
    "areaServed": "Arbeláez, Cundinamarca",
    "description": "Página para promover el turismo de Arbeláez mediante actividades y proyectos que visibilizan la cultura, la gastronomía, la naturaleza y el talento local. Aquí encontrarás iniciativas actuales y futuras para mostrar lo lindo y el potencial del municipio."
  }
  </script>
</head>

<body class="body_Artesanas_Veredas">
  <?php include "../../view/Proyectos/menu/menu.php" ?>

  <div class="container_Artesanas_Veredas">
    <?php include "../../view/Proyectos/title/title.php" ?>
    <?php include "../../view/Proyectos/slider/slider.php" ?>
    <?php include "../../view/Proyectos/galery/arte.php" ?>
    <?php include "../../view/Proyectos/bout_us/about.php" ?>
    <?php include "../../view/Proyectos/maps/maps.php"?>
  </div>

  <?php include "../../view/Proyectos/footer/footer.php" ?>
</body>
</html>
