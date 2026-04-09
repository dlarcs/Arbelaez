<?php
$cssTime = filemtime('../../../gastronomia/Pablos_Restaurant/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../gastronomia/Pablos_Restaurant/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_Pablos_Restaurant" class="card_download">
		<div class="download">
			<a href="../../../gastronomia/Pablos_Restaurant/download/CartaPablos.pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
