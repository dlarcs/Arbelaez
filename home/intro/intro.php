<?php
$cssPath = '../../home/intro/intro.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

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
            <span>7 minutos lectura</span>
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

    <!-- TikTok -->
    <!-- <a class="post-share__btn" href="#" aria-label="TikTok" title="TikTok">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M16.5 2c.4 3 2.4 5 5.5 5v3c-1.9 0-3.6-.6-5-1.7V16c0 3.3-2.7 6-6 6s-6-2.7-6-6 2.7-6 6-6c.4 0 .9.05 1.3.15V13.3c-.4-.2-.8-.3-1.3-.3-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3V2h2.5Z"/>
      </svg>
    </a> -->
  </nav>

    </div>

  </div>

</header>
