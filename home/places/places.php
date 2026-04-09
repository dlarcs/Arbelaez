<?php
$cssFile = '../../home/places/places.css';
$jsFile  = '../../home/places/places.js';

$cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
$jsTime  = is_file($jsFile) ? filemtime($jsFile) : time();
?>

<link rel="stylesheet" href="../../home/places/places.css?v=<?= $cssTime ?>">

<section class="places">
  <header class="top">
    <div class="top__inner">
      <h1>Categorías</h1>

      <nav class="nav" aria-label="Ir a categoría">
        <a href="../../alojamiento/index.php">Alojamientos</a>
        <a href="../../artesanias/index.php">Artesanías</a>
        <a href="../../gastronomia/index.php">Gastronomía</a>
        <a href="../../festividades/index.php">Festividades</a>
        <a href="../../rio/index.php">Zonas de agua</a>
      </nav>
    </div>
  </header>

  <main class="grid">
    <a class="card-link" href="../../alojamiento/index.php">
      <article class="cat alojamientos" id="alojamientos">
        <div class="cat__overlay"></div>
        <div class="cat__content">
          <h2>Alojamientos</h2>
          <p>Opciones cálidas y cómodas para descansar.</p>
          <span class="btn">Ver más</span>
        </div>
      </article>
    </a>

    <a class="card-link" href="../../artesanias/index.php">
      <article class="cat artesanias" id="artesanias">
        <div class="cat__overlay"></div>
        <div class="cat__content">
          <h2>Artesanías</h2>
          <p>Piezas únicas hechas a mano con identidad.</p>
          <span class="btn">Ver más</span>
        </div>
      </article>
    </a>

    <a class="card-link" href="../../gastronomia/index.php">
      <article class="cat gastronomia" id="gastronomia">
        <div class="cat__overlay"></div>
        <div class="cat__content">
          <h2>Gastronomía</h2>
          <p>Sabores locales: platos, cafés y recetas.</p>
          <span class="btn">Ver más</span>
        </div>
      </article>
    </a>

    <a class="card-link" href="../../festividades/index.php">
      <article class="cat cultura" id="cultura">
        <div class="cat__overlay"></div>
        <div class="cat__content">
          <h2>Festividades</h2>
          <p>Tradiciones, eventos, historia y experiencias.</p>
          <span class="btn">Ver más</span>
        </div>
      </article>
    </a>

    <a class="card-link" href="../../rio/index.php">
      <article class="cat rio" id="rio">
        <div class="cat__overlay"></div>
        <div class="cat__content">
          <h2>Zonas de agua</h2>
          <p>Caminatas ecológicas, paz y tranquilidad.</p>
          <span class="btn">Ver más</span>
        </div>
      </article>
    </a>
  </main>
</section>

<script src="../../home/places/places.js?v=<?= $jsTime ?>" defer></script>
