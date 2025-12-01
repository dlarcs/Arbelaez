<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Galería - Gallery – Activities in Arbeláez, Cundinamarca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/galery/">

  <!-- CSS (si quieres cache-busting también aquí) -->
  <?php $cssTime = filemtime('../../view/galery/style.css'); ?>
  <link rel="stylesheet" href="../../view/galery/style.css?v=<?= $cssTime ?>">

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Icons: load without blocking -->
  <script type="module" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.js"></script>

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/home/img/logo_pw.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/home/img/logo_pw.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/home/img/logo_pw.png">
  <link rel="mask-icon" href="../../view/home/img/logo_pw.png" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO (100 keywords EN) -->
  <meta name="description" content="Explore the Arbeláez Gallery: photos and highlights of local activities, nature experiences, food spots, crafts and weekend plans in Cundinamarca, near Bogotá.">
  <meta name="keywords" content="Arbeláez gallery, Arbelaez gallery, Arbeláez photos, Arbelaez photos, Arbeláez activities, things to do Arbeláez, Arbeláez experiences, Arbeláez highlights, Arbeláez tourism gallery, Cundinamarca activities, near Bogotá activities, weekend plans Arbeláez, day trip Arbeláez, Arbeláez nature photos, landscapes Arbeláez, viewpoints Arbeláez, waterfalls Arbeláez, rivers Arbeláez, natural pools Arbeláez, hiking Arbeláez, eco walks Arbeláez, mountain routes, birdwatching Arbeláez, cycling Arbeláez, outdoor activities, adventure activities, canyoning Arbeláez, rappelling Arbeláez, picnic spots Arbeláez, family activities, couple plans, friends plans, local culture Arbeláez, traditions Arbeláez, festivals Arbeláez, fairs Arbeláez, events Arbeláez, live music Arbeláez, cultural activities, local markets Arbeláez, farmers market Arbeláez, craft fair Arbeláez, handicrafts Arbeláez, artisan products Arbeláez, local artisans, souvenirs Arbeláez, handmade gifts Arbeláez, gastronomy Arbeláez, restaurants Arbeláez, where to eat Arbeláez, cafés Arbeláez, specialty coffee Arbeláez, desserts Arbeláez, bakeries Arbeláez, BBQ places Arbeláez, country restaurants, accommodation Arbeláez, cabins Arbeláez, glamping Arbeláez, camping Arbeláez, pool stays Arbeláez, jacuzzi stays Arbeláez, countryside stays, rural tourism Arbeláez, eco tourism Arbeláez, sustainable tourism, community tourism, local tourism, photo spots Arbeláez, scenic views, sunsets Arbeláez, sunrises Arbeláez, starry skies Arbeláez, nature lovers, travel photography, travel guide Arbeláez, Arbeláez map, how to get to Arbeláez, travel near Bogotá, Cundinamarca travel, south Cundinamarca, visit Arbeláez, discover Arbeláez, explore Arbeláez, Arbeláez Turismo gallery, arbelaez.com.co gallery">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Gallery – Activities in Arbeláez">
  <meta property="og:description" content="Discover Arbeláez through photos: activities, nature, food, crafts and weekend plans in Cundinamarca, near Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/galery/">
  <meta property="og:image" content="https://www.arbelaez.com.co/view/home/img/og-1200x630.jpg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Gallery – Activities in Arbeláez">
  <meta name="twitter:description" content="Photos of activities, nature spots and local experiences in Arbeláez, Cundinamarca — near Bogotá.">
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
        "name": "Gallery – Activities in Arbeláez",
        "url": "https://www.arbelaez.com.co/galery/",
        "inLanguage": "en"
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

<body class="body_galery">
  <?php include "../../view/global/menu/menu.php" ?>

  <div class="container_galery">
    <?php include "../../view/galery/seccion/galery.php" ?>
    <?php include "../../view/global/footer/footer.php" ?>
  </div>
</body>
</html>
