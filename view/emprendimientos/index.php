<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Emprendimientos en Arbeláez –</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="es">
  <meta name="robots" content="index,follow">

  <!-- Canonical -->
  <link rel="canonical" href="https://www.arbelaez.com.co/emprendimientos/">

  <!-- CSS (cache-busting robusto) -->
  <?php
    $cssPath = __DIR__ . '/../../view/emprendimientos/style.css';
    $cssTime = file_exists($cssPath) ? filemtime($cssPath) : time();
  ?>
  <link rel="stylesheet" href="../../view/emprendimientos/style.css?v=<?= $cssTime ?>">

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/home/img/logo_pw.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/home/img/logo_pw.png">
  <link rel="mask-icon" href="../../view/home/img/logo_pw.png" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO -->
  <meta name="description" content="Descubre emprendimientos en Arbeláez (Cundinamarca): emprendimientos, gastronomía, artesanías, naturaleza, turismo, asociaciones y más. Encuentra información, fotos, ubicación, redes sociales y contacto directo por WhatsApp.">
  <meta name="keywords" content="Arbeláez, Arbelaez, emprendimientos en Arbeláez, turismo Arbeláez, Arbeláez Cundinamarca, qué hacer en Arbeláez, dónde comer en Arbeláez, dónde alojarse en Arbeláez, hospedaje Arbeláez, cabañas Arbeláez, fincas Arbeláez, gastronomía Arbeláez, restaurantes Arbeláez, cafés Arbeláez, artesanías Arbeláez, productos locales Arbeláez, naturaleza Arbeláez, rutas Arbeláez, miradores Arbeláez, cascadas cerca de Arbeláez, planes cerca de Bogotá, turismo en Cundinamarca, veredas de Arbeláez, negocios locales Arbeláez, guía turística Arbeláez, portal turístico Arbeláez, Arbelaez.com.co, Arbeláez Turismo">

  <!-- Open Graph -->
  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Emprendimientos en Arbeláez – Gastronomía, emprendimientos, Artesanías y Turismo">
  <meta property="og:description" content="Explora emprendimientos de Arbeláez y sus veredas: fotos, información, ubicación, redes sociales y contacto directo por WhatsApp.">
  <meta property="og:url" content="https://www.arbelaez.com.co/emprendimientos/">
  <meta property="og:image" content="https://www.arbelaez.com.co/view/home/img/og-1200x630.jpg">

  <!-- Twitter (opcional pero recomendado) -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Emprendimientos en Arbeláez – Arbeláez.com.co">
  <meta name="twitter:description" content="emprendimientos, gastronomía, artesanías, turismo y naturaleza en un solo lugar.">
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
        "name": "Emprendimientos en Arbeláez",
        "url": "https://www.arbelaez.com.co/emprendimientos/",
        "inLanguage": "es",
        "isPartOf": {
          "@type": "WebSite",
          "name": "Arbeláez.com.co",
          "url": "https://www.arbelaez.com.co/"
        }
      },
      {
        "@type": "Organization",
        "name": "Arbeláez Turismo",
        "url": "https://www.arbelaez.com.co/",
        "logo": "https://www.arbelaez.com.co/view/home/img/logo_pw.png",
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

<body class="body_emprendimientos">
  <?php include "../../view/global/menu/menu.php"; ?>

  <div class="container_emprendimientos">
    <?php include "../../view/emprendimientos/seccion/slider/slider.php"; ?>
    <?php include "../../view/emprendimientos/seccion/emprendimientos.php"; ?>
  </div>

  <?php include "../../view/global/footer/footer.php"; ?>
</body>
</html>
