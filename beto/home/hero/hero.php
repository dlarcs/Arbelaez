<?php
$cssTime = filemtime('../../beto/home/hero/hero.css');
?>
<link rel="stylesheet" href="../../beto/home/hero/hero.css?v=<?= $cssTime ?>">

<section class="home-topics" aria-labelledby="topics-title" id="servicios">
  <header class="home-topics__head">
    <p class="home-topics__eyebrow">Servicios</p>
    <h2 class="home-topics__title" id="topics-title">Explora por categoría</h2>
    <p class="home-topics__sub">5 páginas con todo organizado para que encuentres rápido lo que necesitas.</p>
  </header>

  <div class="topics-grid">
    <a class="topic-card" href="/servicios/gran-formato/">
      <div class="topic-card__icon">GF</div>
      <h3 class="topic-card__title">Gran formato & exteriores</h3>
      <p class="topic-card__text">Publicidad y piezas grandes listas para calle, vitrinas y eventos.</p>
      <ul class="topic-card__list">
        <li>Impresión gran formato</li>
        <li>Pendones · Panaflex</li>
        <li>Vallas · Microperforado</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card" href="/servicios/vinilos-y-plotter/">
      <div class="topic-card__icon">VP</div>
      <h3 class="topic-card__title">Vinilos & plotter</h3>
      <p class="topic-card__text">Corte exacto, adhesivos y acabados para interiores o exteriores.</p>
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
      <p class="topic-card__text">Señales, avisos y piezas para puntos de venta y espacios.</p>
      <ul class="topic-card__list">
        <li>Avisos en acrílico</li>
        <li>Señalización</li>
        <li>Habladores · Tropezones</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card" href="/servicios/papeleria/">
      <div class="topic-card__icon">PC</div>
      <h3 class="topic-card__title">Papelería & comerciales</h3>
      <p class="topic-card__text">Impresos para tu marca: presentación, ventas y comunicación.</p>
      <ul class="topic-card__list">
        <li>Tarjetas</li>
        <li>Volantes</li>
        <li>Papelería comercial</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>

    <a class="topic-card topic-card--accent" href="/servicios/corte-laser-y-especiales/">
      <div class="topic-card__icon">CL</div>
      <h3 class="topic-card__title">Corte láser & especiales</h3>
      <p class="topic-card__text">Producción y detalles premium para destacar tu negocio.</p>
      <ul class="topic-card__list">
        <li>Corte láser</li>
        <li>Neonflex · Imanes · Retablos</li>
        <li>Branding para carros</li>
      </ul>
      <span class="topic-card__cta">Ver página →</span>
    </a>
  </div>
</section>
