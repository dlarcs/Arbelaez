<?php
$cssTime = filemtime('../rio/slider/slider.css');
$jsTime = filemtime('../rio/slider/slider.js');
?>
<link rel="stylesheet" href="../rio/slider/slider.css?v=<?= $cssTime ?>">


<section class="hero" id="hero">
   <div class="hero__bg" id="heroBg"></div>

   <div class="hero__content">
     <h1 class="parallax-text" data-parallax-text>   Ríos • Quebradas • Puentes</h1>
   </div>
   <a href="#contenido" class="scroll-down" aria-label="Bajar para ver más contenido">
    <span class="scroll-down__arrow" aria-hidden="true"></span>
   </a>
 </section>




<script src="../rio/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
