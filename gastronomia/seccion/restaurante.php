<?php
$cssTime = filemtime('../../gastronomia/seccion/restaurante.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../gastronomia/seccion/restaurante.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../gastronomia/seccion/restaurante.css?v=<?= $cssTime ?>">
	<!-- ===== Directorio ===== -->
  <?php
  // Ajusta estas rutas a donde tengas el CSS y JS de restaurantes
  $cssTime = filemtime('../../gastronomia/seccion/restaurantes.css');
  $jsTime  = filemtime('../../gastronomia/seccion/restaurantes.js');

  // Helper para WhatsApp
  function wa_link_resto($phoneInt, $restoName) {
    $texto = "Hola, vengo desde la web de " . $restoName;
    return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
  }

  // ====== Configuración de restaurantes ======
  $restos = [
    [
      'name'         => 'Kapaluna 360°',
      'slug'         => 'kapaLuna360',
      'img'          => '../../gastronomia/img/kapa_luna.jpg',
      'img_alt'      => 'Kapaluna 360°: terraza gastro-bar con parrilla y coctelería de autor',
      'zone'         => 'Pueblo', // para el filtro (Pueblo / Pueblo)
      'schema'       => 'Restaurant',
      'location'     => 'En el pueblo',
      'desc'         => 'Terraza gastro-bar 360° con parrilla a las brasas y coctelería de autor. Vista abierta del pueblo en un ambiente moderno y relajado, perfecto para momentos especiales.',
      'servesCuisine'=> 'Parrilla, cocina de autor y gastro-bar',
      'features'     => [
        'Terraza con vista 360°',
        'Lu – Vi 4:00 pm – 10:00 pm',
        'Sábados, domingos y festivos 11:00 am – 10:00 pm',
      ],
      'openingHours' => 'Mo-Fr 16:00-22:00, Sa-Su 11:00-22:00',
      'priceRange'   => '$$',
      'wa_phone'     => '573024229260',
      'wa_label'     => 'WhatsApp',
    ],
    [
      'name'         => 'Kalú',
      'slug'         => 'kalu',
      'img'          => '../../gastronomia/img/kalu.jpg',
      'img_alt'      => 'Kalú Café: origen Sumapaz, arte, sabor y conexión',
      'zone'         => 'Pueblo',
      'schema'       => 'CafeOrCoffeeShop',
      'location'     => 'En el pueblo',
      'desc'         => 'En Kalú cada taza y cada plato cuentan una historia. Café de origen Sumapaz, arte local y sabores únicos en un espacio para conversar y disfrutar tranquilo.',
      'servesCuisine'=> '',
      'features'     => [
        'Almuerzos 12:00 m – 3:00 pm',
        'Comida rápida y café 5:00 pm – 10:00 pm',
      ],
      'openingHours' => 'Mo-Su 09:00-22:00',
      'priceRange'   => '$–$$',
      'wa_phone'     => '573123804104',
      'wa_label'     => 'WhatsApp',
    ],
    [
      'name'         => "Pablo's Restaurant",
      'slug'         => 'Pablos_Restaurant',
      'img'          => '../../gastronomia/img/pablos.jpg',
      'img_alt'      => "Pablo’s Restaurant: tradición y sabor en el parque principal",
      'zone'         => 'Pueblo',
      'schema'       => 'Restaurant',
      'location'     => 'En el pueblo',
      'desc'         => "Desde 1982, Pablo's Restaurant es un clásico de Arbeláez: cocina familiar, sabores tradicionales y un servicio cálido que hace sentir a todos como en casa.",
      'servesCuisine'=> 'Cocina colombiana y platos típicos',
      'features'     => [
        'Especialidades de la casa',
        'Lun a Dom 7:00 am – 4:00 pm',
      ],
      'openingHours' => 'Mo-Su 07:00-16:00',
      'priceRange'   => '',
      'wa_phone'     => '573203969152',
      'wa_label'     => 'WhatsApp',
    ],
    [
      'name'         => 'La Marranada Campestre',
      'slug'         => 'La_Marranada',
      'img'          => '../../gastronomia/img/logo_lamarranada.jpeg',
      'img_alt'      => 'La Marranada Campestre: tradición, sabor y ambiente familiar',
      'zone'         => 'Vereda',
      'schema'       => 'Restaurant',
      'location'     => 'En vereda',
      'desc'         => 'La tradición del cerdo convertida en arte: cortes jugosos, sabores intensos y un ambiente campestre para disfrutar entre familia y amigos.',
      'servesCuisine'=> '',
      'features'     => [
        'Viernes 5:00 pm – 9:00 pm',
        'Sábado 12:00 pm – 9:00 pm',
        'Domingo 7:00 am – 5:00 pm',
      ],
      'openingHours' => 'Fr 17:00-21:00, Sa 12:00-21:00, Su 07:00-17:00',
      'priceRange'   => '',
      'wa_phone'     => '3022514381',
      'wa_label'     => 'WhatsApp',
    ],
    [
      'name'         => 'El Fogón del Triángulo',
      'slug'         => 'El_Fogon_del_Triangulo',
      'img'          => '../../gastronomia/El_Fogon_del_Triangulo/img/logo.png',
      'img_alt'      => 'El Fogón del Triángulo: tradición, color y sabor en cada plato',
      'zone'         => 'Pueblo', // aquí lo pongo como Pueblo para que el filtro tenga sentido
      'schema'       => 'Restaurant',
      'location'     => 'En Pueblo',
      'desc'         => 'Colores, cultura y sazón de nuestra tierra. Comida típica hecha con amor, naturaleza alrededor y una vista que enamora.',
      'servesCuisine'=> 'Comida típica, asados y platos campesinos',
      'features'     => [
        'Fines de semana y festivos 8:30 am – 5:30 pm',
        'Vista panorámica',
      ],
      'openingHours' => 'Mo-Su 08:00-18:00',
      'priceRange'   => '$$',
      'wa_phone'     => '573144506914',
      'wa_label'     => 'WhatsApp',
    ],
		[
      'name'         => 'Don Ciprio',
      'slug'         => 'Don_Ciprio',
      'img'          => '../../gastronomia/Don_Ciprio/img/logo.png',
      'img_alt'      => 'Restaurante mexicano',
      'zone'         => 'Pueblo', // aquí lo pongo como Pueblo para que el filtro tenga sentido
      'schema'       => 'Restaurant',
      'location'     => 'En Pueblo',
      'desc'         => 'Colores, cultura y sazón, comida mexicana, el unico lugar en Arbleáez.',
      'servesCuisine'=> 'Comida mexicana',
      'features'     => [
        'Lunes a viernes 18:30 pm – 20:00 pm',
        'Lugar con historia',
      ],
      'openingHours' => 'Mo-Su 18:00-22:00',
      'priceRange'   => '$$',
      'wa_phone'     => '573176184453',
      'wa_label'     => 'WhatsApp',
    ],
  ];
  ?>

  <link rel="stylesheet" href="../../gastronomia/seccion/restaurantes.css?v=<?= $cssTime ?>">

  <section class="section_restos" aria-labelledby="restos-title">
    <header class="section_head">
      <h1 id="restos-title">Restaurantes de Arbeláez</h1>
      <p class="section_sub">
        Explora por categoría y descubre menús, rangos de precio, horarios y contactos directos.
      </p>
    </header>

    <!-- Filtros -->
    <nav class="restos_filters" role="toolbar" aria-label="Filtrar por tipo de restaurante">
      <button class="filter_btn is-active" data-filter="all" aria-pressed="true">Todos</button>
      <button class="filter_btn" data-filter="Pueblo" aria-pressed="false">Pueblo</button>
      <button class="filter_btn" data-filter="Vereda" aria-pressed="false">Vereda</button>
    </nav>

    <!-- Grid -->
    <div class="restos_grid">
      <?php foreach ($restos as $it):
        $name     = htmlspecialchars($it['name'], ENT_QUOTES, 'UTF-8');
        $slug     = htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8');
        $img      = htmlspecialchars($it['img'], ENT_QUOTES, 'UTF-8');
        $imgAlt   = htmlspecialchars($it['img_alt'], ENT_QUOTES, 'UTF-8');
        $zone     = htmlspecialchars($it['zone'], ENT_QUOTES, 'UTF-8');
        $schema   = htmlspecialchars($it['schema'], ENT_QUOTES, 'UTF-8');
        $location = htmlspecialchars($it['location'], ENT_QUOTES, 'UTF-8');
        $desc     = htmlspecialchars($it['desc'], ENT_QUOTES, 'UTF-8');
        $serves   = htmlspecialchars($it['servesCuisine'], ENT_QUOTES, 'UTF-8');
        $hours    = htmlspecialchars($it['openingHours'], ENT_QUOTES, 'UTF-8');
        $price    = htmlspecialchars($it['priceRange'], ENT_QUOTES, 'UTF-8');

        $detailHref = "../../gastronomia/{$slug}/index.php";
        $detailHref = htmlspecialchars($detailHref, ENT_QUOTES, 'UTF-8');

        $waUrl   = wa_link_resto($it['wa_phone'], $it['name']);
        $waUrl   = htmlspecialchars($waUrl, ENT_QUOTES, 'UTF-8');
        $waLabel = htmlspecialchars($it['wa_label'], ENT_QUOTES, 'UTF-8');
      ?>
      <article class="resto_card <?= $zone ?>" itemscope itemtype="https://schema.org/<?= $schema ?>">
        <div class="resto_colorband" aria-hidden="true"></div>

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
            <h3 class="resto_name" itemprop="name"><?= $name ?></h3>
          </header>

          <p class="resto_location" itemprop="address"><?= $location ?></p>
          <p class="resto_desc" itemprop="description"><?= $desc ?></p>

          <ul class="resto_features">
            <?php if ($serves): ?>
              <li itemprop="servesCuisine"><?= $serves ?></li>
            <?php endif; ?>

            <?php foreach ($it['features'] as $feat): ?>
              <li><?= htmlspecialchars($feat, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
          </ul>

          <div class="resto_meta">
            <a class="resto_btn"
               href="<?= $waUrl ?>"
               target="_blank"
               rel="noopener">
              <?= $waLabel ?>
            </a>
            <a class="resto_btn"
               href="<?= $detailHref ?>">
              Ver más
            </a>
          </div>

          <?php if ($hours): ?>
            <meta itemprop="openingHours" content="<?= $hours ?>">
          <?php endif; ?>
          <?php if ($price): ?>
            <meta itemprop="priceRange" content="<?= $price ?>">
          <?php endif; ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>


	<script src="../../gastronomia/seccion/restaurante.js?v=<?= $jsTime ?>" type="text/javascript"></script>
