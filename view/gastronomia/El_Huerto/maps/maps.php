<?php
$cssTime = filemtime('../../../view/gastronomia/El_Huerto/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Huerto/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_El_Huerto" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.6704612676456!2d-74.4163797137858!3d4.273128030855302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1d28c3fd6cdb%3A0x9b331c86f36712e0!2sArbel%C3%A1ez%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1764565944400!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
