<?php
$cssTime = filemtime('../../../view/gastronomia/Del_Huerto/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Del_Huerto/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_Del_Huerto" class="card_download">
		<div class="download">
			<a href="../../../" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
