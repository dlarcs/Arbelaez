<?php
$cssTime = filemtime('../../beto/home/slider/slider.css');
$jsTime  = filemtime('../../beto/home/slider/slider.js');
?>
<link rel="stylesheet" href="../../beto/home/slider/slider.css?v=<?= $cssTime ?>">
<section class="home-slider" aria-label="Servicios destacados">
  <div class="home-slider__inner">

    <!-- Flecha anterior -->
    <button class="home-slider__arrow home-slider__arrow--prev" type="button" aria-label="Anterior">
      ‹
    </button>

    <div class="home-slider__viewport">
      <div class="home-slider__track">

        <!-- Slide 1: Corte & Acrílico -->
        <article class="home-slide is-active" data-index="0">
          <a href="/corte-acrilico" class="home-slide__media">
            <!-- AJUSTA las rutas de las imágenes -->
            <img src="../../view/home/slider/img/corte-acrilico.jpg"
                 alt="Corte láser y avisos en acrílico" loading="lazy">
          </a>
          <div class="home-slide__overlay">
            <h2>Corte láser & Acrílico</h2>
            <p>Precisión milimétrica para avisos, letras y piezas en acrílico de alto impacto.</p>
            <a href="/corte-acrilico" class="btn-cta home-slide__cta">
              Ver corte & acrílico
            </a>
          </div>
        </article>

        <!-- Slide 2: Vinilos & Decoración -->
        <article class="home-slide" data-index="1">
          <a href="/vinilos-decorativos" class="home-slide__media">
            <img src="../../view/home/slider/img/vinilos.jpg"
                 alt="Vinilos adhesivos y decoración de espacios" loading="lazy">
          </a>
          <div class="home-slide__overlay">
            <h2>Vinilos & Decoración</h2>
            <p>Transforma paredes, vitrinas y espacios con vinilos adhesivos y frosted.</p>
            <a href="/vinilos-decorativos" class="btn-cta home-slide__cta">
              Ver vinilos
            </a>
          </div>
        </article>

        <!-- Slide 3: Gran Formato & Exterior -->
        <article class="home-slide" data-index="2">
          <a href="/gran-formato" class="home-slide__media">
            <img src="../../view/home/slider/img/gran-formato.jpg"
                 alt="Impresión gran formato, vallas y pendones" loading="lazy">
          </a>
          <div class="home-slide__overlay">
            <h2>Gran formato & Exterior</h2>
            <p>Pendones, vallas, microperforado y panaflex listos para exteriores exigentes.</p>
            <a href="/gran-formato" class="btn-cta home-slide__cta">
              Ver gran formato
            </a>
          </div>
        </article>

        <!-- Slide 4: Papelería & Promos -->
        <article class="home-slide" data-index="3">
          <a href="/papeleria-comercial" class="home-slide__media">
            <img src="../../view/home/slider/img/papeleria.jpg"
                 alt="Papelería comercial, tarjetas y volantes" loading="lazy">
          </a>
          <div class="home-slide__overlay">
            <h2>Papelería & Promos</h2>
            <p>Tarjetas, volantes, imanes y todo tu material impreso con línea de marca.</p>
            <a href="/papeleria-comercial" class="btn-cta home-slide__cta">
              Ver papelería
            </a>
          </div>
        </article>

        <!-- Slide 5: Branding Vehicular -->
        <article class="home-slide" data-index="4">
          <a href="/branding-vehicular" class="home-slide__media">
            <img src="../../view/home/slider/img/branding-carros.jpg"
                 alt="Branding para carros y rotulación vehicular" loading="lazy">
          </a>
          <div class="home-slide__overlay">
            <h2>Branding para carros</h2>
            <p>Lleva tu marca a la calle con rotulación y diseño profesional para vehículos.</p>
            <a href="/branding-vehicular" class="btn-cta home-slide__cta">
              Ver branding vehicular
            </a>
          </div>
        </article>

      </div>
    </div>

    <!-- Flecha siguiente -->
    <button class="home-slider__arrow home-slider__arrow--next" type="button" aria-label="Siguiente">
      ›
    </button>
  </div>

  <!-- Puntos -->
  <div class="home-slider__dots" role="tablist" aria-label="Navegación del slider">
    <button class="home-slider__dot is-active" type="button" data-index="0" aria-label="Ir al slide 1"></button>
    <button class="home-slider__dot" type="button" data-index="1" aria-label="Ir al slide 2"></button>
    <button class="home-slider__dot" type="button" data-index="2" aria-label="Ir al slide 3"></button>
    <button class="home-slider__dot" type="button" data-index="3" aria-label="Ir al slide 4"></button>
    <button class="home-slider__dot" type="button" data-index="4" aria-label="Ir al slide 5"></button>
  </div>
</section>

<script src="../../beto/home/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
