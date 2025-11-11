<?php
$cssTime = filemtime('../../../view/gastronomia/El_Fogon_del_Triangulo/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Fogon_del_Triangulo/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/gastronomia/El_Fogon_del_Triangulo/img/logo.png" alt="El_Fogon_del_Triangulo logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">El Fogón del Triángulo</strong>
				<span class="brand-tag">Restaurante</span>
			</div>
		</div>
	</section>
