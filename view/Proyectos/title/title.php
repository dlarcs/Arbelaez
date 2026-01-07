<?php
$cssTime = filemtime('../../view/Proyectos/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../view/Proyectos/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../view/global/img/logo.png" alt="Proyecto" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Proyectos en Arbeláez</strong>
				<span class="brand-tag">Turismo</span>
			</div>
		</div>
	</section>
