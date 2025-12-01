<?php
$cssTime = filemtime('../../../view/gastronomia/El_Huerto/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Huerto/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/gastronomia/El_Huerto/title/img/logo_kapaLuna.png" alt="El_Huerto° logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Del Huerto</strong>
				<span class="brand-tag">Pizzeria Artesanal</span>
			</div>
		</div>
	</section>
