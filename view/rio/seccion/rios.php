<?php
$cssTime = filemtime('../../view/rio/seccion/rios.css');
$jsTime = filemtime('../../view/rio/seccion/rios.js');
?>
<link rel="stylesheet" href="../../view/rio/seccion/rios.css?v=<?= $cssTime ?>">

<main class="page">
  <header class="top">
    <h1>Ríos de Arbeláez</h1>
    <p>Descubre quebradas, ríos, puentes y pozos naturales para caminar, respirar y desconectar.</p>
  </header>

  <section class="grid" aria-label="Listado de ríos y quebradas">

    <article class="card" style="--img:url('../../../view/rio/img/batan.png');">
      <div class="card__media">
        <span class="pill">Río</span>
        <div class="card__overlay">
          <h2 class="card__title">Batan</h2>
          <p class="card__meta">
            <span class="meta__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
              </svg>
            </span>
            Vía Fusagasuga Arbeláez
          </p>
        </div>
      </div>

      <div class="card__body">
        <p class="card__desc">
          Entrada a  Arbeláez donde el río y el paisaje crean un ambiente fresco y tranquilo. Ideal para detenerse, disfrutar del entorno y conectar con la historia natural del lugar.
        </p>
        <a class="card__link" href="https://maps.app.goo.gl/qF1F6vZHztiu4Wvj6">
          <span class="link__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18">
              <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
            </svg>
          </span>
          Cómo llegar
        </a>
      </div>
    </article>

    <article class="card" style="--img:url('../../../view/rio/img/lejia.jpg');">
      <div class="card__media">
        <span class="pill">Río</span>
        <div class="card__overlay">
          <h2 class="card__title">La Lejía</h2>
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
          Un río de aguas frescas y entorno verde que invita al descanso y a la contemplación. Ideal para disfrutar de una caminata tranquila, tomar fotografías y respirar el aire puro del campo.
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


    <article class="card" style="--img:url('../../../view/rio/img/puente_colgante.jpeg');">
      <div class="card__media">
        <span class="pill">Puente</span>
        <div class="card__overlay">
          <h2 class="card__title">Colgante</h2>
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
          Un paso emblemático rodeado de naturaleza, perfecto para apreciar el paisaje y el recorrido del agua en esta zona de Arbeláez. Un sitio con encanto rural y gran valor visual para visitantes y caminantes.
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


    <article class="card" style="--img:url('../../../view/rio/img/honda.jpeg');">
      <div class="card__media">
        <span class="pill">Quebrada</span>
        <div class="card__overlay">
          <h2 class="card__title">La Honda</h2>
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
          Una quebrada rodeada de naturaleza y senderos ecológicos, perfecta para quienes buscan una experiencia fresca, serena y cercana al agua. Un lugar ideal para caminar, explorar y desconectarse.
        </p>
        <a class="card__link" href="https://maps.app.goo.gl/ZkpxvgDqtPhsqZdM8">
          <span class="link__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18">
              <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
            </svg>
          </span>
          Cómo llegar
        </a>
      </div>
    </article>

    <article class="card" style="--img:url('../../../view/rio/img/michu.png');">
      <div class="card__media">
        <span class="pill">Quebrada</span>
        <div class="card__overlay">
          <h2 class="card__title">Santa Lucía</h2>
          <p class="card__meta">
            <span class="meta__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
              </svg>
            </span>
            Reserva natural de Arbeláez, entrada por el Michu.
          </p>
        </div>
      </div>

      <div class="card__body">
        <p class="card__desc">
          Una quebrada de ambiente natural y tranquilo, ideal para quienes disfrutan de los senderos, la vegetación y el sonido del agua. Un espacio perfecto para relajarse y vivir un plan ecológico.
        </p>
        <a class="card__link" href="https://maps.app.goo.gl/ou248kUosKcpVBh76">
          <span class="link__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18">
              <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
            </svg>
          </span>
          Cómo llegar
        </a>
      </div>
    </article>

    <article class="card" style="--img:url('../../../view/rio/img/michu.png');">
      <div class="card__media">
        <span class="pill">Puente</span>
        <div class="card__overlay">
          <h2 class="card__title">Rio el Guavio</h2>
          <p class="card__meta">
            <span class="meta__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18">
                <path fill="currentColor" d="M12 2c-3.9 0-7 3.1-7 7 0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
              </svg>
            </span>
            Reserva natural de Arbeláez, entrada por el Michu.
          </p>
        </div>
      </div>

      <div class="card__body">
        <p class="card__desc">
          Una quebrada de ambiente natural y tranquilo, ideal para quienes disfrutan de los senderos, la vegetación y el sonido del agua. Un espacio perfecto para relajarse y vivir un plan ecológico.
        </p>
        <a class="card__link" href="https://maps.app.goo.gl/ou248kUosKcpVBh76">
          <span class="link__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18">
              <path fill="currentColor" d="M12 2l3 7h7l-5.7 4.1L18.5 21 12 16.8 5.5 21l2.2-7.9L2 9h7z"/>
            </svg>
          </span>
          Cómo llegar
        </a>
      </div>
    </article>

  </section>
</main>

<script src="../../view/rio/seccion/rios.js?v=<?= $jsTime ?>" type="text/javascript"></script>
