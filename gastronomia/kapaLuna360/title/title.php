<?php
$cssTime = filemtime('../../gastronomia/kapaLuna360/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../gastronomia/kapaLuna360/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../gastronomia/kapaLuna360/title/img/logo_kapaLuna.png" alt="KapaLuna360° logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">KapaLuna360°</strong>
				<span class="brand-tag">Gastro-Bar</span>
			</div>
		</div>
	</section>
