<?php
$cssTime = filemtime('../alojamiento/La_Casita2/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../alojamiento/La_Casita2/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_La_Casita2" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.7340649610737!2d-74.41832819999999!3d4.2718395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1d260e3781f3%3A0x6fe3a1e2b3958155!2sHotel%20La%20Casita%20No2!5e0!3m2!1ses!2sco!4v1764993942209!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
