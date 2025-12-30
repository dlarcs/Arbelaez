<?php
  // Cache-busting robusto (evita error si el archivo no existe)
  $cssFile = __DIR__ . '/../../view/history/style.css';
  $cssTime = file_exists($cssFile) ? filemtime($cssFile) : time();

  // URLs base (ajusta si cambias estructura)
  $baseUrl = "https://www.arbelaez.com.co";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>History of Arbeláez – Culture, Heritage & Traditions in Cundinamarca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Language & robots -->
  <meta name="language" content="en">
  <meta name="robots" content="index,follow">

  <!-- Canonical -->
  <link rel="canonical" href="<?= $baseUrl ?>/history/">

  <!-- CSS -->
  <link rel="stylesheet" href="../../view/history/style.css?v=<?= $cssTime ?>">

  <!-- Font -->
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
  <meta name="description" content="Learn about the history of Arbeláez, Cundinamarca: its origins, culture, traditions, heritage sites and local identity — a charming town near Bogotá.">
  <meta name="keywords" content="History of Arbeláez, Arbeláez history, Arbelaez history, Arbeláez Cundinamarca history, Cundinamarca history, Arbeláez heritage, cultural heritage Arbeláez, traditions Arbeláez, Arbeláez culture, Colombian culture, local identity, origins of Arbeláez, foundation of Arbeláez, historical timeline Arbeláez, historical facts Arbeláez, Arbeláez municipality, town history, rural history Colombia, Andean region history, south Cundinamarca history, Bogotá region history, towns near Bogotá history, historical tourism, cultural tourism, local traditions, community traditions, festivities Arbeláez, local celebrations, festivals Arbeláez, fairs Arbeláez, patron saint festivities, religious traditions, Arbeláez church history, main square Arbeláez, central park Arbeláez, colonial heritage, architecture Arbeláez, cultural landmarks, heritage sites, historical places, local stories, oral history, community memory, notable people Arbeláez, traditional music, folk music, dance traditions, artisan tradition, crafts tradition, farming tradition, coffee culture, rural life, gastronomy tradition, local customs, cultural roots, Andean culture, historical route, cultural route, community development, town growth, agriculture history, migration history, modern Arbeláez, civic pride, heritage conservation, Arbeláez travel guide, visit Arbeláez, discover Arbeláez, explore Arbeláez, arbelaez.com.co history">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="History of Arbeláez – Culture & Heritage">
  <meta property="og:description" content="Discover the story of Arbeláez, Cundinamarca: origins, traditions, heritage and culture in a beautiful town near Bogotá.">
  <meta property="og:url" content="<?= $baseUrl ?>/history/">
  <meta property="og:image" content="<?= $baseUrl ?>/view/home/img/og-1200x630.jpg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="History of Arbeláez – Culture & Heritage">
  <meta name="twitter:description" content="Learn about Arbeláez’s origins, traditions and heritage in Cundinamarca — a town near Bogotá.">
  <meta name="twitter:image" content="<?= $baseUrl ?>/view/home/img/og-1200x630.jpg">

  <!-- Social profiles -->
  <link rel="me" href="https://www.facebook.com/profile.php?id=61580302286594">
  <link rel="me" href="https://www.instagram.com/arbelaez_turismo/">
  <link rel="me" href="https://www.tiktok.com/@arbelaez_turismo">

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?= $baseUrl ?>/#organization",
        "name": "Arbeláez Turismo",
        "url": "<?= $baseUrl ?>/",
        "logo": {
          "@type": "ImageObject",
          "url": "<?= $baseUrl ?>/view/home/img/logo_pw.png"
        },
        "sameAs": [
          "https://www.facebook.com/profile.php?id=61580302286594",
          "https://www.instagram.com/arbelaez_turismo/",
          "https://www.tiktok.com/@arbelaez_turismo"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "<?= $baseUrl ?>/#website",
        "url": "<?= $baseUrl ?>/",
        "name": "arbelaez.com.co",
        "publisher": { "@id": "<?= $baseUrl ?>/#organization" },
        "inLanguage": "en"
      },
      {
        "@type": "WebPage",
        "@id": "<?= $baseUrl ?>/history/#webpage",
        "url": "<?= $baseUrl ?>/history/",
        "name": "History of Arbeláez",
        "isPartOf": { "@id": "<?= $baseUrl ?>/#website" },
        "about": { "@id": "<?= $baseUrl ?>/#organization" },
        "inLanguage": "en",
        "primaryImageOfPage": {
          "@type": "ImageObject",
          "url": "<?= $baseUrl ?>/view/history/img/hero-history.jpg"
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?= $baseUrl ?>/history/#breadcrumbs",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?= $baseUrl ?>/" },
          { "@type": "ListItem", "position": 2, "name": "History", "item": "<?= $baseUrl ?>/history/" }
        ]
      }
    ]
  }
  </script>
</head>

