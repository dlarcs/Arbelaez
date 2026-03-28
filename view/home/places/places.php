<?php
$cssPath = '../../view/home/places/places.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

$jsPath  = '../../view/home/places/places.js';
$jsTime  = @filemtime($jsPath) ?: time(); // fallback si falta el archivo
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="places">
  <header class="top">
    <div class="top__inner">
      <h1>Categorías</h1>

      <nav class="nav" aria-label="Ir a categoría">
        <a href="../../view/alojamiento/index.php">Alojamientos</a>
        <a href="../../view/artesanias/index.php">Artesanías</a>
        <a href="../../view/gastronomia/index.php">Gastronomía</a>
        <a href="../../view/festividades/index.php">Festividades</a>
      </nav>
    </div>
  </header>

  <main class="grid">
  <a href="../../view/alojamiento/index.php">
    <section class="cat alojamientos" id="alojamientos" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Alojamientos</h2>
        <p>Opciones cálidas y cómodas para descansar.</p>
        <a class="btn" href="../../view/alojamiento/index.php">Ver más</a>
      </div>
    </section>
  </a>

  <a href="../../view/artesanias/index.php">
    <section class="cat artesanias" id="artesanias" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Artesanías</h2>
        <p>Piezas únicas hechas a mano con identidad.</p>
        <a class="btn" href="../../view/artesanias/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../view/gastronomia/index.php">
    <section class="cat gastronomia" id="gastronomia" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Gastronomía</h2>
        <p>Sabores locales: platos, cafés y recetas.</p>
        <a class="btn" href="../../view/gastronomia/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../view/festividades/index.php">
    <section class="cat cultura" id="cultura" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Festividades</h2>
        <p>Tradiciones, eventos, historia y experiencias.</p>
        <a class="btn" href="../../view/festividades/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../view/rio/index.php">
    <section class="cat rio" id="rio" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Zonas de agua</h2>
        <p>Ríos, pozos, quebradas y puentes</p>
        <a class="btn" href="../../view/rio/index.php">Ver más</a>
      </div>
    </section>
  </a>

  </main>
</section>



<script src="<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
