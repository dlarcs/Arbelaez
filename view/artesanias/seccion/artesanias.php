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
      </a>

      <div class="texto">
        <h3>Hecho a mano, con identidad</h3>
        <p>
          Piezas únicas en tejido, madera y cerámica. Personaliza encargos para ocasiones especiales
          y apoya a familias artesanas.
        </p>

        <div class="acciones_producto">
          <a class="btn_accion btn_whatsapp"
             href="https://wa.me/573143417111?text=Hola,%20quiero%20informaci%C3%B3n%20sobre%20Artesan%C3%ADas%20Martha%20E."
             target="_blank"
             rel="noopener noreferrer"
             aria-label="Contactar por WhatsApp a Artesanías Martha E.">
            WhatsApp
          </a>

          <a class="btn_accion btn_vermas"
             href="../../view/artesanias/Artesanias_Martha_E/index.php"
             aria-label="Ver más sobre Artesanías Martha E.">
            Ver más
          </a>
        </div>
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
          alt="Entrada del Almacén Religioso y Artesanal Divino Niño Jesús"
        >
      </a>

      <div class="texto">
        <h3>Artesanías religiosas, ceramicas, velas,  plantas</h3>
        <p>
          El propósito de estas artesanías es mantener viva la fe en cada corazón,
          fortaleciendo el espíritu y transmitiendo paz, amor y esperanza.
        </p>

        <div class="acciones_producto">
          <a class="btn_accion btn_whatsapp"
             href="https://wa.me/573132277099?text=Hola,%20quiero%20informaci%C3%B3n%20sobre%20el%20Almac%C3%A9n%20Religioso%20y%20Artesanal%20Divino%20Ni%C3%B1o%20Jes%C3%BAs."
             target="_blank"
             rel="noopener noreferrer"
             aria-label="Contactar por WhatsApp al Almacén Religioso y Artesanal Divino Niño Jesús">
            WhatsApp
          </a>

          <a class="btn_accion btn_vermas"
             href="../../view/artesanias/Almacen_Religioso/index.php"
             aria-label="Ver más sobre el Almacén Religioso y Artesanal Divino Niño Jesús">
            Ver más
          </a>
        </div>
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
         aria-label="Ver Artesanías en Veredas">
        <img
          loading="lazy"
          decoding="async"
          src="../../view/artesanias/Artesanas_Veredas/img/portada.png"
          alt="Artesanías en Veredas de Arbeláez"
        >
      </a>

      <div class="texto">
        <h3>Artesanas</h3>
        <p>
          El propósito de estas artesanías es mostrar el arte y la naturaleza de ARBELÁEZ.
        </p>
        <div class="acciones_producto">

          <a class="btn_accion btn_vermas"
             href="../../view/artesanias/Artesanas_Veredas/index.php"
             aria-label="Ver más sobre el Almacén Religioso y Artesanal Divino Niño Jesús">
            Ver más
          </a>
        </div>
      </div>
    </article>

  </div>
</section>

<script src="../../view/artesanias/seccion/artesanias.js?v=<?= $jsTime ?>" defer></script>
