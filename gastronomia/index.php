<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gastronomía en Arbeláez - Gastronomy in Arbeláez – Restaurants</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/gastronomia/">

  <!-- CSS + JS (cache-busting robusto) -->
  <?php
    $cssTime = filemtime('../../gastronomia/style.css');
    $jsTime  = filemtime('../../gastronomia/app.js');
  ?>
  <link rel="stylesheet" href="../../gastronomia/style.css?v=<?= $cssTime ?>">
  <script src="../../gastronomia/app.js?v=<?= $jsTime ?>" defer></script>

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../gastronomia/Pablos_Restaurant/img/especial20.jpg">
  <link rel="icon" type="image/png" sizes="16x16" href="../../gastronomia/Pablos_Restaurant/img/especial20.jpg">
  <link rel="apple-touch-icon" sizes="180x180" href="../../gastronomia/Pablos_Restaurant/img/especial20.jpg">
  <link rel="mask-icon" href="../../gastronomia/Pablos_Restaurant/img/especial20.jpg" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO (100 keywords EN) -->
  <meta name="description" content="Explore gastronomy in Arbeláez, Cundinamarca. Find local restaurants, traditional dishes, cafés, desserts and great places to eat during your trip near Bogotá.">
  <meta name="keywords" content="Arbelaez, arbelaez, Arbeláez, arbeláez, arbelaez, arbelaez cundinamarca, arbeláez cundinamarca, Arbeláez gastronomy, Arbelaez gastronomy, Arbeláez restaurants, Arbelaez restaurants, places to eat Arbeláez, where to eat Arbeláez, food in Arbeláez, local food Arbeláez, traditional food Arbeláez, Colombian food Arbeláez, Cundinamarca food, restaurants in Cundinamarca, near Bogotá restaurants, towns near Bogotá food, weekend food trip, culinary route, food tourism, gastronomic tourism, family restaurants, couple dinner, group dining, budget meals, affordable restaurants, local flavors, homemade food, traditional dishes, typical dishes, lunch spots, dinner spots, breakfast places, brunch Arbeláez, coffee shops Arbeláez, cafés Arbeláez, specialty coffee Arbeláez, Colombian coffee, bakery Arbeláez, artisan bakery, pastries Arbeláez, desserts Arbeláez, cakes Arbeláez, sweets Arbeláez, ice cream Arbeláez, chocolate drinks, hot chocolate, empanadas Arbeláez, arepas Arbeláez, grilled food Arbeláez, BBQ restaurants, parrilla Arbeláez, pizza Arbeláez, pizzeria Arbeláez, burgers Arbeláez, fast casual Arbeláez, vegetarian options, vegan friendly, healthy food, fresh ingredients, farm to table, local produce, street food Arbeláez, snacks Arbeláez, juices Arbeláez, natural juices, cocktails Arbeláez, bars Arbeláez, local drinks, craft beverages, live music restaurants, family friendly cafés, pet friendly restaurants, outdoor seating, terrace dining, mountain view restaurants, countryside restaurants, rustic restaurants, cozy restaurants, romantic restaurants, best restaurants Arbeláez, top places to eat, recommended restaurants, local recommendations, food guide Arbeláez, gastronomy guide, what to eat Arbeláez, culinary experiences, local experiences, traditional recipes, Colombian tradition, culture and food, food market Arbeláez, farmers market, local ingredients, weekend in Arbeláez, Arbeláez travel, Arbeláez tourism, arbelaez.com.co gastronomy, Arbeláez Turismo gastronomy">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Gastronomía en Arbeláez - Gastronomy in Arbeláez – Restaurants">
  <meta property="og:description" content="Discover where to eat in Arbeláez: local restaurants, cafés, desserts and traditional food in Cundinamarca, near Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/gastronomia/">
  <meta property="og:image" content="https://www.arbelaez.com.co/home/img/og-1200x630.jpg">

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
        "name": "Gastronomy in Arbeláez",
        "url": "https://www.arbelaez.com.co/gastronomia/",
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

<body class="body_gastronomia">
  <?php include "../../global/menu/menu.php" ?>

  <div class="container_gastronomia">
    <?php include "../../gastronomia/seccion/slider/slider.php" ?>
    <?php include "../../gastronomia/seccion/restaurante.php" ?>
    <?php include "../../global/footer/footer.php" ?>
  </div>

  <section class="scroll-indicator" aria-label="More content below">
    <span class="scroll-indicator__circle">
      <span class="scroll-indicator__arrow"></span>
    </span>
  </section>
</body>
</html>
