<?php
$cssTime = filemtime('../../view/home/Rifa/rifa.css');
$jsTime  = filemtime('../../view/home/Rifa/rifa.js');
?>
<link rel="stylesheet" href="../../view/home/Rifa/rifa.css?v=<?= $cssTime ?>">

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rifa Solidaria — Arbeláez se llena de color</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <header class="topbar" role="banner">
    <div class="container topbar__inner">
      <div class="brand">
        <span class="brand__badge">Rifa Solidaria</span>
        <span class="brand__title">Arbeláez se llena de color</span>
      </div>

      <div class="topbar__actions">
        <a class="btn btn--ghost" href="#puntos-venta">Dónde comprar</a>
        <a class="btn btn--primary" href="https://wa.me/573138846378" target="_blank" rel="noopener">
          Contactar por WhatsApp
        </a>
      </div>
    </div>
  </header>

  <main class="main" role="main">
    <section class="hero">
      <div class="container hero__grid">
        <div class="hero__copy">
          <h1 class="h1">Arbeláez se llena de color</h1>
          <p class="lead">
            Una rifa para <strong>recaudar fondos</strong> y <strong>pintar las fachadas</strong> de los negocios.
            Tu apoyo ayuda a embellecer el pueblo y a impulsar el turismo local.
          </p>

          <div class="quick">
            <div class="quick__item">
              <span class="quick__label">Valor boleta</span>
              <span class="quick__value">$10.000 COP</span>
            </div>
            <div class="quick__item">
              <span class="quick__label">Se juega con</span>
              <span class="quick__value">Últimas 3 cifras — Lotería de Boyacá</span>
            </div>
            <div class="quick__item">
              <span class="quick__label">Fechas sorteo</span>
              <span class="quick__value">18 abril / 25 abril</span>
            </div>
          </div>

          <div class="cta">
            <a class="btn btn--primary" href="#puntos-venta">Ver puntos de venta</a>
            <a class="btn btn--ghost" href="#como-funciona">Cómo funciona</a>
          </div>

          <p class="note">
            Dudas o compras: <a href="tel:+573138846378">313 884 6378</a> ·
            <a href="https://wa.me/573138846378" target="_blank" rel="noopener">WhatsApp</a>
          </p>
        </div>

        <aside class="hero__card" aria-label="Resumen de la rifa">
          <div class="card">
            <h2 class="h2">Resumen rápido</h2>
            <ul class="list">
              <li><strong>Boleta:</strong> 3 cifras</li>
              <li><strong>1 ganador por fecha</strong></li>
              <li><strong>El ganador elige</strong> un premio</li>
              <li><strong>Premio elegido = premio eliminado</strong> (no se repite)</li>
            </ul>
            <div class="card__footer">
              <span class="muted">Aplica términos y condiciones</span>
            </div>
          </div>
        </aside>
      </div>
    </section>

    <section id="como-funciona" class="section">
      <div class="container">
        <h2 class="h2">Cómo funciona</h2>

        <div class="steps">
          <article class="step">
            <h3 class="h3">1) Compra tu boleta</h3>
            <p>Consíguela en los puntos de venta autorizados o escribiendo al contacto.</p>
          </article>

          <article class="step">
            <h3 class="h3">2) Juego con 3 cifras</h3>
            <p>Se juega con las <strong>últimas 3 cifras</strong> de la <strong>Lotería de Boyacá</strong>.</p>
          </article>

          <article class="step">
            <h3 class="h3">3) Dos fechas, dos oportunidades</h3>
            <p>Fechas del sorteo: <strong>18 de abril</strong> y <strong>25 de abril</strong> (1 ganador por fecha).</p>
          </article>

          <article class="step">
            <h3 class="h3">4) Elección de premio</h3>
            <p>El ganador <strong>elige un premio</strong> y ese premio queda <strong>eliminado</strong> para el siguiente sorteo.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--soft">
      <div class="container">
        <h2 class="h2">Premios (4)</h2>

        <div class="prizes">
          <article class="prize">
            <h3 class="h3">Se pinta la fachada</h3>
            <p>Mural de <strong>2 m²</strong> en fachada (primer piso).</p>
          </article>

          <article class="prize">
            <h3 class="h3">Tablet Lenovo</h3>
            <p>Una tablet para estudio, trabajo o entretenimiento.</p>
          </article>

          <article class="prize">
            <h3 class="h3">Bonos $200.000</h3>
            <p>Redimibles en negocios participantes.</p>
          </article>

          <article class="prize">
            <h3 class="h3">Página en arbelaez.com.co</h3>
            <p>Presencia digital por <strong>6 meses</strong> en el portal.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="puntos-venta" class="section">
      <div class="container">
        <div class="section__head">
          <h2 class="h2">Puntos de venta</h2>
          <p class="muted">Compra tu boleta en estos negocios (o escribe al <strong>313 884 6378</strong>).</p>
        </div>

        <div class="shops">
          <article class="shop">
            <h3 class="h3">Cachorros L&amp;C</h3>
            <p class="muted">Punto de venta autorizado.</p>
            <div class="shop__meta">
              <span class="tag">Boletas disponibles</span>
            </div>
          </article>

          <article class="shop">
            <h3 class="h3">Kalu</h3>
            <p class="muted">Punto de venta autorizado.</p>
            <div class="shop__meta">
              <span class="tag">Boletas disponibles</span>
            </div>
          </article>

          <article class="shop">
            <h3 class="h3">Juntanza</h3>
            <p class="muted">Punto de venta autorizado.</p>
            <div class="shop__meta">
              <span class="tag">Boletas disponibles</span>
            </div>
          </article>

          <!-- Ejemplos: reemplaza por negocios reales cuando quieras -->
          <article class="shop shop--example">
            <h3 class="h3">Panadería La Esquina <span class="mini">(ejemplo)</span></h3>
            <p class="muted">Ejemplo de punto de venta — reemplazar por un negocio real.</p>
            <div class="shop__meta">
              <span class="tag tag--ghost">Ejemplo</span>
            </div>
          </article>

          <article class="shop shop--example">
            <h3 class="h3">Café Jardín <span class="mini">(ejemplo)</span></h3>
            <p class="muted">Ejemplo de punto de venta — reemplazar por un negocio real.</p>
            <div class="shop__meta">
              <span class="tag tag--ghost">Ejemplo</span>
            </div>
          </article>
        </div>

        <div class="contact">
          <div class="contact__box">
            <h3 class="h3">¿Quieres comprar una boleta?</h3>
            <p>
              Escríbenos o llama:
              <strong><a href="tel:+573138846378">313 884 6378</a></strong>
            </p>
            <div class="contact__actions">
              <a class="btn btn--primary" href="https://wa.me/573138846378" target="_blank" rel="noopener">WhatsApp</a>
              <a class="btn btn--ghost" href="tel:+573138846378">Llamar</a>
            </div>
            <p class="fine">Aplica términos y condiciones.</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" role="contentinfo">
      <div class="container footer__inner">
        <p class="muted">Más info: visita <strong>arbelaez.com.co</strong> · Rifa solidaria — Arbeláez se llena de color</p>
      </div>
    </footer>
  </main>

</body>
</html>


<script src="../../view/home/Rifa/rifa.js?v=<?= $jsTime ?>" type="text/javascript" ></script>
