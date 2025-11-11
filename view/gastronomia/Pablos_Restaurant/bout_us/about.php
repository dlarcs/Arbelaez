<?php
$cssTime = filemtime('../../../view/gastronomia/Pablos_Restaurant/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/Pablos_Restaurant/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_Pablos_Restaurant" class="wrap">
		<article class="card" itemscope itemtype="https://schema.org/LocalBusiness">
			<figure class="hero">
				<img src="../../../view/gastronomia/Pablos_Restaurant/img/lugar4.jpeg" alt="Pablos_Restaurant°" itemprop="image" loading="lazy">
				<!-- <a href="https://wa.me/573138737008?text=Hola%20vengo%20desde%20la%20web%20de%20tutumazo" -->
				<!-- target="_blank" rel="noopener noreferrer"> -->
				<figcaption>Fotografía: Nathalia Jossa</figcaption>
				<!-- </a> -->
			</figure>

			<section class="content">
				<h1 itemprop="name">Acerca de nosotros</h1>
				<p class="lema" itemprop="slogan">Pablo's Restaurant</p>
				<p class="desc" itemprop="description">
					Bienvenidos al restaurante este es un espacio creado para desconectar y
					reconectar, con amigos familia o pareja y el sabor autentico...<br>
					Aquí cada plato es único que rinde homenaje a lo tradicional y a lo
					innovador. <br><br>  Es un punto de encuentro para celebrar la vida
					con esas conversaciones que alimentan el espíritu y crean recuerdos
					al rededor de una mesa, tu mesa esta lista! el ambiente preparado y la
					compañía que tu elijas. <br> Te Esperamos!!! pedidos reservas:
					<a href="https://wa.me/573138737008?text=Hola%20vengo%20desde%20la%20web%20de%20Pablos%20Restaurant"
					target="_blank" rel="noopener noreferrer">3138737008
					</a>
				</p>
				<ul class="bullets">
					<li>Comida tipica colombiana</li>
					<li>Tradición y experiencia</li>
					<li>Ambiente familiar y de amigos</li>
				</ul>
			</section>
		</article>
	</main>
