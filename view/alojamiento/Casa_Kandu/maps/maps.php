<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kandu/maps/maps.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kandu/maps/maps.css?v=<?= $cssTime ?>">
	<section id="ubicacion_Casa_Kandu" class="seccion_maps">
		<div class="maps">
			<div class="text_maps">
				<h1>¡CÓMO LLEGAR!</h1>

				<div class="map_frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.3989595266407!2d-74.41823835095359!3d4.259511451198261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f1da005b80a91%3A0xbceffdc2458da5b1!2sCasa%20Kand%C3%BA!5e0!3m2!1ses!2sco!4v1764997956815!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
