<?php
$cssTime = filemtime('../../view/Radio/slider/slider.css');
$jsTime = filemtime('../../view/Radio/slider/slider.js');
?>
<link rel="stylesheet" href="../../view/Radio/slider/slider.css?v=<?= $cssTime ?>">
<section class="slider" aria-roledescription="carrusel" aria-label="Galería destacada">
   <div class="slider__viewport" tabindex="0">
     <div class="slider__track" id="slider-track">
       <!-- Slide 1 -->
       <article class="slide is-current" aria-roledescription="slide" aria-label="1 de 4">
         <img src="../../view/Radio/img/techo_Radio.jpg"
              alt="Montañas al amanecer" />
         <div class="slide__caption">
           <h2>Dios es Amor</h2>
           <p>Descubre el amor que transforma vidas.</p>
         </div>
       </article>
       <!-- Slide 2 -->
       <article class="slide" aria-roledescription="slide" aria-label="2 de 4">
         <img src="../../view/Radio/img/estatuas.jpg"
              alt="Bosque con luz dorada" />
         <div class="slide__caption">
           <h2>Una Familia de Fe</h2>
           <p>Aquí siempre encontrarás un lugar para ti.</p>
         </div>
       </article>
       <!-- Slide 3 -->
       <article class="slide" aria-roledescription="slide" aria-label="3 de 4">
         <img src="../../view/Radio/img/Radio1.jpg"
              alt="Lago tranquilo" />
         <div class="slide__caption">
           <h2>La Esperanza Vive</h2>
           <p>Cristo es la luz en medio de la oscuridad.</p>
         </div>
       </article>
       <!-- Slide 4 -->
       <article class="slide" aria-roledescription="slide" aria-label="4 de 4">
         <img src="../../view/Radio/img/sillas_Radio2.jpg"
              alt="Carretera hacia el horizonte" />
         <div class="slide__caption">
           <h2>Fortaleza en la Oración</h2>
           <p>Habla con Dios, Él siempre escucha.</p>
         </div>
       </article>
     </div>
   </div>

   <!-- Controles -->
   <button class="slider__btn slider__btn--prev" aria-label="Anterior" data-dir="-1">‹</button>
   <button class="slider__btn slider__btn--next" aria-label="Siguiente" data-dir="1">›</button>

   <!-- Puntos -->
   <div class="slider__dots" role="tablist" aria-label="Selector de diapositivas">
     <button class="dot is-active" role="tab" aria-selected="true" aria-controls="slide-1" data-index="0"><span class="sr">Ir a la 1</span></button>
     <button class="dot" role="tab" aria-selected="false" aria-controls="slide-2" data-index="1"><span class="sr">Ir a la 2</span></button>
     <button class="dot" role="tab" aria-selected="false" aria-controls="slide-3" data-index="2"><span class="sr">Ir a la 3</span></button>
     <button class="dot" role="tab" aria-selected="false" aria-controls="slide-4" data-index="3"><span class="sr">Ir a la 4</span></button>
   </div>
 </section>

<script src="../../view/Radio/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
