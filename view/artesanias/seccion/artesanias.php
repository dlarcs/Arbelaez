<?php
$cssFile = __DIR__ . '/../../view/artesanias/seccion/artesanias.css';
$jsFile  = __DIR__ . '/../../view/artesanias/seccion/artesanias.js';

$cssTime = file_exists($cssFile) ? filemtime($cssFile) : time();
$jsTime  = file_exists($jsFile)  ? filemtime($jsFile)  : time();
?>

<link rel="stylesheet" href="../../view/artesanias/seccion/artesanias.css?v=<?= $cssTime ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

<section class="section_products" aria-label="Artesanías en Arbeláez">
  <div class="container_product">

    <article class="boxes_product">
      <header class="info_box_product">
        <a class="cursiva-inglesa" href="../../view/artesanias/Artesanias_Martha_E/index.php">
          Artesanías Martha E.
        </a>
      </header>

      <a href="../../view/artesanias/Artesanias_Martha_E/index.php"
         class="box_product"
         aria-label="Ver Artesanías Martha E.">
        <img
          loading="lazy"
          decoding="async"
          src="../../view/artesanias/Artesanias_Martha_E/img/lugar.jpeg"
          alt="Artesanías Martha E. en Arbeláez"
        >
        <div class="shade_box_product"><h2>Artesanías</h2></div>
      </a>

      <div class="texto">
        <h3>Hecho a mano, con identidad</h3>
        <p>Piezas únicas en tejido, madera y cerámica. Personaliza encargos para ocasiones especiales y apoya a familias artesanas.</p>
      </div>
    </article>


    <article class="boxes_product">
      <header class="info_box_product">
        <a class="cursiva-inglesa" href="../../view/artesanias/Almacen_Religioso/index.php">
          Almacén Religioso y Artesanal Divino Niño Jesús
        </a>
      </header>

      <a href="../../view/artesanias/Almacen_Religioso/index.php"
         class="box_product"
         aria-label="Ver Almacén Religioso y Artesanal Divino Niño Jesús">
        <img
          loading="lazy"
          decoding="async"
          src="../../view/artesanias/img/entrada_Religioso.jpg"
          alt="Entrada del Almacén Religioso y Artesanal"
        >
        <div class="shade_box_product"><h2>Artesanías</h2></div>
      </a>

      <div class="texto">
        <h3>Artesanías religiosas y plantas</h3>
        <p>El propósito de estas artesanías es mantener viva la fe en cada corazón, fortaleciendo el espíritu y transmitiendo paz, amor y esperanza.</p>
      </div>
    </article>

    <article class="boxes_product">
      <header class="info_box_product">
        <a class="cursiva-inglesa" href="../../view/artesanias/Artesanas_Veredas/index.php">
          Artesanías en Veredas
        </a>
      </header>

      <a href="../../view/artesanias/Artesanas_Veredas/index.php"
         class="box_product"
         aria-label="Ver Almacén Religioso y Artesanal Divino Niño Jesús">
        <img
          loading="lazy"
          decoding="async"
          src="../../view/artesanias/Artesanas_Veredas/img/portada.png"
          alt="Entrada del Almacén Religioso y Artesanal"
        >
        <div class="shade_box_product"><h2>Artesanías</h2></div>
      </a>

      <div class="texto">
        <h3>Artesanías en Veredas</h3>
        <p>El propósito de estas artesanías es mostrar el arte y la naturaleza al mundo</p>
      </div>
    </article>

  </div>
</section>

<script src="../../view/artesanias/seccion/artesanias.js?v=<?= $jsTime ?>" defer></script>
