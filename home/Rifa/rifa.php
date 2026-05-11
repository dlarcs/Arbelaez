<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/Rifa/rifa.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="/home/Rifa/rifa.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

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
        <h2>Números ganadores</h2>
        <ul>
          <li>18 de abril 2026<strong> Número 207</strong></li>
          <li>9 de mayo 2026 <strong>Número 943</strong></li>

        </ul>
      </article>
    </div>
  </div>
</section>
