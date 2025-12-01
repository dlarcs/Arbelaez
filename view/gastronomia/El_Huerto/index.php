<?php
$cssTime = filemtime('../../../view/gastronomia/El_Huerto/style.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Básicos -->
	<title>Del Huerto – Pizzería Artesanal en Arbeláez</title>
	<meta name="description" content="Del Huerto es una pizzería artesanal en Arbeláez, Cundinamarca. Pizzas al horno, lasañas, hamburguesas, jugos naturales y postres, junto al parque principal y rodeados de naturaleza.">
	<link rel="canonical" href="https://www.arbelaez.com.co/gastronomia/El_Huerto/">
	<meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">

	<!-- Idioma y geografía -->
	<meta name="language" content="es-CO">
	<meta itemprop="addressLocality" content="Arbeláez, Cundinamarca">
	<meta name="geo.region" content="CO-CUN">
	<meta name="geo.placename" content="Arbeláez">

	<!-- Palabras clave (principalmente para otros motores, no tanto Google) -->
	<meta name="keywords" content="pizzería artesanal en Arbeláez, pizza artesanal Arbeláez, Del Huerto pizzería, lasaña en Arbeláez, hamburguesas en Arbeláez, jugos naturales Arbeláez, postres artesanales Arbeláez, restaurantes cerca del parque de Arbeláez, dónde comer pizza en Arbeláez, restaurantes en Arbeláez Cundinamarca">

	<!-- Open Graph / Twitter -->
	<meta property="og:locale" content="es_CO">
	<meta property="og:type" content="restaurant">
	<meta property="og:title" content="Del Huerto – Pizzería Artesanal en Arbeláez">
	<meta property="og:description" content="Pizzas artesanales al horno, lasañas, hamburguesas, jugos naturales y postres en un espacio rodeado de naturaleza junto al parque principal de Arbeláez.">
	<meta property="og:url" content="https://www.arbelaez.com.co/gastronomia/El_Huerto/">
	<meta property="og:image" content="https://www.arbelaez.com.co/media/El_Huerto/og-1200x630.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Del Huerto – Pizzería Artesanal en Arbeláez">
	<meta name="twitter:description" content="La mejor pizza artesanal de Arbeláez, con lasaña, hamburguesas, jugos y postres en un ambiente natural junto al parque principal.">
	<meta name="twitter:image" content="https://www.arbelaez.com.co/media/El_Huerto/og-1200x630.jpg">

	<!-- Icono / tema -->
	<link rel="icon" href="../../../view/gastronomia/El_Huerto/img/logo.jpg" type="image/png">
	<link rel="apple-touch-icon" href="https://www.arbelaez.com.co/media/El_Huerto/apple-touch-icon.png">
	<meta name="theme-color" content="#005548">

	<!-- Rendimiento -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preload" as="image" href="https://www.arbelaez.com.co/media/El_Huerto/hero-gastronomia.webp">
	<link rel="stylesheet" href="../../../view/gastronomia/El_Huerto/style.css?v=<?= $cssTime ?>">

	<!-- Datos estructurados Restaurant -->
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Restaurant",
	  "name": "Del Huerto – Pizzería Artesanal",
	  "url": "https://www.arbelaez.com.co/gastronomia/El_Huerto/",
	  "address": {
	    "@type": "PostalAddress",
	    "addressLocality": "Arbeláez",
	    "addressRegion": "Cundinamarca",
	    "addressCountry": "CO"
	  },
	  "servesCuisine": [
	    "Pizza artesanal",
	    "Pizzería",
	    "Lasaña",
	    "Hamburguesas",
	    "Jugos naturales",
	    "Postres",
	    "Café"
	  ],
	  "priceRange": "$$",
	  "telephone": "+57 3024229260",
	  "acceptsReservations": true,
	  "openingHours": ["Mo-Su 12:00-22:00"]
	}
	</script>
</head>

<body class="body_De_Huerto">
	<?php include "../../../view/gastronomia/El_Huerto/menu/menu.php" ?>

	<div class="container_Del_Huerto" id="restaurant">
		<?php include "../../../view/gastronomia/El_Huerto/title/title.php" ?>
		<?php include "../../../view/gastronomia/El_Huerto/slider/slider.php" ?>
		<?php include "../../../view/gastronomia/El_Huerto/download/download.php" ?>
		<?php include "../../../view/gastronomia/El_Huerto/galery/gastronomia.php" ?>
		<?php include "../../../view/gastronomia/El_Huerto/bout_us/about.php" ?>
		<?php include "../../../view/gastronomia/El_Huerto/maps/maps.php" ?>
	</div>

	<?php include "../../../view/gastronomia/El_Huerto/footer/footer.php" ?>

	<!-- Botón WhatsApp con tu imagen -->
	<a class="whatsapp-fab"
	   href="https://wa.me/573194963554?text=Hola%20vengo%20desde%20la%20web%20de%20Del_Huerto%C2%B0"
	   target="_blank"
	   rel="noopener"
	   aria-label="Chatear por WhatsApp">
		<img src="../../../view/home/img/img_whatsApp.png"
		     alt="Contactar por WhatsApp"
		     decoding="async">
	</a>

</body>
</html>
