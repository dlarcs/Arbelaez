<!DOCTYPE html>
<html lang="es-CO" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    $base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

    $scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host    = $_SERVER['HTTP_HOST'] ?? 'www.arbelaez.com.co';
    $baseUrl = $scheme . '://' . $host;

    $cssPath = 'home/style.css';
    $jsPath  = 'home/app.js';

    $cssFile = $base . '/home/style.css';
    $jsFile  = $base . '/home/app.js';

    $cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
    $jsTime  = is_file($jsFile) ? filemtime($jsFile) : time();

    $canonicalUrl = $baseUrl . '/';
    $ogImage      = $baseUrl . '/global/img/logo.png';
    $favicon      = $baseUrl . '/global/img/logo.png';
  ?>

  <title>Arbeláez Turismo | Qué hacer, dónde comer y dónde dormir en Cundinamarca</title>

  <meta name="description" content="Descubre Arbeláez, Cundinamarca: naturaleza, alojamiento, gastronomía, artesanías y lugares turísticos cerca de Bogotá. Encuentra qué hacer, dónde comer y dónde hospedarte.">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="theme-color" content="#005548">

  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">

  <link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">
  <script src="<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="icon" href="<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="apple-touch-icon" href="<?= htmlspecialchars($favicon, ENT_QUOTES, 'UTF-8') ?>">

  <meta property="og:locale" content="es_CO">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Arbeláez Turismo">
  <meta property="og:title" content="Arbeláez Turismo | Qué hacer, dónde comer y dónde dormir en Cundinamarca">
  <meta property="og:description" content="Explora Arbeláez y encuentra naturaleza, gastronomía local, artesanías, ríos y alojamientos rurales cerca de Bogotá.">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Arbeláez Turismo | Qué hacer, dónde comer y dónde dormir en Cundinamarca">
  <meta name="twitter:description" content="Descubre Arbeláez: naturaleza, gastronomía, artesanías y alojamiento rural cerca de Bogotá.">
  <meta name="twitter:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebSite",
        "name": "Arbeláez Turismo",
        "url": "<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>",
        "inLanguage": "es-CO"
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
  <?php include $base . "/global/menu/menu.php"; ?>
    <?php include $base . "/home/slider/slider.php"; ?>
    <?php include $base . "/home/intro/intro.php"; ?>
    <?php include $base . "/home/places/places.php"; ?>
    <?php include $base . "/home/imagen/imagen.php"; ?>
    <?php include $base . "/home/Rifa/rifa.php"; ?>
    <?php include $base . "/home/text/text.php"; ?>
    <?php include $base . "/home/maps/maps.php"; ?>
  <?php include $base . "/global/footer/footer.php"; ?>
</body>
</html>
