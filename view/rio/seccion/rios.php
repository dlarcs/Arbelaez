<?php
$cssTime = filemtime('../../view/rio/seccion/rios.css');
$jsTime = filemtime('../../view/rio/seccion/rios.js');
?>
<link rel="stylesheet" href="../../view/rio/seccion/rios.css?v=<?= $cssTime ?>">

<main class="page">
    <header class="top">
      <h1>Ríos de Arbeláez</h1>
      <p>Descubre quebradas, ríos y pozos naturales para caminar, respirar y desconectar.</p>
    </header>

    <section class="grid" aria-label="Listado de ríos y quebradas">
      <!-- Card 1 -->
      <article class="card" style="--img:url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=60');">
        <div class="card__media">
          <span class="pill">Río</span>

          <div class="card__overlay">
            <h2 class="card__title">Río La Lejía</h2>

            <p class="card__meta">
              <span class="meta__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18">
                  <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
                </svg>
              </span>
              Zona rural de Arbeláez
            </p>
          </div>
        </div>

        <div class="card__body">
          <p class="card__desc">
            Aguas frescas y paisaje verde para un plan tranquilo. Ideal para caminar, hacer fotos y descansar cerca del bosque.
          </p>

          <a class="card__link" href="https://maps.app.goo.gl/gREdsmYF6EWgWDZv7">
            <span class="link__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
              </svg>
            </span>
            Cómo llegar
          </a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="card" style="--img:url('https://images.unsplash.com/photo-1501854140801-50d01698950b?auto=format&fit=crop&w=1600&q=60');">
        <div class="card__media">
          <span class="pill">Río</span>
          <div class="card__overlay">
            <h2 class="card__title">Quebrada La Honda</h2>
            <p class="card__meta">
              <span class="meta__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18">
                  <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
                </svg>
              </span>
              Reserva natural de Arbeláez
            </p>
          </div>
        </div>

        <div class="card__body">
          <p class="card__desc">
            Senderos ecológicos y pozos naturales. Perfecta para un plan de caminata y conexión con la naturaleza.
          </p>
          <a class="card__link" href="#mapa-la-honda">
            <span class="link__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
              </svg>
            </span>
            <a href="https://maps.app.goo.gl/ZkpxvgDqtPhsqZdM8">Cómo llegar</a>
          </a>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="card" style="--img:url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1600&q=60');">
        <div class="card__media">
          <span class="pill">Río</span>
          <div class="card__overlay">
            <h2 class="card__title">Puente Colgante</h2>
            <p class="card__meta">
              <span class="meta__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18">
                  <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
                </svg>
              </span>
              Vía San Antonio, sector El Arenal
            </p>
          </div>
        </div>

        <div class="card__body">
          <p class="card__desc">
            Un paso histórico rodeado de verde. Un lugar emblemático donde el agua acompaña el camino entre estructuras antiguas.
          </p>
          <a class="card__link" href="https://maps.app.goo.gl/jGjucvHzjyWFDGRQ6">
            <span class="link__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
              </svg>
            </span>
            Cómo llegar
          </a>
        </div>
      </article>

      <!-- Duplica más cards aquí -->
    </section>
  </main>

<script src="../../view/rio/seccion/rios.js?v=<?= $jsTime ?>" type="text/javascript"></script>
