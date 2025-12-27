<?php
$cssTime = filemtime('../../../view/artesanias/Artesanas_Veredas/galery/arte.css'); // ejemplo: '../Home/5.Video/video.css'
?>
	<link rel="stylesheet" href="../../../view/artesanias/Artesanas_Veredas/galery/arte.css?v=<?= $cssTime ?>">
	<?php
	$cssTime = filemtime('../../../view/artesanias/Artesanas_Veredas/galery/arte.css');

	function wa_link($phoneInt, $name){
	  $texto = "Hola, vengo desde Arbelaez.com.co — " . $name;
	  return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
	}

	$items = [
	  [
	    "name" => "Nombre del Emprendimiento",
	    "place" => "Vereda X • Arbeláez",
	    "img" => "logo-o-imagen.jpg",
	    "img_alt" => "Logo del emprendimiento",

	    "desc" => "Escribe aquí una descripción corta (50–120 palabras) sobre el emprendimiento, qué hacen, materiales, productos, y por qué es especial.",

	    "pdf" => "documento.pdf",

	    "facebook" => "https://facebook.com/tu-pagina",
	    "instagram" => "https://instagram.com/tu-cuenta",
	    "tiktok" => "https://tiktok.com/@tu-cuenta",
	    "whatsapp" => "57XXXXXXXXXX"
	  ],
	];
	?>

	<link rel="stylesheet" href="../../../view/artesanias/Artesanas_Veredas/galery/arte.css?v=<?= $cssTime ?>">

	<section class="section_food_gallery" id="producto_Artesanas_Veredas">
	  <?php foreach($items as $it):
	    $name  = htmlspecialchars($it["name"], ENT_QUOTES, "UTF-8");
	    $place = htmlspecialchars($it["place"], ENT_QUOTES, "UTF-8");
	    $img   = htmlspecialchars($it["img"], ENT_QUOTES, "UTF-8");
	    $alt   = htmlspecialchars($it["img_alt"], ENT_QUOTES, "UTF-8");
	    $desc  = htmlspecialchars($it["desc"], ENT_QUOTES, "UTF-8");
	    $pdf   = htmlspecialchars($it["pdf"], ENT_QUOTES, "UTF-8");

	    $fb = htmlspecialchars($it["facebook"], ENT_QUOTES, "UTF-8");
	    $ig = htmlspecialchars($it["instagram"], ENT_QUOTES, "UTF-8");
	    $tt = htmlspecialchars($it["tiktok"], ENT_QUOTES, "UTF-8");

	    $waPhone = preg_replace('/\D+/', '', $it["whatsapp"] ?? '');
	    $waUrl = $waPhone ? htmlspecialchars(wa_link($waPhone, $it["name"]), ENT_QUOTES, "UTF-8") : '';
	  ?>
	    <article class="ficha">

	      <!-- 1) Nombre + 2) Lugar -->
	      <header class="ficha__header">
	        <h2 class="ficha__title"><?= $name ?></h2>
	        <p class="ficha__place">📍 <?= $place ?></p>
	      </header>

	      <!-- 3) Imagen -->
	      <figure class="ficha__media">
	        <img src="<?= $img ?>" alt="<?= $alt ?>" loading="lazy" decoding="async">
	      </figure>

	      <!-- ✅ Descripción (después de la imagen) -->
	      <p class="ficha__desc"><?= $desc ?></p>

	      <!-- ✅ Botón azul PDF -->
	      <a class="btn btn--pdf" href="<?= $pdf ?>" download>
	        <svg viewBox="0 0 24 24" aria-hidden="true" class="btn__icon">
	          <path d="M12 3a1 1 0 0 1 1 1v9.59l2.3-2.3a1 1 0 1 1 1.4 1.42l-4.01 4a1 1 0 0 1-1.4 0l-4.01-4a1 1 0 1 1 1.4-1.42L11 13.59V4a1 1 0 0 1 1-1zM5 19a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1z"/>
	        </svg>
	        Descargar PDF
	      </a>

	      <!-- 4) Redes en fila + WhatsApp -->
	      <nav class="social social--row" aria-label="Redes y contacto">

	        <a class="social__btn" href="<?= $fb ?>" target="_blank" rel="noopener" aria-label="Facebook">
	          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8.5V7a1 1 0 0 1 1-1h2V3h-2.5A3.5 3.5 0 0 0 11 6.5V8.5H9v3h2V21h3v-9.5h2.5l.5-3H14z"/></svg>
	        </a>

	        <a class="social__btn" href="<?= $ig ?>" target="_blank" rel="noopener" aria-label="Instagram">
	          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4zm10 2H7a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2zm-5 3.5A4.5 4.5 0 1 1 7.5 13 4.5 4.5 0 0 1 12 8.5zm0 2A2.5 2.5 0 1 0 14.5 13 2.5 2.5 0 0 0 12 10.5zM17.8 6.2a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"/></svg>
	        </a>

	        <a class="social__btn" href="<?= $tt ?>" target="_blank" rel="noopener" aria-label="TikTok">
	          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 3v10.2a3.8 3.8 0 1 1-2-3.3V6.1c2.2 2.8 4.8 3.9 7 4V7.9c-1.9-.2-3.7-1.2-5-2.7V21h-2v-3.1A5.8 5.8 0 1 1 14 12v-1.8a3.8 3.8 0 1 0 0 3z"/></svg>
	        </a>

	        <?php if($waUrl): ?>
	          <!-- ✅ WhatsApp más grande -->
	          <a class="social__btn social__btn--wa social__btn--waBig" href="<?= $waUrl ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
	            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 0 0-7.7 13.7L3 21l4.4-1.2A9 9 0 1 0 12 3zm0 2a7 7 0 0 1 0 14 7 7 0 0 1-3.5-.9l-.4-.2-2.6.7.7-2.5-.2-.4A7 7 0 0 1 12 5zm3.9 9.5c-.2-.1-1.2-.6-1.4-.7-.2-.1-.4-.1-.5.1l-.5.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.5-1-1.2-1.1-1.4-.1-.2 0-.4.1-.5l.4-.4c.1-.1.1-.2.2-.3.1-.1 0-.2 0-.4l-.7-1.6c-.2-.4-.4-.3-.5-.3h-.4c-.1 0-.3.1-.4.2-.2.2-.7.7-.7 1.8 0 1 .7 2.1.8 2.2.1.1 1.4 2.2 3.4 3 .5.2.9.3 1.2.4.5.1.9.1 1.2.1.4 0 1.2-.5 1.3-1 .2-.5.2-.9.1-1 0-.1-.2-.2-.4-.3z"/></svg>
	          </a>
	        <?php endif; ?>

	      </nav>

	    </article>
	  <?php endforeach; ?>
	</section>
