<?php
$cssTime = filemtime('../../gastronomia/Los_Andariegos/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../gastronomia/Los_Andariegos/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_Andariegos" class="wrap">
		<article class="card" itemscope itemtype="https://schema.org/LocalBusiness">
			<figure class="hero">
				<img src="../../gastronomia/Los_Andariegos/img/logo.jpeg" alt="Los_Andariegos°" itemprop="image" loading="lazy">
				<figcaption>Vive el sabor local</figcaption>
			</figure>

			<section class="content">
			  <h1 itemprop="name">Acerca de nosotros</h1>
			  <p class="lema" itemprop="slogan">Sabores caseros, tradición y momentos para compartir.</p>

			  <p class="desc" itemprop="description">
			    En Los Andariegos cada plato reúne sabor, tradición y buenos momentos. Ofrecemos almuerzos caseros,
			    sopas, platos especiales y preparaciones llenas de cariño, pensadas para quienes disfrutan la comida
			    sencilla, abundante y hecha con dedicación.
			  </p>

			  <p class="desc" itemprop="description">
			    Nuestro espacio es acogedor y tranquilo, ideal para compartir en familia, descansar y disfrutar de una
			    buena comida en Arbeláez. Queremos que cada visita se sienta cercana, amable y con ganas de volver.
			    Haz tus reservas al
			    <a
			      href="https://wa.me/573223068866?text=Hola%20vengo%20desde%20la%20web%20de%20Los%20Andariegos"
			      target="_blank" rel="noopener noreferrer"
			      aria-label="Chatear por WhatsApp con Los Andariegos">
			      322&nbsp;306&nbsp;8866 
			    </a>
			  </p>

			  <ul class="bullets">
			    <li>Almuerzos caseros preparados con dedicación</li>
			    <li>Sopas tradicionales y platos especiales</li>
			    <li>Comida sencilla, abundante y con buen sabor</li>
			    <li>Ambiente tranquilo para compartir y descansar</li>
			    <li>Atención cercana en Arbeláez</li>
			  </ul>
			</section>
		</article>
	</main>
