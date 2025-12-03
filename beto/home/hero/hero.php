<?php
$cssTime = filemtime('../../beto/home/hero/hero.css');
?>
<link rel="stylesheet" href="../../beto/home/hero/hero.css?v=<?= $cssTime ?>">

<section class="home-topics" aria-labelledby="topics-title" id="servicios">
  <header class="home-topics__head">
    <p class="home-topics__eyebrow">Servicios</p>
    <h2 class="home-topics__title" id="topics-title">Explora por categoría</h2>
    <p class="home-topics__sub">Todo organizado en 4 páginas para que cotices más rápido.</p>
  </header>

  <div class="topics-grid topics-grid--4">
    <a class="topic-card" href="/servicios/gran-formato/">
      <div class="topic-card__icon">GF</div>
      <h3 class="topic-card__title">Gran formato & exteriores</h3>
      <p class="topic-card__text">Piezas grandes para calle, vitrinas, eventos y marcas visibles.</p>
      <ul class="topic-card__list">
        <li>Impresión gran formato</li>
        <li>Pendones · Panaflex</li>
        <li>Vallas · Microperforado</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card" href="/servicios/vinilos-y-plotter/">
      <div class="topic-card__icon">VP</div>
      <h3 class="topic-card__title">Vinilos, plotter & frosted</h3>
      <p class="topic-card__text">Adhesivos, corte preciso y acabados para interior o exterior.</p>
      <ul class="topic-card__list">
        <li>Vinilos adhesivos</li>
        <li>Plotter de corte</li>
        <li>Frosted</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card" href="/servicios/senalizacion-y-avisos/">
      <div class="topic-card__icon">SA</div>
      <h3 class="topic-card__title">Señalización & avisos</h3>
      <p class="topic-card__text">Avisos, señalética y piezas para punto de venta.</p>
      <ul class="topic-card__list">
        <li>Avisos en acrílico</li>
        <li>Señalización</li>
        <li>Habladores · Tropezones · Neonflex</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card topic-card--accent" href="/servicios/papeleria-y-branding/">
      <div class="topic-card__icon">PB</div>
      <h3 class="topic-card__title">Papelería, corte láser & branding</h3>
      <p class="topic-card__text">Impresos comerciales + detalles premium + branding vehicular.</p>
      <ul class="topic-card__list">
        <li>Tarjetas · Volantes · Papelería comercial</li>
        <li>Corte láser · Retablos · Imanes</li>
        <li>Branding para carros</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>
  </div>
</section>
