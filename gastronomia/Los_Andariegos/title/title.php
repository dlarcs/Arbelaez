<?php
$cssTime = filemtime('../../gastronomia/Los_Andariegos/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../gastronomia/Los_Andariegos/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../gastronomia/Los_Andariegos/img/logo.jpeg" alt="Los_Andariegos° logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Los Andariegos</strong>
				<span class="brand-tag">Carnes y Sopas</span>
			</div>
		</div>
	</section>
