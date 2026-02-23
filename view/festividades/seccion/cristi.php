
	<link rel="stylesheet" href="../../view/festividades/seccion/cristi.css?v=<?= $cssTime ?>">
	<!-- ===== Directorio ===== -->
	<?php
	// =========================
	//  Festividades - Sección
	// =========================

	$cssPath = __DIR__ . '/cristi.css';
	$cssTime = file_exists($cssPath) ? filemtime($cssPath) : time();

	// ====== Configuración de festividades ======
	$festividades = [
		[
		  'name'     => 'Cumpleaños de Arbeláez',
		  'slug'     => 'cumpleanos-arbelaez',
		  'img'      => '../../view/home/img/lugar.jpg',
		  'img_alt'  => 'Cumpleaños de Arbeláez: actos culturales y celebración en el parque principal',
		  'zone'     => 'Pueblo',
		  'schema'   => 'Event',
		  'date'     => '16 de enero',
		  'place'    => 'Parque principal y centro del pueblo',
		  'desc'     => 'Celebración del aniversario municipal de Arbeláez, con actividades culturales, deportivas y turísticas para residentes y visitantes. Suele incluir presentaciones artísticas y verbena popular en el centro del pueblo.',
		  'features' => ['Actos culturales', 'Actividades deportivas', 'Verbena popular'],
		],

	  [
	    'name'     => 'Corpus Christi',
	    'slug'     => 'corpus-christi',
	    'img'      => '../../view/festividades/img_christi/christi12.jpeg',
	    'img_alt'  => 'Corpus Christi en Arbeláez: tapetes de aserrín y procesión',
	    'zone'     => 'Pueblo',
	    'schema'   => 'Event',
	    'date'     => '21 de junio',
	    'place'    => 'Centro del pueblo',
	    'desc'     => 'Tradición centenaria de gran fervor, fe y arte que une a la comunidad urbana y rural. Se destacan los tapetes de aserrín y flores en las calles por donde pasa la procesión del Santísimo, con participación de familias, colegios, instituciones y administración local.',
	    'features' => ['Tapetes de aserrín', 'Procesión', 'Participación comunitaria'],
	  ],
	  [
	    'name'     => 'La Diablada',
	    'slug'     => 'la-diablada',
	    'img'      => '../../view/festividades/la_diablada/IMG_3455.JPG',
	    'img_alt'  => 'La Diablada en Arbeláez: tradición cultural decembrina',
	    'zone'     => 'Pueblo',
	    'schema'   => 'Event',
	    'date'     => '16 al 24 de diciembre',
	    'place'    => 'Calles del pueblo',
	    'desc'     => 'Celebración cultural y religiosa durante la novena de Navidad. Danzantes con trajes y máscaras recorren las calles en un evento festivo que mezcla elementos indígenas y católicos, representando la lucha entre el bien y el mal y siendo un símbolo de identidad local.',
	    'features' => ['Danzas', 'Máscaras y trajes', 'Recorridos por el pueblo'],
	  ],
	];
	?>

	<link rel="stylesheet" href="../../view/festividades/seccion/cristi.css?v=<?= $cssTime ?>">

	<section class="section_restos" aria-labelledby="fest-title">
	  <header class="section_head">
	    <h1 id="fest-title">Festividades y cultura Arbelaence</h1>
	    <p class="section_sub">
	      Conoce nuestras tradiciones: fechas, lugares y detalles principales.
	    </p>
	  </header>

	  <div class="restos_grid">
	    <?php foreach ($festividades as $it):

	      $name   = htmlspecialchars($it['name'] ?? '', ENT_QUOTES, 'UTF-8');
	      $slug   = htmlspecialchars($it['slug'] ?? '', ENT_QUOTES, 'UTF-8');
	      $img    = htmlspecialchars($it['img'] ?? '', ENT_QUOTES, 'UTF-8');
	      $imgAlt = htmlspecialchars($it['img_alt'] ?? '', ENT_QUOTES, 'UTF-8');
	      $zone   = htmlspecialchars($it['zone'] ?? 'all', ENT_QUOTES, 'UTF-8');
	      $schema = htmlspecialchars($it['schema'] ?? 'Event', ENT_QUOTES, 'UTF-8');
	      $date   = htmlspecialchars($it['date'] ?? '', ENT_QUOTES, 'UTF-8');
	      $place  = htmlspecialchars($it['place'] ?? '', ENT_QUOTES, 'UTF-8');
	      $desc   = htmlspecialchars($it['desc'] ?? '', ENT_QUOTES, 'UTF-8');

	      $features = $it['features'] ?? [];
	      if (!is_array($features)) $features = [];

	      $detailHref = "../../view/festividades/{$slug}/index.php";
	      $detailHref = htmlspecialchars($detailHref, ENT_QUOTES, 'UTF-8');
	    ?>
	      <article class="resto_card <?= $zone ?>" itemscope itemtype="https://schema.org/<?= $schema ?>">
	        <div class="resto_colorband" aria-hidden="true"></div>

	        <!-- La imagen sigue siendo el link al detalle -->
	        <a href="<?= $detailHref ?>" class="resto_link">
	          <figure class="resto_media">
	            <img class="resto_cover"
	                 src="<?= $img ?>"
	                 alt="<?= $imgAlt ?>"
	                 loading="lazy"
	                 decoding="async" />
	          </figure>
	        </a>

	        <div class="resto_body">
	          <header class="resto_header">
	            <!-- Si quieres que el título también sea clickeable, descomenta el <a> -->
	            <h3 class="resto_name" itemprop="name">
	              <a href="<?= $detailHref ?>" class="resto_link" style="text-decoration:none; color:inherit;">
	                <?= $name ?>
	              </a>
	            </h3>
	          </header>

	          <?php if ($date): ?>
	            <p class="resto_location"><strong>Fecha:</strong> <span itemprop="startDate"><?= $date ?></span></p>
	          <?php endif; ?>

	          <?php if ($place): ?>
	            <p class="resto_location"><strong>Lugar:</strong> <span itemprop="location"><?= $place ?></span></p>
	          <?php endif; ?>

	          <p class="resto_desc" itemprop="description"><?= $desc ?></p>

	          <?php if (!empty($features)): ?>
	            <ul class="resto_features">
	              <?php foreach ($features as $feat): ?>
	                <li><?= htmlspecialchars($feat, ENT_QUOTES, 'UTF-8') ?></li>
	              <?php endforeach; ?>
	            </ul>
	          <?php endif; ?>
	        </div>
	      </article>
	    <?php endforeach; ?>
	  </div>
	</section>



	<script src="../../view/festividades/seccion/cristi.css?v=<?= $jsTime ?>" type="text/javascript"></script>
