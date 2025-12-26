<?php
$cssTime = filemtime('../../../view/alojamiento/Casa_Kiyari/bout_us/about.css');
?>
	<link rel="stylesheet" href="../../../view/alojamiento/Casa_Kiyari/bout_us/about.css?v=<?= $cssTime ?>">
	<div class="videos-grid">
  <div class="video-container">
    <iframe
      src="../../../view/alojamiento/Casa_Kiyari/bout_us/video.mp4"
      title="Video de ejemplo 1"
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>

  <div class="video-container">
    <iframe
      src="../../../view/alojamiento/Casa_Kiyari/bout_us/video1.mp4"
      title="Video de ejemplo 2"
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>
</div>

	<main id="about_Casa_Kiyari" class="wrap">
	  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
	    <figure class="hero">
	      <!-- Cambia la imagen cuando tengas la foto principal de la cabaña -->
	      <img src="../../../view/alojamiento/Casa_Kiyari/img/logo.jpg"
	           alt="Casa Kandu — cabaña rural con zona BBQ en Arbeláez"
	           itemprop="image" loading="lazy">
	      <figcaption>Casa Kiyari</figcaption>
	    </figure>
			<section class="content">
			  <h1 itemprop="name">Acerca de nosotros</h1><br>

			  <p class="lema" itemprop="slogan">Alojamiento</p>

			  <p class="desc" itemprop="description">
			    Casa Kiyari es un <strong>alojamiento acogedor y tranquilo</strong> en
			    <span itemprop="addressLocality">Arbeláez, Cundinamarca</span>, ideal para
			    <strong>desconectarte</strong> y disfrutar de la naturaleza a tu ritmo. <br><br>

			    Para llegar a Casa Kiyari, se realiza una <strong>caminata aproximada de 15 minutos</strong>,
			    en una ruta natural que te prepara para una estadía de descanso y conexión. <br><br>

			    Además, contamos con <strong>estacionamiento</strong> para tu comodidad y un entorno perfecto
			    para <strong>compartir en familia, con amigos o en pareja</strong>.
			  </p>

			  <p>
			    En Casa Kiyari puedes vivir experiencias únicas como <strong>caminatas ecológicas</strong>,
			    disfrutar de <strong>alimentación</strong> durante tu estadía, hacer <strong>fogata</strong>
			    (según condiciones del clima), y probar nuestro <strong>café</strong> disponible para la venta. <br><br>

			    También ofrecemos <strong>masaje tailandés</strong> para complementar tu descanso y bienestar.
			  </p>

			  <p>
			    Si quieres explorar, tenemos <strong>dos rutas al río</strong>:
			    una de aproximadamente <strong>10 minutos</strong> y otra más larga de <strong>25 minutos</strong>,
			    perfectas para elegir según tu plan del día. <br><br>
			  </p>

			  <p>
			    <strong>¡Te esperamos!</strong> Para reservas o información, contáctanos por WhatsApp:
			    <a href="https://wa.me/573016677095?text=Hola%20vengo%20desde%20la%20web%20de%20Casa%20Kiyari%20en%20Arbel%C3%A1ez%2C%20Cundinamarca"
			       target="_blank" rel="noopener"
			       aria-label="Chatear por WhatsApp" itemprop="telephone">301 667 7095</a>.
			  </p>
			</section>

	  </article>
	</main>
