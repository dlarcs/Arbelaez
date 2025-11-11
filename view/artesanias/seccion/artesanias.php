<?php
$cssTime = filemtime('../../view/artesanias/seccion/artesanias.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<link rel="stylesheet" href="../../view/artesanias/seccion/artesanias.css?v=<?= $cssTime ?>">
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
 <section class="section_products">
   <!-- <div class="title_products">
     <h1>Origen y orgullo de mi tierra</h1>

     <div class="info_product">
       <h2>Descubre Arbeláez a tu ritmo: historias, sabores y lugares que no sabías que existían.
           Conecta con negocios locales y encuentra experiencias hechas para ti. Entra y sorpréndete.</h2>
         <h2>Aquí empieza tu plan perfecto: dónde comer, qué visitar y a quién apoyar.
           Reúne todo en un solo lugar y arma tu ruta por Arbeláez sin complicarte.</h2>
         <img src="../../view/global/img/logo.png" alt="">
         <h2>Un directorio vivo de lo nuestro: emprendedores, oficios y talentos que mueven a Arbeláez.
             Explora sus perfiles, mira sus ofertas y contáctalos en pocos clics.</h2>
         <h2>Arbeláez te espera con puertas abiertas: sabores, hospedajes y experiencias al aire libre.
           En arbelaez.com todo está en un solo lugar para que planees sin perder tiempo.</h2>
     </div>
   </div> -->
   <div class="container_product">
         <div class="boxes_product">
       <div class="info_box_product">
      <a class="cursiva-inglesa" href="../../view/artesanias/Artesanias_Martha_E/index.php">Artesanías Martha E.</a>
       </div>
       <a href="../../view/artesanias/Artesanias_Martha_E/index.php" class="box_product" aria-label="Ver: Artesanías">
         <img loading="lazy" src="../../view/artesanias/Artesanias_Martha_E/img/lugar.jpeg" alt="Artesanías y manualidades locales">
         <div class="shade_box_product"><h2>Artesanías</h2></div>
       </a>
       <div class="texto">
         <h3>Hecho a mano, con identidad</h3>
         <p>Piezas únicas en tejido, madera y cerámica. Personaliza encargos para ocasiones especiales y apoya a familias artesanas.</p>
       </div>
     </div>

     <!-- 3. Artesanías (ejemplo) -->
     <div class="boxes_product">
       <div class="info_box_product">
         <a class="cursiva-inglesa" href="../../view/artesanias/Almacen_Religioso/index.php">Almacen Religioso y Artesanal divino Niño Jesús</a>
       </div>
       <a href="../../view/artesanias/Almacen_Religioso/index.php" class="box_product" aria-label="Ver: Artesanías">
         <img loading="lazy" src="../../view/artesanias/Almacen_Religioso/img/religioso20.jpg" alt="Artesanías y manualidades locales">
         <div class="shade_box_product"><h2>Artesanías</h2></div>
       </a>
       <div class="texto">
         <h3>Artesanías religiosas y plantas</h3>
         <p>El propósito de estas artesanías es mantener viva la fe en cada corazón, fortaleciendo el espíritu; transmitir paz, amor y la presencia de Dios en cada creación</p>
       </div>
     </div>
     <!-- Repite el mismo patrón para Panadería, Lácteos, Hortifruti, Plantas, Comida & Catering, Confección, Marroquinería, Cosmética, Miel, Carpintería -->
   </div>


 </section>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
