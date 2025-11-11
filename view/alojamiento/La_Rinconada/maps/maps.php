<?php
$cssTime = filemtime('../../../view/alojamiento/La_Rinconada/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/La_Rinconada/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_La_Rinconada" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3978.743459333901!2d-74.42632692502325!3d4.270027995703895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMTYnMTIuMSJOIDc0wrAyNScyNS41Ilc!5e0!3m2!1ses-419!2sco!4v1760759851049!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
