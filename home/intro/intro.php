<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/intro/intro.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="/home/intro/intro.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<header class="post-header">
  <div class="post-header__inner">
    <h1 class="post-title">Tradición viva en cada rincón</h1>
    <div class="post-meta">
      <div class="post-author">
        <img
          class="post-author__avatar"
          src="../../home/img/logo_pw.png"
          alt="Avatar del autor">
        <div class="post-author__text">
          <div class="post-author__name">Arbeláez Digitalizada</div>
          <div class="post-author__sub">
            <time datetime="2025-01-20">25 de octubre 2025</time>
            <span class="dot">•</span>
            <span><p>
  Descubre Arbeláez, Cundinamarca, un destino turístico cerca de Bogotá ideal para disfrutar de la naturaleza, los ríos, la gastronomía local y el descanso.
  En Arbelaez.com.co encontrarás alojamiento, artesanías, restaurantes y los mejores lugares para visitar en Arbeláez, desde zonas de agua hasta experiencias culturales y actividades al aire libre.
  Explora todo lo que este hermoso municipio tiene para ofrecer y planifica tu próxima visita.
</p></span>
          </div>
        </div>
      </div>
      <nav class="post-share" aria-label="Compartir">
        <!-- Facebook -->
        <a class="post-share__btn" href="https://www.facebook.com/profile.php?id=61580302286594" aria-label="Facebook" title="Facebook">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M13.5 22v-8h2.7l.4-3H13.5V9.1c0-.87.24-1.47 1.5-1.47h1.6V4.95c-.28-.04-1.26-.12-2.4-.12-2.37 0-4 1.45-4 4.12V11H7.6v3h2.6v8h3.3Z"/>
          </svg>
        </a>
        <!-- Instagram -->
        <a class="post-share__btn" href="https://www.instagram.com/arbelaez_turismo/" aria-label="Instagram" title="Instagram">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm10.25 1.75a1 1 0 1 1 0 2 1 1 0 0 1 0-2ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
          </svg>
        </a>
      </nav>
    </div>
  </div>
</header>
