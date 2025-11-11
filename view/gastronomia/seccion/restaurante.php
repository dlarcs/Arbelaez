<?php
$cssTime = filemtime('../../view/gastronomia/seccion/restaurante.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/gastronomia/seccion/restaurante.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/gastronomia/seccion/restaurante.css?v=<?= $cssTime ?>">
<!-- ===== Directorio ===== -->
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

    <!-- 1 KAPALUNA 360° -->
    <article class="resto_card Pueblo" itemscope itemtype="https://schema.org/Restaurant">
  <div class="resto_colorband" aria-hidden="true"></div>
  <a href="../../view/gastronomia/kapaLuna360/index.php" class="resto_link">
    <figure class="resto_media">
      <img class="resto_cover"
           src="../../view/gastronomia/img/kapa_luna.jpg"
           alt="Kapaluna 360°: terraza gastro-bar con parrilla y coctelería de autor"
           loading="lazy" decoding="async" />
    </figure>
  </a>

  <div class="resto_body">
    <header class="resto_header">
      <h3 class="resto_name" itemprop="name">Kapaluna 360°</h3>
    </header>

    <p class="resto_location" itemprop="address">En el pueblo</p>
    <p class="resto_desc" itemprop="description">
      Terraza <strong>gastro-bar 360°</strong> con <strong>parrilla a las brasas</strong> y coctelería de autor.
      Disfruta una vista abierta del pueblo en un ambiente moderno, relajado y perfecto para
      <strong>momentos especiales</strong>.
    </p>

    <ul class="resto_features">
      <li itemprop="servesCuisine">Parrilla, cocina de autor y gastro-bar</li>
      <li>Terraza con vista 360°</li>
      <li>Lu – Vi 4:00 pm – 10:00 pm</li>
      <li>Sábados, domingos y festivos 11:00 am – 10:00 pm</li>
    </ul>

    <div class="resto_meta">
      <a class="resto_btn" href="https://wa.me/573024229260?text=Hola%20vengo%20desde%20la%20web%20de%20Kapaluna%20360%C2%B0" target="_blank" rel="noopener">WhatsApp</a>
      <a class="resto_btn" href="../../view/gastronomia/kapaLuna360/index.php">Ver más</a>
    </div>

    <meta itemprop="openingHours" content="Mo-Fr 16:00-22:00, Sa-Su 11:00-22:00">
    <meta itemprop="priceRange" content="$$">
  </div>
</article>

    <!-- 2 KALÚ -->
    <article class="resto_card Pueblo" itemscope itemtype="https://schema.org/CafeOrCoffeeShop">
    <div class="resto_colorband" aria-hidden="true"></div>
    <a href="../../view/gastronomia/kalu/index.php" class="resto_link">
      <figure class="resto_media">
        <img class="resto_cover"
             src="../../view/gastronomia/img/kalu.jpg"
             alt="Kalú Café: origen Sumapaz, arte, sabor y conexión"
             loading="lazy" decoding="async" />
      </figure>
    </a>

    <div class="resto_body">
      <header class="resto_header">
        <h3 class="resto_name" itemprop="name">Kalú</h3>
      </header>

      <p class="resto_location" itemprop="address">En el pueblo</p>
      <p class="resto_desc" itemprop="description">
        En <strong>Kalú</strong> cada taza y cada plato cuentan una historia.
        Un espacio donde el <strong>café de origen Sumapaz</strong> se combina con sabores únicos,
        arte local y conversaciones que despiertan el alma.
        Aquí se celebra la vida entre aromas, risas y buena compañía.
        Tu mesa está lista… el ambiente también.
      </p>

      <ul class="resto_features">
        <li>Almuerzos 12:00 m – 3:00 pm</li>
        <li>Comida rápida y café 5:00 pm – 10:00 pm</li>
      </ul>

      <div class="resto_meta">
        <a class="resto_btn" href="https://wa.me/573123804104?text=Hola%20vengo%20desde%20la%20web%20de%20Kalú%20Café" target="_blank" rel="noopener">WhatsApp</a>
        <a class="resto_btn" href="../../view/gastronomia/kalu/index.php">Ver más</a>
      </div>

      <meta itemprop="openingHours" content="Mo-Su 09:00-22:00">
      <meta itemprop="priceRange" content="$–$$">
    </div>
  </article>

    <!-- 3 PABLO'S RESTAURANT -->
<article class="resto_card Pueblo" itemscope itemtype="https://schema.org/Restaurant">
  <div class="resto_colorband" aria-hidden="true"></div>
  <a href="../../view/gastronomia/Pablos_Restaurant/index.php" class="resto_link">
    <figure class="resto_media">
      <img class="resto_cover"
           src="../../view/gastronomia/img/pablos.jpg"
           alt="Pablo’s Restaurant: tradición y sabor en el parque principal"
           loading="lazy" decoding="async" />
    </figure>
  </a>

  <div class="resto_body">
    <header class="resto_header">
      <h3 class="resto_name" itemprop="name">Pablo's Restaurant</h3>
    </header>

    <p class="resto_location" itemprop="address">En el pueblo</p>
    <p class="resto_desc" itemprop="description">
      Desde <strong>1982</strong>, <strong>Pablo’s Restaurant</strong> es un clásico de Arbeláez:
      un lugar donde la <strong>cocina familiar</strong>, los sabores tradicionales y el buen servicio
      se combinan para ofrecer una experiencia auténtica y acogedora.
      Aquí cada plato cuenta una historia, y cada visita se disfruta como en casa.
    </p>

    <ul class="resto_features">
      <li itemprop="servesCuisine">Cocina colombiana y platos típicos</li>
      <li>Especialidades de la casa</li>
      <li><span itemprop="priceRange">Lun a Dom 7:00 am – 4:00 pm</span></li>
    </ul>

    <div class="resto_meta">
      <a class="resto_btn" href="https://wa.me/573203969152?text=Hola%20vengo%20desde%20la%20web%20de%20Pablo's%20Restaurant" target="_blank" rel="noopener">WhatsApp</a>
      <a class="resto_btn" href="../../view/gastronomia/Pablos_Restaurant/index.php">Ver más</a>
    </div>

    <meta itemprop="openingHours" content="Mo-Su 07:00-16:00">
  </div>
</article>



    <!-- 5 LA MARRANADA -->
    <article class="resto_card Vereda" itemscope itemtype="https://schema.org/Restaurant">
      <div class="resto_colorband" aria-hidden="true"></div>
      <a href="../../view/gastronomia/La_Marranada/index.php" class="resto_link">
        <figure class="resto_media">
          <img class="resto_cover"
               src="../../view/gastronomia/img/logo_lamarranada.jpeg"
               alt="La Marranada Campestre: tradición, sabor y ambiente familiar"
               loading="lazy" decoding="async" />
        </figure>
      </a>

      <div class="resto_body">
        <header class="resto_header">
          <h3 class="resto_name" itemprop="name">La Marranada Campestre</h3>
        </header>

        <p class="resto_location" itemprop="address">En vereda</p>
        <p class="resto_desc" itemprop="description">
          En <strong>La Marranada Campestre</strong> la tradición del cerdo se convierte en arte:
          cortes jugosos, <strong>sabores intensos</strong> y un ambiente campestre que invita a quedarse.
          Aquí el fuego lento y la buena música se mezclan con la naturaleza para crear momentos únicos
          entre familia y amigos.
        </p>

        <ul class="resto_features">
          <li>Viernes  5:00 pm – 9:00 pm</li>
          <li>Sábado  12:00 pm – 9:00 pm</li>
          <li>Domingo  7:00 am – 5:00 pm</li>
        </ul>

        <div class="resto_meta">
          <a class="resto_btn" href="https://wa.me/3022514381?text=Hola%20vengo%20desde%20la%20web%20de%20La%20Marranada%20Campestre" target="_blank" rel="noopener">WhatsApp</a>
          <a class="resto_btn" href="../../view/gastronomia/La_Marranada/index.php">Ver más</a>
        </div>

        <meta itemprop="openingHours" content="Fr 17:00-21:00, Sa 12:00-21:00, Su 07:00-17:00">
      </div>
    </article>


    <!-- 6 El fogon del triangulo -->
    <article class="resto_card Pueblo" itemscope itemtype="https://schema.org/Restaurant">
    <div class="resto_colorband" aria-hidden="true"></div>
    <a href="../../view/gastronomia/El_Fogon_del_Triangulo/index.php" class="resto_link">
      <figure class="resto_media">
        <img class="resto_cover"
             src="../../view/gastronomia/El_Fogon_del_Triangulo/img/logo.png"
             alt="El Fogón del Triángulo: tradición, color y sabor en cada plato"
             loading="lazy" decoding="async" />
      </figure>
    </a>

    <div class="resto_body">
      <header class="resto_header">
        <h3 class="resto_name" itemprop="name">El Fogón del Triángulo</h3>
      </header>

      <p class="resto_location" itemprop="address">En vereda</p>
      <p class="resto_desc" itemprop="description">
        En <strong>El Fogón del Triángulo</strong> se reúnen los <strong>colores, la cultura y la sazón</strong> de nuestra tierra.
        Un lugar donde la comida se comparte, la vista enamora y cada plato celebra la tradición familiar.
        Disfruta sabores típicos hechos con amor, rodeado de naturaleza y la calidez de nuestra gente.
      </p>

      <ul class="resto_features">
        <li itemprop="servesCuisine">Comida típica, asados y platos campesinos</li>
        <li>Fines de semana y festivos 8:30 am – 5:30 pm</li>
        <li><span itemprop="priceRange"></span> Vista panorámica</li>
      </ul>

      <div class="resto_meta">
        <a class="resto_btn" href="https://wa.me/573112595302?text=Hola%20vengo%20desde%20la%20web%20de%20El%20Fogón%20del%20Triángulo" target="_blank" rel="noopener">WhatsApp</a>
        <a class="resto_btn" href="../../view/gastronomia/El_Fogon_del_Triangulo/index.php">Ver más</a>
      </div>

      <meta itemprop="openingHours" content="Mo-Su 08:00-18:00">
      <meta itemprop="priceRange" content="$$">
    </div>
  </article>




  </div>
</section>

  <section class="seccion_img" aria-label="Portada">
      <div class="hero_panel">
        <h1>Elige entre los mejores restaurantes y cafés de Arbeláez</h1>
        <p>Encuentra descripciones, ubicación, especialidades y promociones exclusivas.
           Planea tu próxima salida con sabor local.</p>
      </div>
    </section>
  <script src="../../view/gastronomia/seccion/restaurante.js?v=<?= $jsTime ?>" type="text/javascript"></script>
