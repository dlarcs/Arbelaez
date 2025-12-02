<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="es-CO">
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">

  <!-- Básicos -->
  <title>Asociación Juntanza – Emprendimiento y apoyo a mujeres en Arbeláez</title>
  <meta name="description" content="Asociación Juntanza en Arbeláez (Cundinamarca): red de mujeres emprendedoras que se reúne para crear actividades, formarse, apoyarse y fortalecer la economía de cada emprendimiento.">

  <!-- Canonical -->
  <link rel="canonical" href="https://www.arbelaez.com.co/view/Juntanza_de_Mujeres/">

  <!-- Idioma y geografía -->
  <meta itemprop="addressLocality" content="Arbeláez, Cundinamarca">
  <meta name="geo.region" content="CO-CUN">
  <meta name="geo.placename" content="Arbeláez">

  <!-- CSS + JS (cache-busting robusto) -->
  <?php
    $cssPath = '../../view/Juntanza_de_Mujeres/style.css';
    $jsPath  = '../../view/Juntanza_de_Mujeres/app.js'; // si tu JS tiene otro nombre, cámbialo aquí

    $cssTime = file_exists($cssPath) ? filemtime($cssPath) : time();
    $jsTime  = file_exists($jsPath)  ? filemtime($jsPath)  : time();
  ?>
  <link rel="stylesheet" href="../../view/Juntanza_de_Mujeres/style.css?v=<?= $cssTime ?>">
  <?php if (file_exists($jsPath)) : ?>
    <script src="../../view/Juntanza_de_Mujeres/app.js?v=<?= $jsTime ?>" defer></script>
  <?php endif; ?>

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Rendimiento -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="image" href="https://www.arbelaez.com.co/media/Juntanza_de_Mujeres/hero-view.webp">

  <!-- Favicons / tema -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/Juntanza_de_Mujeres/img/logo.jpeg">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/Juntanza_de_Mujeres/img/logo.jpeg">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/Juntanza_de_Mujeres/img/logo.jpeg">
  <link rel="mask-icon" href="../../view/Juntanza_de_Mujeres/img/logo.jpeg" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta keywords (útil para otros motores) -->
  <meta name="keywords" content="Asociación Juntanza, Asociación Juntanza de Mujeres, Juntanza de Mujeres Arbeláez, asociación de mujeres Arbeláez, asociación de mujeres Cundinamarca, emprendimiento femenino, mujeres emprendedoras, apoyo a mujeres emprendedoras, red de mujeres emprendedoras, comunidad de mujeres, empoderamiento femenino, economía de las mujeres, fortalecimiento económico, capacitación para mujeres, formación para emprendedoras, talleres para mujeres, talleres de emprendimiento, mentoría para emprendedoras, acompañamiento empresarial, asesoría para emprendimientos, apoyo a pequeños negocios, microemprendimientos, emprendimientos locales, economía local Arbeláez, iniciativas comunitarias, proyectos sociales, asociación sin ánimo de lucro, organización social de mujeres, emprendimiento social, liderazgo femenino, redes de apoyo femenino, ferias de emprendimiento, productos artesanales, artesanías Cundinamarca, emprendimientos rurales, mujeres rurales emprendedoras, economía solidaria, asociatividad, cooperativismo, alianzas para emprender, networking para mujeres, actividades comunitarias, encuentros de mujeres, inclusión económica, independencia financiera mujeres, educación financiera mujeres, marketing para emprendedoras, promoción de emprendimientos, visibilidad de emprendimientos, vitrina de emprendimientos, mujeres empresarias, emprendimientos sostenibles, emprendimientos con impacto,
