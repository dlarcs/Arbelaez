<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Alojamiento en Arbeláez - Accommodation in Arbeláez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/alojamiento/">

  <!-- CSS (cache-busting robusto) -->
  <?php $cssTime = filemtime('../../view/alojamiento/style.css'); ?>
  <link rel="stylesheet" href="../../view/alojamiento/style.css?v=<?= $cssTime ?>">

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg">
  <link rel="icon" type="image/png" sizes="16x16" href="../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg">
  <link rel="apple-touch-icon" sizes="180x180" href="../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg">
  <link rel="mask-icon" href="../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO (100 keywords EN) -->
  <meta name="description" content="Find affordable, comfortable stays in Arbeláez, Cundinamarca. Enjoy river-side cabins, pool and jacuzzi escapes, BBQ areas, nature views and family-friendly accommodation near Bogotá.">
  <meta name="keywords" content="Arbeláez accommodation, Arbelaez accommodation, Arbeláez lodging, Arbelaez lodging, Arbeláez stays, Arbelaez stays, Arbeláez hotels, Arbelaez hotels, Arbeláez cabins, Arbelaez cabins, country house Arbeláez, countryside stay Arbeláez, rural accommodation Arbeláez, farm stay Arbeláez, eco lodge Arbeláez, glamping Arbeláez, camping Arbeláez, river stay Arbeláez, riverside cabin, river retreat, nature lodge, mountain views, peaceful getaway, weekend getaway, near Bogotá stays, towns near Bogotá accommodation, Cundinamarca accommodation, south Cundinamarca stays, family friendly lodging, couple getaway, romantic stay, group accommodation, budget accommodation, affordable lodging, accessible accommodation, wheelchair friendly stay, pet friendly accommodation, accommodation with pool, pool retreat, jacuzzi accommodation, hot tub stay, spa style stay, accommodation with BBQ, BBQ area, picnic area, fire pit, outdoor dining, private rooms, shared cabins, cabins for families, cabins for couples, cozy cabins, modern cabins, rustic cabins, cabin with view, balcony view, garden stay, green areas, natural trails nearby, hiking nearby, birdwatching stay, quiet accommodation, relaxing retreat, wellness getaway, digital detox, safe accommodation, clean rooms, comfortable beds, local hospitality, friendly hosts, breakfast available, self catering stay, kitchen available, parking available, easy access, close to rivers, close to waterfalls, close to viewpoints, nature tourism stay, rural tourism stay, eco tourism stay, community tourism stay, local experiences, weekend in Arbeláez, stay in Arbeláez, where to stay Arbeláez, best places to stay Arbeláez, accommodation deals Arbeláez, book accommodation Arbeláez, Arbeláez tourism, Arbeláez travel, Arbelaez.com.co accommodation, Arbeláez Turismo accommodation">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Alojamiento en Arbeláez - Accommodation in Arbeláez">
  <meta property="og:description" content="Explore comfortable and affordable stays in Arbeláez: riverside cabins, pool retreats, jacuzzi options, BBQ areas and nature views near Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/alojamiento/">
  <meta property="og:image" content="https://www.arbelaez.com.co/view/home/img/og-1200x630.jpg">


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
        "name": "Accommodation in Arbeláez",
        "url": "https://www.arbelaez.com.co/alojamiento/",
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

<body class="body_alojamiento">
  <?php include "../../view/global/menu/menu.php" ?>
  <div class="container_alojamiento">
    <?php include "../../view/alojamiento/seccion/slider/slider.php" ?>
    <?php include "../../view/alojamiento/seccion/alojamiento.php" ?>
  </div>
  <?php include "../../view/global/footer/footer.php" ?>
</body>
</html>
