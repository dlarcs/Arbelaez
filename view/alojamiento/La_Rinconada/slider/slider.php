<?php
$cssTime = filemtime('../../../view/alojamiento/La_Rinconada/slider/slider.css');
$jsTime = filemtime('../../../view/alojamiento/La_Rinconada/slider/slider.js');
?>
	<link rel="stylesheet" href="../../../view/alojamiento/La_Rinconada/slider/slider.css?v=<?= $cssTime ?>">
	<section class="slider" aria-role description="carrusel" aria-label="Galería destacada">
		<div class="slider__viewport" tabindex="0">
			<div class="slider__track" id="slider-track">
				<!-- Slide 1 -->
				<article class="slide is-current" aria-role description="slide" aria-label="1 de 4">
					<img src="../../../view/alojamiento/La_Rinconada/img/piscina4.jpeg" alt="Artesanías" />
					<div class="slide__caption">
						<!-- <h2>Dios es Amor</h2>
           <p>Descubre el amor que transforma vidas.</p> -->
					</div>
				</article>
				<!-- Slide 2 -->
				<article class="slide" aria-role description="slide" aria-label="2 de 4">
					<img src="../../../view/alojamiento/La_Rinconada/img/habitaciones3.jpeg" alt="Artesanías" />
					<div class="slide__caption">
						<!-- <h2>Una Familia de Fe</h2>
           <p>Aquí siempre encontrarás un lugar para ti.</p> -->
					</div>
				</article>
				<!-- Slide 3 -->
				<article class="slide" aria-role description="slide" aria-label="3 de 4">
					<img src="../../../view/alojamiento/La_Rinconada/img/general5.jpeg" alt="Artesanías" />
					<div class="slide__caption">
						<!-- <h2>La Esperanza Vive</h2>
           <p>Cristo es la luz en medio de la oscuridad.</p> -->
					</div>
				</article>
				<!-- Slide 4 -->
				<article class="slide" aria-role description="slide" aria-label="4 de 4">
					<img src="../../../view/alojamiento/La_Rinconada/img/general2.jpeg" alt="Artesanías" />
					<div class="slide__caption">
						<!-- <h2>Fortaleza en la Oración</h2>
           <p>Habla con Dios, Él siempre escucha.</p> -->
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

	<script src="../../../view/alojamiento/La_Rinconada/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
