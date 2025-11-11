<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kandu/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kandu/bout_us/about.css?v=<?= $cssTime ?>">

	<main id="about_Casa_Kandu" class="wrap">
	  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
	    <figure class="hero">
	      <!-- Cambia la imagen cuando tengas la foto principal de la cabaña -->
	      <img src="../../../view/alojamiento/Casa_Kandu/img/general.jpg"
	           alt="Casa Kandu — cabaña rural con zona BBQ en Arbeláez"
	           itemprop="image" loading="lazy">
	      <figcaption>Cabaña rural cerca del pueblo</figcaption>
	    </figure>

	    <section class="content">
	      <h1 itemprop="name">Acerca de nosotros</h1><br>
	      <p class="lema" itemprop="slogan">Alojamiento</p>

	      <p class="desc" itemprop="description">
	        Casa Kandu es una <strong>cabaña de ambiente familiar</strong> a pocos minutos del pueblo de
	        <span itemprop="addressLocality">Arbeláez, Cundinamarca</span>, con <strong>bonita vista</strong> y
	        contacto directo con la naturaleza. <br><br>Es el lugar perfecto para <strong>compartir en familia, con amigos
	        o en pareja</strong>, descansar y pasarla chévere sin prisas. <br><br>
	      </p>

	      <p>
	        Disfruta de su <strong>zona BBQ</strong>, espacios verdes y ambientes acogedores pensados para una
	        estadía cómoda y tranquila. <em>Capacidad: hasta 7 personas.</em> <br><br>
	      </p>

	      <p>
	        <strong>¡Te esperamos!</strong> Para reservas o información, contáctanos por WhatsApp:
	        <a href="https://wa.me/573112250633?text=Hola%20vengo%20desde%20la%20web%20de%20Casa%20Kandu"
	           target="_blank" rel="noopener"
	           aria-label="Chatear por WhatsApp" itemprop="telephone">311 225 06 33</a>.
	      </p>
	    </section>
	  </article>
	</main>
