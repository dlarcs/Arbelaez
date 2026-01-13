<?php
$cssPath = '../../view/home/intro/intro.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

?>

<header class="post-header">
  <div class="post-header__inner">

    <h1 class="post-title">Tradición viva en cada rincón</h1>

    <div class="post-meta">
      <div class="post-author">
        <img
          class="post-author__avatar"
          src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=60"
          alt="Avatar del autor"
        />
        <div class="post-author__text">
          <div class="post-author__name">Equipo Pueblo</div>
          <div class="post-author__sub">
            <time datetime="2025-01-20">20 de enero 2025</time>
            <span class="dot">•</span>
            <span>7 minutos lectura</span>
          </div>
        </div>
      </div>

      <nav class="post-share" aria-label="Compartir">
        <a class="post-share__btn" href="#" aria-label="Copiar enlace" title="Copiar enlace">
          <!-- link -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M10.59 13.41a1 1 0 0 1 0-1.41l3.17-3.17a3 3 0 1 1 4.24 4.24l-1.59 1.59a3 3 0 0 1-4.24 0 .999.999 0 1 1 1.41-1.41 1 1 0 0 0 1.41 0l1.59-1.59a1 1 0 1 0-1.41-1.41l-3.17 3.17a1 1 0 0 1-1.41 0Z"/>
            <path d="M13.41 10.59a1 1 0 0 1 0 1.41l-3.17 3.17a3 3 0 1 1-4.24-4.24l1.59-1.59a3 3 0 0 1 4.24 0 .999.999 0 1 1-1.41 1.41 1 1 0 0 0-1.41 0L7.42 12.34a1 1 0 1 0 1.41 1.41l3.17-3.17a1 1 0 0 1 1.41 0Z"/>
          </svg>
        </a>

        <a class="post-share__btn" href="#" aria-label="Compartir en LinkedIn" title="LinkedIn">
          <!-- linkedin -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M6.94 6.5A2.19 2.19 0 1 1 7 2.12a2.19 2.19 0 0 1-.06 4.38ZM5.5 21h2.9V8.5H5.5V21ZM10.75 8.5H13.5v1.7h.04c.38-.72 1.3-1.48 2.68-1.48 2.86 0 3.39 1.88 3.39 4.33V21h-2.9v-7.1c0-1.69-.03-3.86-2.35-3.86-2.35 0-2.71 1.84-2.71 3.74V21h-2.9V8.5Z"/>
          </svg>
        </a>

        <a class="post-share__btn" href="#" aria-label="Compartir en X" title="X">
          <!-- X -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M18.9 2H22l-6.77 7.73L23 22h-6.5l-5.1-7.9L4.6 22H1.5l7.25-8.28L1 2h6.65l4.62 7.05L18.9 2Zm-1.14 18h1.72L6.7 3.9H4.86L17.76 20Z"/>
          </svg>
        </a>

        <a class="post-share__btn" href="#" aria-label="Compartir en Facebook" title="Facebook">
          <!-- facebook -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M13.5 22v-8h2.7l.4-3H13.5V9.1c0-.87.24-1.47 1.5-1.47h1.6V4.95c-.28-.04-1.26-.12-2.4-.12-2.37 0-4 1.45-4 4.12V11H7.6v3h2.6v8h3.3Z"/>
          </svg>
        </a>
      </nav>
    </div>

  </div>
</header>
