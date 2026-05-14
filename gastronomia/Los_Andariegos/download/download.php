<?php
$cssTime = filemtime('../../gastronomia/Los_Andariegos/download/download.css');
// $jsTime = filemtime('../../');
?>
	<link rel="stylesheet" href="../../gastronomia/Los_Andariegos/download/download.css?v=<?= $cssTime ?>">
	<section id="menu_Andariegos" class="card_download">
		<div class="download">
			<a href="../../gastronomia/Los_Andariegos/img/menu.pdf" download="Menu-Restaurante.pdf">
				<h2>Haz click aqui y <br>Descarga el Menú</h2>
			</a>
		</div>
	</section>
