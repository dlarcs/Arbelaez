<?php
$cssTime = filemtime('../../../view/gastronomia/El_Huerto/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Huerto/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_El_Huerto" class="card_download">
		<div class="download">
			<a href="../../../" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
