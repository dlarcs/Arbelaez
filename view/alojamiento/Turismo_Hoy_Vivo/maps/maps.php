<?php
$cssTime = filemtime('../../../view/alojamiento/Turismo_Hoy_Vivo/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Turismo_Hoy_Vivo/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_Turismo_Hoy_Vivo" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7633.263754639588!2d-74.41855547418096!3d4.276913233553494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1d7b07ea7265%3A0x660289f2d1e1c978!2sTurismo%20Hoy%20Vivo%20-%20CASA%20RURAL%20ACCESIBLE!5e0!3m2!1ses-419!2sco!4v1760029603659!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
