<?php
$cssTime = filemtime('../../../view/alojamiento/Turismo_Hoy_Vivo/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Turismo_Hoy_Vivo/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/alojamiento/Turismo_Hoy_Vivo/img/logo.jpeg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Turismo Hoy Vivo Casa Rural Accesible</strong>
				<span class="brand-tag">Alojamiento turistico rural accesible</span>
			</div>
		</div>
	</section>
