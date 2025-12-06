<?php
$cssTime = filemtime('../../../view/alojamiento/La_Casita2/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/La_Casita2/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/alojamiento/La_Casita2/img/logo.png" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">La Casita N°2</strong>
				<span class="brand-tag">Alojamiento</span>
			</div>
		</div>
	</section>
