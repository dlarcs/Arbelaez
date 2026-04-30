<?php
$cssFile = '../../home/Rifa/rifa.css';
$cssTime = is_file($cssFile) ? filemtime($cssFile) : time();
?>

<link rel="stylesheet" href="../../home/Rifa/rifa.css?v=<?= $cssTime ?>">

<section class="rifa-section">
  <div class="rifa-container">

    <header class="rifa-header">
      <span class="rifa-badge">Arbeláez • 2026</span>
      <h1>Arbeláez se llena de color</h1>
      <p>
        Iniciativa comunitaria para embellecer negocios y fortalecer turismo,
        comercio local y orgullo comunitario.
      </p>
    </header>

    <div class="rifa-grid">

      <article class="rifa-card">
        <img src="../../home/Rifa/img/img.png" alt="Negocios coloridos en Arbeláez">
        <span>¿Qué es?</span>
        <h2>Una iniciativa para embellecer y visibilizar</h2>
        <ul>
          <li>Organiza: <strong>arbelaez.com.co</strong> y aliados locales</li>
          <li>Lugar: Arbeláez, casco urbano y veredas</li>
          <li>Meta: identidad visual y más visibilidad para negocios participantes</li>
        </ul>
      </article>

      <article class="rifa-card">
        <img src="../../home/Rifa/img/img1.png" alt="Rifa solidaria en Arbeláez">
        <span>Estructura</span>
        <h2>2 fases del proyecto</h2>
        <ul>
          <li><strong>Fase 1:</strong> rifa solidaria con venta de boletas.</li>
          <li><strong>Fase 2:</strong> murales, pintura de fachadas y señalización.</li>
        </ul>
      </article>

      <article class="rifa-card">
        <img src="../../home/Rifa/img/img2.png" alt="Fechas de sorteo y boletas">
        <span>Fechas y valor</span>
        <h2>Sorteos + precio de boleta</h2>
        <ul>
          <li>Sorteos: <strong>18 de abril de 2026</strong> y <strong>9 de mayo de 2026</strong></li>
          <li>Valor boleta: <strong>$10.000 COP</strong></li>
          <li>Ganan las últimas <strong>3 cifras</strong> de la Lotería de Boyacá.</li>
        </ul>
      </article>

      <article class="rifa-card">
        <img src="../../home/Rifa/img/img3.png" alt="Premios de la rifa">
        <span>Premios</span>
        <h2>4 premios disponibles</h2>
        <ul>
          <li>Mural / pintura de fachada hasta <strong>2 m²</strong></li>
          <li><strong>Tablet Lenovo</strong></li>
          <li>Bono por <strong>$300.000 COP</strong></li>
          <li>Página en arbelaez.com.co por <strong>6 meses</strong></li>
        </ul>
      </article>

      <article class="rifa-card">
        <img src="../../home/Rifa/img/img5.png" alt="Apoya la iniciativa y participa">
        <span>Participa</span>
        <h2>Apoya el arte local y gana premios</h2>
        <ul>
          <li>Compra tu boleta en negocios aliados:</li>
          <li><a href="../../gastronomia/kalu/index.php">Kalu</a></li>
          <li><a href="../../alojamiento/Cachorros_LyC/index.php">Cachorros L&C</a></li>
          <li><a href="../../gastronomia/Don_Ciprio/index.php">Don Ciprio</a></li>
          <li><a href="../../gastronomia/El_Fogon_del_Triangulo/index.php">Fogón del Triángulo</a></li>
        </ul>

        <a class="rifa-btn" href="https://wa.me/573138846378?text=Hola%20quiero%20m%C3%A1s%20informaci%C3%B3n">
          Conocer más
        </a>
      </article>

    </div>
  </div>
</section>
