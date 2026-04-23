<?php
$cssTime = filemtime('../alojamiento/seccion/slider/slider.css');
$jsTime = filemtime('../alojamiento/seccion/slider/slider.js');
?>
<link rel="stylesheet" href="../alojamiento/seccion/slider/slider.css?v=<?= $cssTime ?>">


<section class="hero" id="hero">
   <div class="hero__bg" id="heroBg"></div>

   <div class="hero__content">
     <h1 class="parallax-text" data-parallax-text>   Descanso • Alojamientos </h1>
   </div>
   <a href="#contenido" class="scroll-down" aria-label="Bajar para ver más contenido">
    <span class="scroll-down__arrow" aria-hidden="true"></span>
   </a>
 </section>




<script src="../alojamiento/seccion/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
