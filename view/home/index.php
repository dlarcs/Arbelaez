<!DOCTYPE html>
<html lang="es-CO" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Arbeláez Turismo | Naturaleza, gastronomía, artesanías y alojamiento en Cundinamarca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

    $scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host    = $_SERVER['HTTP_HOST'] ?? 'www.arbelaez.com.co';
    $baseUrl = $scheme . '://' . $host;

    $cssPath = '../../view/home/style.css';
    $jsPath  = '../../view/home/app.js';

    $cssFile = $base . '/view/home/style.css';
    $jsFile  = $base . '/view/home/app.js';

    $cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
    $jsTime  = is_file($jsFile)  ? filemtime($jsFile)  : time();

    $canonicalUrl = $baseUrl . '/';
    $ogImage      = $baseUrl . '/view/home/img/og-1200x630.jpg';
    $favicon      = $baseUrl . '/view/home/img/parque_principal1.jpg';
  ?>

  <!-- Basic SEO -->
  <meta name="description" content="Descubre Arbeláez, Cundinamarca: naturaleza, gastronomía, artesanías, alojamiento rural y planes turísticos cerca de Bogotá.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="language" content="es-CO">
  <meta name="author" content="Arbeláez Turismo">
  <meta name="theme-color" content="#005548">

  <!-- Canonical -->
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Styles and scripts -->
  <link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">
  <script src="<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Optional keywords -->
  <meta name="keywords" content="Arbeláez Turismo, Arbeláez Cundinamarca, turismo en Arbeláez, qué hacer en Arbeláez, dónde comer en Arbeláez, dónde dormir en Arbeláez, naturaleza en Arbeláez, artesanías en Arbeláez, gastronomía en Arbeláez, alojamiento en Arbeláez, turismo cerca de Bogotá">

  <!-- Open Graph -->
  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Arbeláez Turismo">
  <meta property="og:title" content="Arbeláez Turismo | Naturaleza, gastronomía, artesanías y alojamiento en Cundinamarca">
  <meta property="og:description" content="Explora Arbeláez y encuentra planes de naturaleza, gastronomía local, artesanías y alojamientos rurales cerca de Bogotá.">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image:alt" content="Paisaje turístico de Arbeláez, Cundinamarca">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Arbeláez Turismo | Naturaleza, gastronomía, artesanías y alojamiento en Cundinamarca">
  <meta name="twitter:description" content="Descubre qué hacer, dónde comer y dónde dormir en Arbeláez, Cundinamarca.">
  <meta name="twitter:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Social profiles -->
  <link rel="me" href="https://www.instagram.com/arbelaez_turismo/">
  <link rel="me" href="https://www.tiktok.com/@arbelaez_turismo">
  <link rel="me" href="https://www.facebook.com/arbelaez_turismo">

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebSite",
        "name": "Arbeláez Turismo",
        "url": "<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>",
        "inLanguage": "es-CO",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/buscar?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@type": "Organization",
        "name": "Arbeláez Turismo",
        "url": "<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>",
        "logo": "<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>",
        "sameAs": [
          "https://www.instagram.com/arbelaez_turismo/",
          "https://www.tiktok.com/@arbelaez_turismo",
          "https://www.facebook.com/arbelaez_turismo"
        ]
      }
    ]
  }
  </script>
</head>

<body class="body_home">
  <?php include $base . "/view/global/menu/menu.php"; ?>

  <main class="container_home">
    <?php include $base . "/view/home/slider/slider.php"; ?>
    <?php include $base . "/view/home/intro/intro.php"; ?>
    <?php include $base . "/view/home/places/places.php"; ?>
    <?php include $base . "/view/home/imagen/imagen.php"; ?>
    <?php include $base . "/view/home/Rifa/rifa.php"; ?>
    <?php include $base . "/view/home/text/text.php"; ?>
    <?php include $base . "/view/home/maps/maps.php"; ?>
  </main>

  <?php include $base . "/view/global/footer/footer.php"; ?>
</body>
</html>
