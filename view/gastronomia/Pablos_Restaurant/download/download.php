<?php
$cssTime = filemtime('../../../view/gastronomia/Pablos_Restaurant/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Pablos_Restaurant/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_Pablos_Restaurant" class="card_download">
		<div class="download">
			<a href="../../../view/gastronomia/Pablos_Restaurant/download/CartaPablos_v3.pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
