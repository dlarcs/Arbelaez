<?php
$cssTime = filemtime('../../view/home/Rifa/rifa.css');
$jsTime  = filemtime('../../view/home/Rifa/rifa.js');
?>
<link rel="stylesheet" href="../../view/home/Rifa/rifa.css?v=<?= $cssTime ?>">
<main class="page" id="rifa">
  <section class="px-slider" id="pxSlider" aria-label="Slider informativo: Arbeláez se llena de color">

    <!-- Parallax background layers -->
    <div class="px-bg" aria-hidden="true">
      <span class="px-photo" id="pxPhoto" aria-hidden="true"></span>

      <span class="px-blob blob-a"></span>
      <span class="px-blob blob-b"></span>
      <span class="px-blob blob-c"></span>
      <span class="px-grid"></span>
    </div>

    <header class="px-head">
      <div class="px-badge">Arbeláez • 2026</div>
      <h1 class="px-title">Arbeláez se llena de color</h1>
      <p class="px-sub">
        Iniciativa comunitaria para embellecer negocios y fortalecer turismo, comercio local y orgullo comunitario.
      </p>
    </header>

    <div class="px-frame" role="group" aria-roledescription="carousel" aria-label="Carrusel">
      <div class="px-viewport">
        <div class="px-track" id="pxTrack">

          <!-- Slide 1 -->
          <article class="px-slide is-active" data-slide aria-label="1 de 5">
            <div class="slide-card">
              <figure class="slide-media">
                <img src="../../view/home/Rifa/img/img.png" alt="Negocios coloridos en Arbeláez">
              </figure>

              <div class="slide-kicker">¿Qué es?</div>
              <h2 class="slide-title">Una iniciativa para embellecer y visibilizar</h2>
              <ul class="slide-list">
                <li>Organiza: <strong>arbelaez.com.co</strong> y aliados locales</li>
                <li>Lugar: Arbeláez (casco urbano y veredas)</li>
                <li>Meta: identidad visual y más visibilidad para negocios participantes</li>
              </ul>
              <div class="slide-meta">
                <span class="pill">Comunidad</span>
                <span class="pill">Turismo</span>
                <span class="pill">Comercio local</span>
              </div>
            </div>
          </article>

          <!-- Slide 2 -->
          <article class="px-slide" data-slide aria-label="2 de 5">
            <div class="slide-card">
              <figure class="slide-media">
                <img src="../../view/home/Rifa/img/img1.png" alt="Rifa solidaria en Arbeláez">
              </figure>

              <div class="slide-kicker">Estructura</div>
              <h2 class="slide-title">2 fases del proyecto</h2>
              <div class="two-cols">
                <div class="col">
                  <div class="col-title">Fase 1</div>
                  <p class="col-text">
                    <strong>Rifa solidaria:</strong> recaudo con venta de boletas y entrega de premios.
                  </p>
                </div>
                <div class="col">
                  <div class="col-title">Fase 2</div>
                  <p class="col-text">
                    <strong>Intervenciones:</strong> murales/pintura de fachadas y/o señalización, financiados con lo recaudado.
                  </p>
                </div>
              </div>
              <div class="slide-meta">
                <span class="pill">Rifa</span>
                <span class="pill">Murales</span>
                <span class="pill">Señalización</span>
              </div>
            </div>
          </article>

          <!-- Slide 3 -->
          <article class="px-slide" data-slide aria-label="3 de 5">
            <div class="slide-card">
              <figure class="slide-media">
                <img src="../../view/home/Rifa/img/img2.png" alt="Fechas de sorteo y boletas">
              </figure>

              <div class="slide-kicker">Fechas y valor</div>
              <h2 class="slide-title">Sorteos + precio de boleta</h2>
              <ul class="slide-list">
                <li>Sorteos: <strong>18 de abril de 2026</strong> y <strong>9 de mayo de 2026</strong></li>
                <li>Valor boleta: <strong>$10.000 COP</strong></li>
                <li>Número ganador: últimas <strong>3 cifras</strong> de la <strong>Lotería de Boyacá</strong></li>
              </ul>
            </div>
          </article>

          <!-- Slide 4 -->
          <article class="px-slide" data-slide aria-label="4 de 5">
            <div class="slide-card">
              <figure class="slide-media">
                <img src="../../view/home/Rifa/img/img3.png" alt="Premios de la rifa">
              </figure>

              <div class="slide-kicker">Premios</div>
              <h2 class="slide-title">4 premios (se eliminan al elegirse)</h2>
              <ul class="slide-list">
                <li><strong>Mural</strong> / pintura de fachada hasta <strong>2 m²</strong> (primer piso)</li>
                <li><strong>Tablet Lenovo</strong> (según disponibilidad)</li>
                <li><strong>Bono</strong> por <strong>$300.000 COP</strong> (redimible en establecimientos participantes)</li>
                <li><strong>Página</strong> en arbelaez.com.co por <strong>6 meses</strong></li>
              </ul>
              <div class="slide-meta">
                <span class="pill">1 ganador por fecha</span>
                <span class="pill">Premio elegido = eliminado</span>
              </div>
            </div>
          </article>

          <!-- Slide 5 -->
          <article class="px-slide" data-slide aria-label="5 de 5">
            <div class="slide-card">
              <figure class="slide-media">
                <img src="../../view/home/Rifa/img/img5.png" alt="Apoya la iniciativa y participa">
              </figure>

              <div class="slide-kicker">Participa</div>
              <h2 class="slide-title">Apoya el arte local y gana premios</h2>
              <ul class="slide-list">
                <li>Compra tu boleta en negocios aliados</li>
                <li>Ayudas a financiar <strong>murales</strong>, <strong>pintura</strong> y <strong>señalización</strong></li>
                <li>Más color = más visibilidad para Arbeláez</li>
              </ul>

              <div class="cta">
                <a class="btn" href="#conocer">Conocer más</a>
                <a class="btn btn-ghost" href="#participar">Cómo participar</a>
              </div>
            </div>
          </article>

        </div>
      </div>

      <!-- Controls -->
      <div class="px-controls">
        <button class="nav-btn" id="btnPrev" type="button" aria-label="Anterior">‹</button>

        <div class="dots" id="pxDots" role="tablist" aria-label="Indicadores"></div>

        <button class="nav-btn" id="btnNext" type="button" aria-label="Siguiente">›</button>
      </div>

      <div class="px-progress" aria-hidden="true">
        <span class="px-bar" id="pxBar"></span>
      </div>
    </div>
  </section>
</main>
<script src="../../view/home/Rifa/rifa.js?v=<?= $jsTime ?>" type="text/javascript" ></script>
