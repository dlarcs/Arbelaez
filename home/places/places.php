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
        <a href="../alojamiento/index.php">Alojamientos</a>
        <a href="../artesanias/index.php">Artesanías</a>
        <a href="../gastronomia/index.php">Gastronomía</a>
        <a href="../festividades/index.php">Festividades</a>
        <a href="../rio/index.php">Zonas de agua</a>
      </nav>
    </div>
  </header>

  <main class="grid">
  <a href="../../alojamiento/index.php">
    <section class="cat alojamientos" id="alojamientos" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Alojamientos</h2>
        <p>Opciones cálidas y cómodas para descansar.</p>
        <a class="btn" href="../../alojamiento/index.php">Ver más</a>
      </div>
    </section>
  </a>

  <a href="../../artesanias/index.php">
    <section class="cat artesanias" id="artesanias" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Artesanías</h2>
        <p>Piezas únicas hechas a mano con identidad.</p>
        <a class="btn" href="../../artesanias/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../gastronomia/index.php">
    <section class="cat gastronomia" id="gastronomia" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Gastronomía</h2>
        <p>Sabores locales: platos, cafés y recetas.</p>
        <a class="btn" href="../../gastronomia/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../festividades/index.php">
    <section class="cat cultura" id="cultura" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Festividades</h2>
        <p>Tradiciones, eventos, historia y experiencias.</p>
        <a class="btn" href="../../festividades/index.php">Ver más</a>
      </div>
    </section>
  </a>
  <a href="../../rio/index.php">
    <section class="cat rio" id="cultura" data-parallax data-bg="500" data-fg="300">
      <div class="cat__content">
        <h2>Zonas de agua</h2>
        <p>Caminatas ecologicas paz y tranquilidad</p>
        <a class="btn" href="../../rio/index.php">Ver más</a>
      </div>
    </section>
  </a>
  </main>
</section>



<script src="<?= $jsPath ?>?v=<?= $jsTime ?>" defer></script>
