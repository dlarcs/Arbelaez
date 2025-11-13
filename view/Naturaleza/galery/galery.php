<?php
$cssTime = filemtime('../../view/Naturaleza/galery/galery.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/Naturaleza/galery/galery.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/Naturaleza/galery/galery.css?v=<?= $cssTime ?>">


<!-- ===== Hero (ríos) ===== -->
<section class="seccion_img" aria-label="Portada ríos de Arbeláez">
  <div class="hero_panel">
    <h1>Ríos y quebradas de Arbeláez</h1>
    <p>Explora el Sumapaz, sus afluentes y quebradas: naturaleza viva para caminar, contemplar y cuidar.</p>
  </div>
</section>

<!-- ===== Directorio ===== -->
<section class="section_restos" aria-labelledby="rios-title">
  <header class="section_head">
    <h1 id="rios-title">Ríos y quebradas</h1>
    <p class="section_sub">Conoce los ríos, quebradas y aventuras de Arbeláez.</p>
  </header>

  <!-- Filtros -->
  <nav class="restos_filters" role="toolbar" aria-label="Filtrar por tipo de recurso hídrico">
    <button class="filter_btn is-active" data-filter="all" aria-pressed="true">Todos</button>
    <button class="filter_btn" data-filter="Rio" aria-pressed="false">Ríos</button>
    <button class="filter_btn" data-filter="Quebrada" aria-pressed="false">Quebradas</button>
  </nav>

  <!-- Grid -->
  <div class="restos_grid">

    <!-- Río Sumapaz -->
    <article class="resto_card Rio" itemscope itemtype="https://schema.org/RiverBodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="https://maps.app.goo.gl/MvTLAF2zd8WK1ibV6" class="resto_link" target="_blank" rel="noopener">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/sumapaz.jpg"
               alt="Panorámica del Río Sumapaz en la provincia del Sumapaz"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Río Sumapaz</h3>
        </header>
        <p class="resto_desc" itemprop="description">
          Afluente mayor del Magdalena; nace en el Páramo de Sumapaz. Paisajes andinos, aire puro y miradores naturales.
        </p>
        <div class="resto_meta">
          <a class="resto_btn" href="https://maps.app.goo.gl/MvTLAF2zd8WK1ibV6" target="_blank" rel="noopener">Cómo llegar</a>
        </div>
      </div>
    </article>

    <!-- Río Cuja -->
    <article class="resto_card Rio" itemscope itemtype="https://schema.org/RiverBodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="https://maps.app.goo.gl/GumVXTtkiHcAKDFMA" class="resto_link" target="_blank" rel="noopener">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/cuja.jpg"
               alt="Aguas del Río Cuja entre montañas cerca de Arbeláez"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Río Cuja</h3>
        </header>
        <p class="resto_desc" itemprop="description">
          Subcuenca que cruza Fusagasugá, Pasca y Arbeláez; aguas claras y paraderos rurales para descansar y contemplar.
        </p>
        <div class="resto_meta">
          <a class="resto_btn" href="https://maps.app.goo.gl/GumVXTtkiHcAKDFMA" target="_blank" rel="noopener">Cómo llegar</a>
        </div>
      </div>
    </article>

    <!-- Río Negro -->
    <article class="resto_card Rio" itemscope itemtype="https://schema.org/RiverBodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="https://maps.app.goo.gl/7a9AGSbKWoA7QLuX6" class="resto_link" target="_blank" rel="noopener">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/rionegr Arb.jpg"
               alt="Orilla arbolada del Río Negro en zona rural de Arbeláez"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Río Negro</h3>
        </header>
        <p class="resto_desc" itemprop="description">
          Eje hídrico local con paisajes verdes; perfecto para planes tranquilos junto al agua.
        </p>
        <div class="resto_meta">
          <a class="resto_btn" href="https://maps.app.goo.gl/7a9AGSbKWoA7QLuX6" target="_blank" rel="noopener">Cómo llegar</a>
        </div>
      </div>
    </article>

    <!-- Quebradas (tributarias del Río Negro) -->
    <article class="resto_card Quebrada" itemscope itemtype="https://schema.org/BodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="https://maps.app.goo.gl/8EaA36d6p7pdfotW9" class="resto_link" target="_blank" rel="noopener">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/q-naranjos.jpg"
               alt="Quebrada Los Naranjos, aguas claras entre roca y bosque"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Quebrada Los Naranjos</h3>
        </header>
        <p class="resto_desc" itemprop="description">Aguas frías y cristalinas; ideal para conectar con el bosque húmedo andino.</p>
        <div class="resto_meta">
          <a class="resto_btn" href="https://maps.app.goo.gl/8EaA36d6p7pdfotW9" target="_blank" rel="noopener">Cómo llegar</a>
        </div>
      </div>
    </article>

    <article class="resto_card Quebrada" itemscope itemtype="https://schema.org/BodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="#" class="resto_link">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/q-gallega.jpg"
               alt="Quebrada La Gallega en zona rural de Arbeláez"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Quebrada La Gallega</h3>
        </header>
        <p class="resto_desc" itemprop="description">Pequeños saltos y pozas; paisaje ideal para fotografía y caminata suave.</p>
      </div>
    </article>

    <article class="resto_card Quebrada" itemscope itemtype="https://schema.org/BodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="#" class="resto_link">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/q-honda.jpg"
               alt="Quebrada La Honda con vegetación ribereña"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Quebrada La Honda</h3>
        </header>
        <p class="resto_desc" itemprop="description">Tramo sombreado, sonido de agua constante y descanso natural.</p>
      </div>
    </article>

    <article class="resto_card Quebrada" itemscope itemtype="https://schema.org/BodyOfWater">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="#" class="resto_link">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../img/q-lejia.jpg"
               alt="Quebrada La Lejía con rocas y vegetación"
               loading="lazy" decoding="async">
        </figure>
      </a>
      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">Quebrada La Lejía</h3>
        </header>
        <p class="resto_desc" itemprop="description">Afluente limpia y serena, perfecta para pasar el rato escuchando el agua.</p>
      </div>
    </article>

  </div>
</section>



<script src="../../view/Naturaleza/galery/galery.js?v=<?= $jsTime ?>" type="text/javascript"></script>
