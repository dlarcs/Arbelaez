<?php
$cssTime = filemtime('../../gastronomia/Los_Andariegos/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../gastronomia/Los_Andariegos/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_Andariegos" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.7056268305814!2d-74.4134070463104!3d4.277318518822048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1cd607581903%3A0x8585d3d94e48c708!2sRestaurante%20Campestre%20los%20Andariegos!5e0!3m2!1sen!2sco!4v1778703826219!5m2!1sen!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