Juntanza Association, Juntanza Women’s Association, women entrepreneurship, women entrepreneurs, women empowerment, economic empowerment for women, business training for women, entrepreneurship workshops, mentoring for women entrepreneurs, small business support, local entrepreneurship, community initiatives, non-profit women organization, women leadership, women networking, entrepreneurship fairs, handmade products, rural women entrepreneurs, solidarity economy, economic inclusion, women financial independence, financial education for women, marketing for women entrepreneurs, business promotion, showcase for entrepreneurs">

  <!-- Open Graph / Twitter -->
  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Arbeláez Turismo">
  <meta property="og:title" content="Asociación Juntanza – Apoyo a mujeres emprendedoras en Arbeláez">
  <meta property="og:description" content="Red de mujeres emprendedoras que se reúne para crear actividades, capacitarse y fortalecer la economía de cada emprendimiento.">
  <meta property="og:url" content="https://www.arbelaez.com.co/view/Juntanza_de_Mujeres/">
  <meta property="og:image" content="https://www.arbelaez.com.co/media/Juntanza_de_Mujeres/og-1200x630.jpg">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Asociación Juntanza – Mujeres emprendedoras en Arbeláez">
  <meta name="twitter:description" content="Actividades, talleres y apoyo para impulsar emprendimientos liderados por mujeres en Arbeláez, Cundinamarca.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/media/Juntanza_de_Mujeres/og-1200x630.jpg">

  <!-- Social profiles (si Juntanza tiene redes propias, las cambiamos aquí) -->
  <link rel="me" href="https://www.facebook.com/profile.php?id=61580302286594">
  <link rel="me" href="https://www.instagram.com/arbelaez_turismo/">
  <link rel="me" href="https://www.tiktok.com/@arbelaez_turismo">

  <!-- Structured data: WebPage + NGO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebPage",
        "name": "Asociación Juntanza de Mujeres",
        "url": "https://www.arbelaez.com.co/view/Juntanza_de_Mujeres/",
        "inLanguage": "es-CO",
        "description": "Asociación de mujeres emprendedoras que se reúne para realizar actividades, capacitarse, apoyarse y fortalecer la economía de cada emprendimiento en Arbeláez, Cundinamarca."
      },
      {
        "@type": "NGO",
        "name": "Asociación Juntanza",
        "alternateName": "Juntanza de Mujeres",
        "url": "https://www.arbelaez.com.co/view/Juntanza_de_Mujeres/",
        "telephone": "+57 3024229260",
        "areaServed": "Arbeláez, Cundinamarca, Colombia",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Arbeláez",
          "addressRegion": "Cundinamarca",
          "addressCountry": "CO"
        },
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+57 3024229260",
          "contactType": "information",
          "areaServed": "CO",
          "availableLanguage": ["es", "en"]
        }],
        "knowsAbout": [
          "Emprendimiento femenino",
          "Economía solidaria",
          "Capacitación",
          "Redes de apoyo",
          "Desarrollo comunitario"
        ]
      }
    ]
  }
  </script>
</head>

<body class="body_Juntanza_de_Mujeres">
  <?php include "../../view/Juntanza_de_Mujeres/menu/menu.php" ?>

  <div class="container_Juntanza_de_Mujeres">
    <?php include "../../view/Juntanza_de_Mujeres/title/title.php" ?>
    <?php include "../../view/Juntanza_de_Mujeres/slider/slider.php" ?>
    <?php include "../../view/Juntanza_de_Mujeres/galery/seccion.php" ?>
    <?php include "../../view/Juntanza_de_Mujeres/bout_us/about.php" ?>
    <?php include "../../view/Juntanza_de_Mujeres/maps/maps.php"?>
  </div>

  <?php include "../../view/Juntanza_de_Mujeres/footer/footer.php" ?>

  <!-- Botón WhatsApp -->
  <a class="whatsapp-fab"
     href="https://wa.me/573024229260?text=Hola%2C%20vengo%20desde%20la%20web%20de%20la%20Asociaci%C3%B3n%20Juntanza%20y%20me%20gustar%C3%ADa%20recibir%20m%C3%A1s%20informaci%C3%B3n."
     target="_blank" rel="noopener"
     aria-label="Chatear por WhatsApp">
    <img src="../../view/global/img/img_whatsApp.png" alt="Contactar por WhatsApp" decoding="async">
  </a>

  <!-- Indicador scroll (opcional, igual al estilo que usas en Gastronomía) -->
  <section class="scroll-indicator" aria-label="Más contenido abajo">
    <span class="scroll-indicator__circle">
      <span class="scroll-indicator__arrow"></span>
    </span>
  </section>
</body>
</html>
