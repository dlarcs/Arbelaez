<?php
$cssTime = filemtime('../../../view/gastronomia/El_Fogon_del_Triangulo/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/El_Fogon_del_Triangulo/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_El_Fogon_triangulo" class="card_download">
		<div class="download">
			<a href="../../../pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
