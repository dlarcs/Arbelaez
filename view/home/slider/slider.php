<?php
$cssTime = filemtime('../../view/home/slider/slider.css');
$jsTime  = filemtime('../../view/home/slider/slider.js');
?>
<link rel="stylesheet" href="../../view/home/slider/slider.css?v=<?= $cssTime ?>">
<section class="slider" aria-roledescription="carrusel" aria-label="Galería destacada">


  <div class="slider__viewport" tabindex="0">
    <div class="slider__track" id="slider-track">
      <!-- Slide 1 -->
      <article id="slide-1" class="slide is-current" aria-roledescription="slide" aria-label="1 de 4">
        <img src="../../view/home/TourBurguer/img/general2.png" alt="Montañas al amanecer">
        <div class="slide__caption">
          <h2>Hasta el 25 Enero 2026</h2>
          <a href="#tourburger"><p>Para mas información da click aqui</p></a>
        </div>
      </article>

      <!-- Slide 2 -->
      <article id="slide-2" class="slide" aria-roledescription="slide" aria-label="2 de 4">
        <img src="../../view/alojamiento/Casa_Kiyari/img/rio3.jpg" alt="Bosque con luz dorada">
        <div class="slide__caption">
          <h2>Explora</h2>
          <p>Paisajes y caminos por descubrir.</p>
        </div>
      </article>

      <!-- Slide 3 -->
      <article id="slide-3" class="slide" aria-roledescription="slide" aria-label="3 de 4">
        <img src="../../view/home/img/lugar4.jpg" alt="Lago tranquilo">
        <div class="slide__caption">
          <h2>Respira</h2>
          <p>Momentos de calma y conexión.</p>
        </div>
      </article>

      <!-- Slide 4 -->
      <article id="slide-4" class="slide" aria-roledescription="slide" aria-label="4 de 4">
        <img src="../../view/home/img/flor1.jpg" alt="Carretera hacia el horizonte">
        <div class="slide__caption">
          <h2>Avanza</h2>
          <p>Tu próxima aventura comienza aquí.</p>
        </div>
      </article>
    </div>
  </div>

  <!-- Controles -->
  <button class="slider__btn slider__btn--prev" type="button" aria-label="Anterior" data-dir="-1">‹</button>
  <button class="slider__btn slider__btn--next" type="button" aria-label="Siguiente" data-dir="1">›</button>

  <!-- Puntos -->
  <div class="slider__dots" role="tablist" aria-label="Selector de diapositivas">
    <button class="dot is-active" role="tab" aria-selected="true" aria-controls="slide-1" data-index="0">
      <span class="sr">Ir a la 1</span>
    </button>
    <button class="dot" role="tab" aria-selected="false" aria-controls="slide-2" data-index="1">
      <span class="sr">Ir a la 2</span>
    </button>
    <button class="dot" role="tab" aria-selected="false" aria-controls="slide-3" data-index="2">
      <span class="sr">Ir a la 3</span>
    </button>
    <button class="dot" role="tab" aria-selected="false" aria-controls="slide-4" data-index="3">
      <span class="sr">Ir a la 4</span>
    </button>
  </div>
</section>
<section class="historia">
  <div class="historia__wrap">
    <p class="historia__kicker">Historia</p>
    <h2 class="historia__title">Un resumen de Arbeláez</h2>

    <div class="historia__card">
      <p>
        Arbeláez es un municipio andino de Cundinamarca, con raíces campesinas y una identidad marcada por la vida rural, las veredas y el trabajo comunitario. A lo largo del tiempo se fue consolidando como un pueblo de tradición agrícola, donde las familias han transmitido oficios, costumbres y formas de convivencia que se reflejan en su gastronomía, sus artesanías, sus celebraciones y su manera de recibir a los visitantes.
      </p>

      <p>
        Su historia también está ligada a la organización de la comunidad: la creación de asociaciones, iniciativas culturales y proyectos locales que buscan cuidar el territorio, fortalecer el sentido de pertenencia y abrir oportunidades para la gente del pueblo. Hoy Arbeláez combina esa herencia tradicional con nuevas propuestas de turismo y cultura, mostrando sus paisajes, su gente y sus experiencias como una “vitrina” para que más personas conozcan lo que el municipio ofrece.
      </p>
    </div>
  </div>
</section>
<article id="slide-1" class="slide is-current" aria-roledescription="slide" aria-label="1 de 4">
  <video class="slide__media"
         src="../../view/home/img/VIDEO.MP4"
         autoplay
         muted
         loop
         playsinline
         preload="metadata">
  </video>

  <div class="slide__caption">
    <h2>Ganador de la mejor hamburguesa de Arbeláez</h2>
    <a href="#tourburger"><p>Don Ciprio</p></a>
  </div>
</article>
<script src="../../view/home/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
