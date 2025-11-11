<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kandu/title/title.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kandu/title/title.css?v=<?= $cssTime ?>">
	<!-- title -->
	<section class="site">
		<div class="branding">
			<img src="../../../view/alojamiento/Casa_Kandu/img/general.jpg" alt="kalu logo" class="logo" width="64" height="64" loading="lazy">
			<div class="brand">
				<strong class="brand-name">Casa Kandu</strong>
				<span class="brand-tag">Alojamiento</span>
			</div>
		</div>
	</section>
