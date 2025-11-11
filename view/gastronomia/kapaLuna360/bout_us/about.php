<?php
$cssTime = filemtime('../../../view/gastronomia/kapaLuna360/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/kapaLuna360/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_kapaLuna" class="wrap">
		<article class="card" itemscope itemtype="https://schema.org/LocalBusiness">
			<figure class="hero">
				<img src="../../../view/gastronomia/kapaLuna360/menu/img/logo_kapaLuna.png" alt="KapaLuna360°" itemprop="image" loading="lazy">
				<figcaption>Vive el sabor local</figcaption>
			</figure>

			<section class="content">
				<h1 itemprop="name">Acerca de nosotros</h1>
				<p class="lema" itemprop="slogan">Sabores que abrazan, momentos para volver.</p>

				<p class="desc" itemprop="description">
				  No solo cocinamos: acompañamos tus momentos. Nuestra cocina es especial y dinámica, hecha con ingredientes
				  locales y el toque creativo que nos define. Servimos hamburguesas jugosas, tacos al momento, perros artesanales,
				  bebidas refrescantes y cocteles de autor, siempre presentados de una forma distinta—la nuestra.
				</p>
				<p class="desc" itemprop="description">
				  Aquí te escuchamos y preparamos lo que te gustaría probar, a tu manera. Queremos que te sientas tranquilo,
				  bien atendido y con ganas de volver. También creamos eventos a tu medida—desde celebraciones íntimas hasta
				  reuniones de empresa—porque cada detalle cuenta cuando se trata de compartir. Haz tus reservas al
					<a
					  href="https://wa.me/573024229260?text=Hola%20vengo%20desde%20la%20web%20de%20kapaLuna360%C2%B0"
					  target="_blank" rel="noopener noreferrer"
					  aria-label="Chatear por WhatsApp con KapaLuna360°">
					  302&nbsp;422&nbsp;9260
					</a>
				</p>

				<ul class="bullets">
				  <li>Platos especiales y menús de temporada</li>
				  <li>Hamburguesas, tacos y perros con sello de la casa</li>
				  <li>Bebidas frescas y coctelería de autor</li>
				  <li>Eventos personalizados: familia, amigos y empresas</li>
				  <li>Presentaciones creativas y atención cercana</li>
				</ul>

			</section>
		</article>
	</main>
