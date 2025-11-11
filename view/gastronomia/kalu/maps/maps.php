<?php
$cssTime = filemtime('../../../view/gastronomia/kalu/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/kalu/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_kalu" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.3409414839072!2d-74.41726703498757!3d4.273098815048497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1dc2fb37fa1d%3A0x7a8eee8d00eb3134!2zS2Fsw7ogY2Fmw6kgcmVzdG8gYmFy!5e0!3m2!1ses-419!2sco!4v1759027516739!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
