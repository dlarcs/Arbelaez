<?php
$cssTime = filemtime('../../../gastronomia/kalu/download/download.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../gastronomia/kalu/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_kalu" class="card_download">
		<div class="download">
			<a href="../../../gastronomia/kalu/download/menu.pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
