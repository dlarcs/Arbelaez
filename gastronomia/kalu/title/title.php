<?php
$cssTime = filemtime('../../../gastronomia/kalu/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../gastronomia/kalu/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../gastronomia/kalu/img/kalu.jpg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Kalú</strong>
				<span class="brand-tag">Café-Resto-Bar</span>
			</div>
		</div>
	</section>
