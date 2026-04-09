<?php
$cssTime = filemtime('../../gastronomia/La_Marranada/download/download.css');
// $jsTime = filemtime('../../');
?>
	<link rel="stylesheet" href="../../gastronomia/La_Marranada/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_La_Marranada" class="card_download">
		<div class="download">
			<a href="../../gastronomia/La_Marranada/download/menu.pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
