<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ruta del Café en Arbeláez – Coffee Spots, Flavours & Cosy Places</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical -->
  <link rel="canonical" href="https://www.arbelaez.com.co/coffe/ruta-del-coffe/">

  <!-- CSS (cache-busting) -->
  <?php $cssTime = filemtime('../coffe/style.css'); ?>
  <link rel="stylesheet" href="../coffe/style.css?v=<?= $cssTime ?>">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="../coffe/img/coffe_principal.jpg">
  <link rel="icon" type="image/png" sizes="16x16" href="../coffe/img/coffe_principal.jpg">
  <link rel="apple-touch-icon" sizes="180x180" href="../coffe/img/coffe_principal.jpg">
  <link rel="mask-icon" href="../coffe/img/coffe_principal.jpg" color="#6f4e37">
  <meta name="theme-color" content="#6f4e37">

  <!-- SEO -->
  <meta name="description" content="Discover the best coffee places in Arbeláez, Cundinamarca. Explore cosy cafés, local coffee spots, warm flavours and special places to enjoy a good cup of coffee.">
  <meta name="keywords" content="Arbeláez, Arbelaez, coffee in Arbelaez, coffes in Arbelaez, coffee places in Arbelaez, where to drink coffee in Arbelaez, coffee shops in Arbelaez, specialty coffee Arbelaez, local coffee Arbelaez, coffee tourism Arbelaez, coffee route Arbelaez, cosy coffes Arbelaez, places to relax in Arbelaez, tourism in Arbelaez, where to go in Arbelaez, what to do in Arbelaez, cafés in Cundinamarca, coffee near Bogotá, coffee spots near Bogotá, rural coffee tourism, coffee culture Colombia, arbelaez.com.co">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Ruta del Café en Arbeláez – Coffee Spots & Cosy Places">
  <meta property="og:description" content="Explore coffee places in Arbeláez and enjoy cosy spots, local flavours and warm experiences near Bogotá.">
  <meta property="og:url" content="https://www.arbelaez.com.co/coffe/ruta-del-coffe/">
  <meta property="og:image" content="https://www.arbelaez.com.co/coffe/img/coffe_principal.jpg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Ruta del Café en Arbeláez – Coffee Spots & Cosy Places">
  <meta name="twitter:description" content="Find lovely places to enjoy coffee in Arbeláez, Cundinamarca.">
  <meta name="twitter:image" content="https://www.arbelaez.com.co/coffe/img/coffe_principal.jpg">

  <!-- Social profiles -->
  <link rel="me" href="https://facebook.com/profile.php?id=61580302286594">
  <link rel="me" href="https://instagram.com/arbelaez_turismo/">
  <link rel="me" href="https://tiktok.com/@arbelaez_turismo">

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebPage",
        "name": "Ruta del Café en Arbeláez",
        "url": "https://www.arbelaez.com.co/coffe/ruta-del-coffe/",
        "inLanguage": "en"
      },
      {
        "@type": "Organization",
        "name": "Arbeláez Turismo",
        "url": "https://www.arbelaez.com.co/",
        "sameAs": [
          "https://facebook.com/profile.php?id=61580302286594",
          "https://instagram.com/arbelaez_turismo/",
          "https://tiktok.com/@arbelaez_turismo"
        ]
      }
    ]
  }
  </script>
</head>

<body class="body_coffe">
  <?php include "../global/menu/menu.php" ?>
  <div class="container_coffe">
    <?php include "../coffe/slider/slider.php" ?>
    <?php include "../coffe/seccion/coffe.php" ?>
    <?php include "../coffe/maps/maps.php" ?>
    <?php include "../coffe/footer/footer.php" ?>
  </div>
</body>
</html>
