<?php
$cssTime = filemtime('../../../view/gastronomia/La_Marranada/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/gastronomia/La_Marranada/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_La_Marranada" class="wrap">
		<article class="card" itemscope itemtype="https://schema.org/LocalBusiness">
			<figure class="hero">
				<img src="../../../view/gastronomia/img/logo_lamarranada.jpeg" alt="La_Marranada" itemprop="image" loading="lazy">
				<!-- <a href="https://wa.me/573138737008?text=Hola%20vengo%20desde%20la%20web%20de%20tutumazo" -->
				<!-- target="_blank" rel="noopener noreferrer"> -->
				<figcaption>Lo mejor en veredas</figcaption>
				<!-- </a> -->
			</figure>

			<section class="content">
				<h1 itemprop="name">Acerca de nosotros</h1>
				<p class="lema" itemprop="slogan">La Marranada Campestre</p>

				<p class="desc" itemprop="description">
				  Somos un restaurante de vereda, a solo 15 minutos caminando desde la Alcaldía. Aquí el tiempo pasa despacio,
				  el aire huele a campo y cada visita se convierte en un recuerdo para compartir. Ven con amigos, en familia o en pareja:
				  tu mesa te espera entre risas, sabor y buena charla.
				</p>

				<p class="desc" itemprop="description">
				  Nuestra especialidad es el cerdo, preparado con cariño y fuego paciente: <strong>costillas</strong> jugosas,
				  <strong>hamburguesas</strong> de cerdo con todo el sabor, <strong>burritos</strong>, <strong>salchipapa</strong>, <strong>perros</strong> bien servidos y otros antojos
				  que cambian según el día. Cocinamos como nos gusta comer: abundante, honesto y con ese toque casero que invita a volver.
				  <br><br>
				  Pedidos y reservas:
				  <a href="https://wa.me/573022514381?text=Hola%20vengo%20desde%20la%20web%20La%20Marranada%20Campestre"
				     target="_blank" rel="noopener noreferrer" aria-label="Reservas por WhatsApp">
				     302&nbsp;251&nbsp;4381
				  </a>
				</p>

				<ul class="bullets">
				  <li>A 15 min a pie desde el pueblo (Alcaldía)</li>
				  <li>Todo cerdo: costillas, hamburguesas, perros y más</li>
				  <li>Ambiente campestre, cercano y familiar</li>
				</ul>

			</section>
		</article>
	</main>
