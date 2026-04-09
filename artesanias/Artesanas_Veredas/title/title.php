<?php
$cssTime = filemtime('../../artesanias/Artesanas_Veredas/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../artesanias/Artesanas_Veredas/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../artesanias/Artesanas_Veredas/img/portada.png" alt="Logo Artesanías Martha E" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Artesanas de las veredas</strong>
				<span class="brand-tag">Arbeláez</span>
			</div>
		</div>
	</section>
