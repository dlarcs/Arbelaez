<?php
$cssTime = filemtime('../../../view/alojamiento/Los_Altos/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Los_Altos/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_Los_Altos" class="wrap">
	  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
	    <figure class="hero">
	      <!-- Cambia la imagen cuando tengas la foto principal de la cabaña -->
	      <img src="../../../view/alojamiento/Los_Altos/img/jacuzzi3.jpg"
	           alt="Casa Kandu — cabaña rural con zona BBQ en Arbeláez"
	           itemprop="image" loading="lazy">
	      <figcaption>Alojamiento rural</figcaption>
	    </figure>

	    <section class="content">
	      <h1 itemprop="name">Acerca de nosotros</h1><br>
	      <p class="lema" itemprop="slogan">Alojamiento</p>

				<p class="desc" itemprop="description">
				  <strong>Los Altos</strong> es un <strong>alojamiento campestre</strong> en Arbeláez, Cundinamarca, con
				  <strong>ambiente familiar</strong> y rodeado de naturaleza. Un lugar bonito, tranquilo y luminoso para
				  descansar y disfrutar sin afanes.
				  <br><br>
				  Cuenta con <strong>zona de juegos</strong> y <strong>espacios amplios</strong> que invitan a conversar,
				  reír y compartir momentos especiales. Ideal para <strong>familias, amigos o parejas</strong> que buscan
				  comodidad y buena energía en un entorno verde.
				  <br><br>
				  Sus áreas abiertas permiten disfrutar del paisaje y aprovechar cada rincón para actividades al aire libre,
				  creando recuerdos sencillos y felices.
				</p>

	        <strong>¡Te esperamos!</strong> Para reservas o información, contáctanos por WhatsApp:
	        <a href="https://wa.me/573132120224?text=Hola%20vengo%20desde%20la%20web%20de%20Los%20Altos"
	           target="_blank" rel="noopener"
	           aria-label="Chatear por WhatsApp" itemprop="telephone">313 212 02 24</a>.
	      </p>
	    </section>
	  </article>
	</main>
