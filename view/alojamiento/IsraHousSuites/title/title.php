<?php
$cssTime = filemtime('../../../view/alojamiento/IsraHousSuites/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/IsraHousSuites/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/alojamiento/IsraHousSuites/img/exterior.jpeg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">IsraHousSuites</strong>
				<span class="brand-tag">Alojamiento</span>
			</div>
		</div>
	</section>
