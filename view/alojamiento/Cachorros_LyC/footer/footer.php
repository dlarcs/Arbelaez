<?php
$cssTime = filemtime('../../../view/alojamiento/Cachorros_LyC/footer/footer.css');
// $jsTime = filemtime('../../../');
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Cachorros_LyC/footer/footer.css?v=<?= $cssTime ?>">
	<section class="seccion_footer">
		<div class="footer_logo">
			<a href="../../../view/home/index.php"><img class="logo_menu" src="../../../view/global/img/logo.png" alt="Logo"></a>
			<h2>ARBELÁEZ CUNDINAMARCA</h2>
		</div>
		<div class="footer_container">
			<div class="footer_social" aria-label="Redes sociales">
				<ul class="socials">
					<li>
						<a href="https://www.facebook.com/share/1BXeKpu2aJ/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
							<ion-icon name="logo-facebook"></ion-icon><span class="sr-only">Facebook</span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/parqueadero_cachorros_?igsh=MWNoNjFudDg3N2p1ZA==" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
							<ion-icon name="logo-instagram"></ion-icon><span class="sr-only">Facebook</span>
						</a>
					</li>
					<li>
						<a href="https://www.tiktok.com/@parqueaderocachor?_r=1&_t=ZS-913BDPP5j1D" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
							<ion-icon name="logo-tiktok"></ion-icon><span class="sr-only">Facebook</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer_bottom">

			<a href="https://www.dlarcs.com" target="_blank" rel="noopener noreferrer">
				<p>&copy; <span id="year"></span> D'LARCS Todos los derechos reservados.</p>

			</a>
		</div>


	</section>
	<!-- Actualizar el año -->
	<script>
		// Ejecuta seguro aunque el span #year no exista
		  (function () {
		    var el = document.getElementById('year');
		    if (el) el.textContent = new Date().getFullYear();
		  })();

	</script>

	<!-- Ionicons (icons de redes) -->
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
