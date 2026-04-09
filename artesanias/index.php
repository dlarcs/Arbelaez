<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Artesanías en Arbeláez - Handicrafts in Arbeláez</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical (ajusta si tu URL real es diferente) -->
  <link rel="canonical" href="https://www.arbelaez.com.co/artesanias/">

  <!-- CSS (cache-busting robusto) -->
  <?php $cssTime = filemtime('../artesanias/style.css'); ?>
  <link rel="stylesheet" href="../artesanias/style.css?v=<?= $cssTime ?>">

  <!-- Font: optimized -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../artesanias/Artesanias_Martha_E/img/manillas2.jpeg">
  <link rel="icon" type="image/png" sizes="16x16" href="../artesanias/Artesanias_Martha_E/img/manillas2.jpeg">
  <link rel="apple-touch-icon" sizes="180x180" href="../artesanias/Artesanias_Martha_E/img/manillas2.jpeg">
  <link rel="mask-icon" href="../artesanias/Artesanias_Martha_E/img/manillas2.jpeg" color="#005548">
  <meta name="theme-color" content="#005548">

  <!-- Meta SEO (100 keywords EN) -->
  <meta name="description" content="Discover handmade crafts in Arbeláez, Cundinamarca. Support local artisans and find unique gifts, traditional products and authentic souvenirs near Bogotá.">
  <meta name="keywords" content="Arbelaez, arbelaez, Arbeláez, arbeláez, arbelaez, arbelaez cundinamarca, arbeláez cundinamarca, Arbeláez handicrafts, Arbelaez handicrafts, Arbeláez crafts, Arbelaez crafts, handmade crafts Arbeláez, handmade gifts Arbeláez, local artisans Arbeláez, artisan products Arbeláez, traditional crafts Arbeláez, Colombian handicrafts, Cundinamarca handicrafts, Arbeláez souvenirs, Arbelaez souvenirs, authentic souvenirs, cultural crafts, rural crafts, handmade souvenirs, craft market Arbeláez, local market Arbeláez, artisan fair Arbeláez, craft fair Arbeláez, artisan shop Arbeláez, gift shop Arbeláez, handmade home decor, rustic decor, country decor, decorative crafts, handcrafted accessories, handmade jewelry, artisan jewelry, beads jewelry, woven accessories, handmade bags, woven bags, handmade wallets, leather crafts, handcrafted leather, artisan belts, handmade hats, textile crafts, weaving Arbeláez, loom weaving, embroidery crafts, handmade embroidery, crochet crafts, macrame crafts, handmade macrame, pottery Arbeláez, ceramics crafts, handmade ceramics, clay crafts, wood crafts, carved wood, handmade wooden gifts, bamboo crafts, natural fiber crafts, straw crafts, palm crafts, recycled crafts, eco friendly crafts, sustainable crafts, fair trade crafts, community crafts, local entrepreneurship, handmade candles, scented candles, soaps handmade, natural soaps, handmade skincare, coffee themed gifts, cocoa products gifts, jams local, artisanal food gifts, gift baskets Arbeláez, custom gifts, personalized crafts, unique gifts, one of a kind gifts, artisan workshop, craft workshop, meet the artisans, artisan stories, cultural heritage, tradition and culture, Colombian tradition, rural culture, local identity, support local business, buy local Arbeláez, shopping in Arbeláez, shopping near Bogotá, things to buy Arbeláez, what to buy Arbeláez, gifts from Cundinamarca, souvenirs from Colombia, travel shopping Colombia, tourist gifts, handcrafted souvenirs, local products, handmade quality, authentic handmade, artisanal production, handmade details, home souvenirs, small business Colombia, Arbeláez tourism, Arbelaez.com.co handicrafts, Arbeláez Turismo handicrafts">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Artesanías en Arbeláez - Handicrafts in Arbeláez">
  <meta property="og:description" content="Explore authentic crafts made by local artisans in Arbeláez. Unique souvenirs, handmade gifts and traditional products near Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/artesanias/">
  <meta property="og:image" content="../artesanias/Artesanias_Martha_E/img/manillas2.jpeg">

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
        "name": "Handicrafts in Arbeláez",
        "url": "https://www.arbelaez.com.co/artesanias/",
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

<body class="body_artesanias">
  <?php include "../global/menu/menu.php" ?>

  <div class="container_artesanias">
    <?php include "../artesanias/seccion/slider/slider.php" ?>
    <?php include "../artesanias/seccion/artesanias.php" ?>
    <?php include "../global/footer/footer.php" ?>
  </div>
</body>
</html>
