<?php
$cssTime = filemtime('../../gastronomia/Don_Ciprio/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../gastronomia/Don_Ciprio/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../gastronomia/Don_Ciprio/img/logo.png" alt="Don_Ciprio logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Don Ciprio</strong>
				<span class="brand-tag">Restaurante </span>
			</div>
		</div>
	</section>
