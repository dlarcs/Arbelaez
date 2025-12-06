<?php
$cssTime = filemtime('../../view/Juntanza_de_Mujeres/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../view/Juntanza_de_Mujeres/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../view/Juntanza_de_Mujeres/img/logo.jpeg" alt="logo_Juntanza_de_Mujeres" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Juntanza de Mujeres</strong>
				<span class="brand-tag">Asociación</span>
			</div>
		</div>
	</section>
