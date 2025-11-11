<?php
$cssPath = '../../view/home/places/places.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section id="places" class="section_places" aria-labelledby="places-title">
  <h2 id="places-title">Qué hacer en Arbeláez</h2>
  <p>Lo mejor de Arbeláez se vive, se siente y se recuerda.</p>

  <div class="img_galery_places">
    <a href="../../view/artesanias/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Artesanías</p>
        <img
          src="../../view/artesanias/Artesanias_Martha_E/img/manillas2.jpeg"
          alt="Artesanías y recuerdos hechos a mano"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places">
            <h3>Lo mejor en artesanías y recuerdos</h3>
          </div>
        </div>
      </article>
    </a>

    <a href="../../view/alojamiento/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Alojamiento</p>
        <img
          src="../../view/alojamiento/IsraHousSuites/img/exterior.jpeg"
          alt="Opciones de alojamiento para descansar en Arbeláez"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Elige dónde descansar</h3></div>
        </div>
      </article>
    </a>

    <a href="../../view/gastronomia/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Gastronomía</p>
        <img
          src="../../view/gastronomia/kapaLuna360/img/coctel9.jpg"
          alt="Gastronomía local: cocteles y platos típicos"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Disfruta lo mejor de Arbeláez</h3></div>
        </div>
      </article>
    </a>

    <a href="../../" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Naturaleza</p>
        <img
          src="../../view/home/img/flor.jpg"
          alt="Naturaleza: ríos, flora y paisajes"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Ríos, plantas y más</h3></div>
        </div>
      </article>
    </a>

    <!-- <a href="../../view/portafolio/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Turismo</p>
        <img
          src="../../view/home/img/pavoreal.jpeg"
          alt="Turismo y experiencias de aventura"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Atrévete a explorar</h3></div>
        </div>
      </article>
    </a> -->

    <!-- <a href="../../view/portafolio/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Alcaldía</p>
        <img
          src="../../view/home/img/lugar3.jpg"
          alt="Información oficial y proyectos de la Alcaldía"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Conoce proyectos y servicios</h3></div>
        </div>
      </article>
    </a> -->

    <!-- <a href="../../view/Parroquia/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Parroquia </p>
        <img
          src="../../view/home/img/lugar2.jpg"
          alt="Parroquia Inmaculada Concepción de Arbeláez"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Historia y comunidad</h3></div>
        </div>
      </article>
    </a> -->
    <a href="../../" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Asociación Juntanza de Mujeres</p>
        <img
          src="../../view/home/img/juntanza.jpeg"
          alt="Asociación de juntanza de mujeres"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Comunidad de Mujeres</h3></div>
        </div>
      </article>
    </a>
  </div>
</section>
