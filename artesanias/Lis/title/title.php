<?php
$cssTime = filemtime('../../../view/artesanias/Lis/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/artesanias/Lis/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/artesanias/Lis/img/lamparas4.jpeg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Artesanías Lis</strong>
				<span class="brand-tag">Artesanías</span>
			</div>
		</div>
	</section>
