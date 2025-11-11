<?php
$cssTime = filemtime('../../../view/alojamiento/Cachorros_LyC/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Cachorros_LyC/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/alojamiento/Cachorros_LyC/img/logo.jpg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Cachorros L & C</strong>
				<span class="brand-tag">Camping, vista y comida</span>
			</div>
		</div>
	</section>