<body>
  <!-- Skip link -->
  <a class="skip-link" href="#main">Skip to content</a>

  <!-- Top bar (simple). Si tú ya tienes header global, puedes reemplazar esto por include() -->
  <header class="history-header" role="banner">
    <div class="history-header__inner">
      <a class="brand" href="<?= $baseUrl ?>/" aria-label="Go to arbelaez.com.co home">
        <img src="../../view/home/img/logo_pw.png" alt="arbelaez.com.co logo" width="44" height="44" loading="eager">
        <span class="brand__text">arbelaez.com.co</span>
      </a>

      <nav class="history-nav" aria-label="Primary">
        <a href="<?= $baseUrl ?>/">Home</a>
        <a href="<?= $baseUrl ?>/view/turismo/">Tourism</a>
        <a href="<?= $baseUrl ?>/view/gastronomia/">Food</a>
        <a href="<?= $baseUrl ?>/view/alojamiento/">Accommodation</a>
        <a href="<?= $baseUrl ?>/view/artesanias/">Crafts</a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="history-hero" aria-label="History of Arbeláez hero">
    <div class="history-hero__media" aria-hidden="true">
      <!-- Cambia esta imagen por una foto bonita del parque / paisaje -->
      <img
        src="../../view/history/img/hero-history.jpg"
        alt=""
        loading="eager"
        decoding="async"
      >
      <div class="history-hero__overlay"></div>
    </div>

    <div class="history-hero__content">
      <p class="kicker">Cundinamarca • Colombia</p>
      <h1>History of Arbeláez</h1>
      <p class="subtitle">
        A town shaped by countryside life, traditions, community pride and the natural beauty of the Sumapaz region.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#timeline">Explore the timeline</a>
        <a class="btn btn-ghost" href="#traditions">Culture & traditions</a>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main" class="history-main">
    <!-- Intro -->
    <section class="card intro" aria-label="Introduction">
      <h2>Where Arbeláez’s story begins</h2>
      <p>
        Arbeláez is a municipality in Cundinamarca, known for its peaceful atmosphere, warm community life and a strong rural identity.
        Over time, local families, traditions and everyday work in the countryside have shaped the town’s character and cultural memory.
      </p>
      <p class="note">
        Tip: If you have official dates (foundation, municipal creation, patron-saint name, etc.), send them to me and I’ll replace the placeholders below.
      </p>
    </section>

    <!-- Table of contents -->
    <section class="toc card" aria-label="Page contents">
      <h2>On this page</h2>
      <ul>
        <li><a href="#timeline">Historical timeline</a></li>
        <li><a href="#heritage">Heritage & landmarks</a></li>
        <li><a href="#traditions">Traditions & celebrations</a></li>
        <li><a href="#people">Community, crafts & everyday life</a></li>
        <li><a href="#visit">Visit Arbeláez</a></li>
      </ul>
    </section>

    <!-- Timeline -->
    <section id="timeline" class="card" aria-label="Historical timeline">
      <h2>Historical timeline</h2>
      <p class="section-lead">
        Replace the dates and events with your verified local sources (alcaldía, archives, community historians, parish records, etc.).
      </p>

      <div class="timeline">
        <article class="timeline-item">
          <h3>Early roots (pre-republican era)</h3>
          <p>
            The territory of the Sumapaz region has long been a corridor of movement, agriculture and cultural exchange.
            Add here any verified references to indigenous presence, colonial routes or early settlements connected to Arbeláez.
          </p>
        </article>

        <article class="timeline-item">
          <h3>Foundation / establishment (YEAR — placeholder)</h3>
          <p>
            Add the official date of foundation or the milestone that marks the origin of the town (and who founded it, if applicable).
          </p>
          <ul class="bullets">
            <li><strong>Year:</strong> [YYYY]</li>
            <li><strong>Key detail:</strong> [What happened?]</li>
            <li><strong>Source:</strong> [Where did you verify it?]</li>
          </ul>
        </article>

        <article class="timeline-item">
          <h3>Municipal development (1800s–1900s)</h3>
          <p>
            Add local changes like new roads, growth of the main square, education, parish milestones, farming cycles, or notable community projects.
          </p>
        </article>

        <article class="timeline-item">
          <h3>Modern Arbeláez (2000s–today)</h3>
          <p>
            Today, Arbeláez keeps its rural charm while welcoming visitors interested in nature, gastronomy, crafts and cultural events.
            Add recent initiatives: festivals, tourism routes, community art projects, and cultural programs.
          </p>
        </article>
      </div>
    </section>

    <!-- Heritage -->
    <section id="heritage" class="card" aria-label="Heritage and landmarks">
      <h2>Heritage & landmarks</h2>
      <p class="section-lead">
        The heart of town life often lives around the main square, community meeting points and places of faith and tradition.
      </p>

      <div class="grid">
        <article class="feature">
          <h3>Main square & daily life</h3>
          <p>
            A place to meet, talk, shop locally and experience the town’s rhythm. Add a short story about the square and its role in community life.
          </p>
        </article>

        <article class="feature">
          <h3>Parish & religious heritage</h3>
          <p>
            Add the name of the church/parish and any important dates or architectural details (only if verified).
          </p>
        </article>

        <article class="feature">
          <h3>Rural landscapes & routes</h3>
          <p>
            Hills, countryside paths and viewpoints are part of Arbeláez’s identity. Add popular walks or scenic spots and how locals use them.
          </p>
        </article>
      </div>
    </section>

    <!-- Traditions -->
    <section id="traditions" class="card" aria-label="Traditions and celebrations">
      <h2>Traditions & celebrations</h2>
      <p class="section-lead">
        Culture stays alive through music, dance, food, faith, storytelling and community gatherings.
      </p>

      <div class="grid">
        <article class="feature">
          <h3>Festivities & community events</h3>
          <p>
            Add your key events here (for example: patron-saint festivities, cultural fairs, local parades, or special celebrations).
          </p>
          <ul class="bullets">
            <li>[Event name] — [Month]</li>
            <li>[Event name] — [Month]</li>
            <li>[Event name] — [Month]</li>
          </ul>
        </article>

        <article class="feature">
          <h3>Gastronomy with roots</h3>
          <p>
            Add typical dishes, local ingredients and why food matters in local identity (family recipes, Sunday meals, festival food, etc.).
          </p>
        </article>

        <article class="feature">
          <h3>Art, murals & local creativity</h3>
          <p>
            Community art is a powerful way to strengthen identity and tourism. Add any local projects, murals or craft traditions.
          </p>
        </article>
      </div>
    </section>

    <!-- People -->
    <section id="people" class="card" aria-label="Community and everyday life">
      <h2>Community, crafts & everyday life</h2>
      <p>
        The story of Arbeláez is also the story of its people: families, farmers, artisans, cooks, musicians, students and entrepreneurs.
        Add short profiles or “community highlights” (with permission) to preserve local memory and inspire visitors.
      </p>

      <div class="callout">
        <h3>Want to add your story?</h3>
        <p>
          If you have old photos, local stories, or historical facts you’d like to share, we can include them on this page and credit the source.
        </p>
        <a class="btn btn-secondary" href="<?= $baseUrl ?>/contact/">Contact us</a>
      </div>
    </section>

    <!-- Visit -->
    <section id="visit" class="card" aria-label="Visit Arbeláez">
      <h2>Visit Arbeláez</h2>
      <p class="section-lead">
        Explore local businesses, nature and community experiences through arbelaez.com.co.
      </p>

      <div class="grid">
        <a class="tile" href="<?= $baseUrl ?>/view/alojamiento/">
          <h3>Accommodation</h3>
          <p>Find places to stay and enjoy a calm countryside atmosphere.</p>
        </a>

        <a class="tile" href="<?= $baseUrl ?>/view/gastronomia/">
          <h3>Food & coffee</h3>
          <p>Discover local cafés, restaurants and traditional flavours.</p>
        </a>

        <a class="tile" href="<?= $baseUrl ?>/view/artesanias/">
          <h3>Crafts</h3>
          <p>Support artisans and bring home something made with love.</p>
        </a>
      </div>
    </section>

    <!-- FAQ (opcional, SEO-friendly) -->
    <section class="card faq" aria-label="Frequently asked questions">
      <h2>FAQ</h2>

      <details class="faq-item">
        <summary>Where is Arbeláez located?</summary>
        <p>Arbeláez is in Cundinamarca, Colombia, within the broader Andean region and near Bogotá.</p>
      </details>

      <details class="faq-item">
        <summary>What can I do in Arbeláez?</summary>
        <p>You can enjoy nature, local gastronomy, crafts, and community events. Explore categories on arbelaez.com.co.</p>
      </details>

      <details class="faq-item">
        <summary>Can I contribute historical information?</summary>
        <p>Yes. If you have verified dates, old photos or local stories, we can add them and credit the source.</p>
      </details>
    </section>

    <p class="backtop">
      <a href="#main" aria-label="Back to top">↑ Back to top</a>
    </p>
  </main>

  <!-- Footer -->
  <footer class="history-footer" role="contentinfo">
    <div class="history-footer__inner">
      <div class="footer-brand">
        <img src="../../view/home/img/logo_pw.png" alt="arbelaez.com.co logo" width="40" height="40" loading="lazy">
        <div>
          <strong>arbelaez.com.co</strong>
          <p>Digital showcase to promote tourism and local businesses in Arbeláez.</p>
        </div>
      </div>

      <div class="footer-links">
        <a href="https://www.facebook.com/profile.php?id=61580302286594" target="_blank" rel="noopener">Facebook</a>
        <a href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener">Instagram</a>
        <a href="https://www.tiktok.com/@arbelaez_turismo" target="_blank" rel="noopener">TikTok</a>
      </div>

      <p class="footer-copy">© <?= date("Y"); ?> arbelaez.com.co • All rights reserved.</p>
    </div>
  </footer>

  <!-- Mini JS (suave: scroll a anchors) -->
  <script>
    (function(){
      const links = document.querySelectorAll('a[href^="#"]');
      links.forEach(a=>{
        a.addEventListener('click', (e)=>{
          const id = a.getAttribute('href');
          if(!id || id === '#') return;
          const el = document.querySelector(id);
          if(!el) return;
          e.preventDefault();
          el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      });
    })();
  </script>
</body>
</html>
