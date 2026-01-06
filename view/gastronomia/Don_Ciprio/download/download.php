<?php
$cssTime = filemtime('../../../view/gastronomia/Don_Ciprio/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Don_Ciprio/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_El_Fogon_triangulo" class="card_download">
		<div class="download">
			<a href="../../../pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
