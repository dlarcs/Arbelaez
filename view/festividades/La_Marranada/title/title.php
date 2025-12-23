<?php
$cssTime = filemtime('../../../view/gastronomia/La_Marranada/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/La_Marranada/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/gastronomia/img/logo_lamarranada.jpeg" alt="La_Marranada logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">La Marranada Campestre</strong>
				<span class="brand-tag">Restaurante</span>
			</div>
		</div>
	</section>
