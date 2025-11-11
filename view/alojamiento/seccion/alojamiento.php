<?php
$cssTime = filemtime('../../view/alojamiento/seccion/alojamiento.css');
$jsTime  = filemtime('../../view/alojamiento/seccion/alojamiento.js'); // <-- añade tu JS real

// Helper para WhatsApp (mensaje dinámico por alojamiento)
function wa_link($phoneInt, $alojamiento) {
  $texto = "Hola vengo desde la web de Alojamiento - $alojamiento";
  return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
}
?>
<link rel="stylesheet" href="../../view/alojamiento/seccion/alojamiento.css?v=<?= $cssTime ?>">

<section class="seccion_alojamiento">
  <!-- Card 1 IsaHouseSuites-->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="../../view/alojamiento/IsraHousSuites/index.php" rel="noopener">IsraHousSuites</a>
      </h2>
    </header>
    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/IsraHousSuites/index.php" rel="noopener">
        <img src="../../view/alojamiento/img/isaraHouse.jpeg" alt="IsraHousSuites - vista del alojamiento">
      </a>
    </figure>
    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.app.goo.gl/5K3pzDrMt5Bnyfb16" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 15 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573102443297', 'IsraHousSuites') ?>"  target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp con IsraHousSuites">
          <span itemprop="openingHours">🕑 Reservas</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/IsraHousSuites/index.php" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description">
      Alojamiento campestre para máximo 50 personas, con hermosa vista y acceso directo al río, a solo 15 minutos a pie del pueblo.
      Ofrece zonas comunes cómodas, cocina equipada y área de parrilladas, además de parqueadero.
    </p>
  </article>
  <!-- Card 2 Cachorros L&C -->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="../../view/alojamiento/Cachorros_LyC/index.php">Cachorros L&C</a>
      </h2>
    </header>
    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/Cachorros_LyC/index.php" rel="noopener">
        <img src="../../view/alojamiento/Cachorros_LyC/img/trago1.jpg" alt="Cachorros LyC">
      </a>
    </figure>
    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="Link de google maps" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 15 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573102443287', 'Cachorros L&C') ?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp con Cachorros L&C">
          <span itemprop="openingHours">🕑 24 horas</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/Cachorros_LyC/index.php" rel="noopener" aria-label="Ver categoría: Cabañas">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>
    <p class="descripcion" itemprop="description">

      Para acampar, comer y tomar. Un espacio perfecto para relajarte, compartir con amigos y disfrutar de unas cuantas en buena compañía.
      Cuenta con parqueadero, ideal para pasar un rato agradable sin preocupaciones.
    </p>
  </article>
  <!-- Card 3 Turismo Hoy vivo Casa Rural Accesible -->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="../../view/alojamiento/Turismo_Hoy_Vivo/index.php" rel="noopener">Turismo Hoy Vivo</a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/Turismo_Hoy_Vivo/index.php" rel="noopener">
        <img src="../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg" alt="Turismo hoy vivo ">
      </a>
    </figure>
    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.app.goo.gl/f1chLdpw8PJSa8sh9" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 5 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="https://www.airbnb.com.co/rooms/47158905"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="Abrir Airbnb: Turismo Hoy Vivo Casa Rural Accesible">
          <span itemprop="openingHours">🕑 Reservas</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/Turismo_Hoy_Vivo/index.php" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>
    <p class="descripcion" itemprop="description">
       Casa Rural Accesible en un ambiente privado y seguro, rodeada de naturaleza.
        Huerta orgánica y avistamiento de aves.
    </p>
  </article>
  <!-- Card 4 La Rinconada -->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="../../view/alojamiento/La_Rinconada/index.php" rel="noopener">La Rinconada</a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/La_Rinconada/index.php" rel="noopener">
        <img src="../../../view/alojamiento/La_Rinconada/img/piscina1.jpeg" alt="La Rinconada - piscina y zona de descanso">
      </a>
    </figure>

    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.google.com/?q=La%20Rinconada%20Arbel%C3%A1ez%20Cundinamarca" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 5 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573007804430', 'La Rinconada')?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp con La Rinconada">
          <span itemprop="openingHours">🕑 Reservas</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/La_Rinconada/index.php" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>
    <p class="descripcion" itemprop="description">
      Alojamiento campestre con piscina y jacuzzi, rodeada de naturaleza para desconectar.
      Ambiente familiar, seguro y acogedor, ideal para descansar o celebrar.
    </p>
  </article>

  <!-- Card 5 Casa kandu-->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="view/alojamiento/Casa_Kandu/index.php">Casa Kandu</a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/Casa_Kandu/index.php" rel="noopener">
        <img src="../../view/alojamiento/img/casa_kandu.jpg" alt="Apartado">
      </a>
    </figure>

    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.app.goo.gl/8iXw4nfoL2ehs9ZR7" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 15 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573112250633', 'Alojamiento Casa Kandu') ?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp Casa Kandu">
          <span itemprop="openingHours">🕑 Reservar</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/Casa_Kandu/index.php" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description">
Ambiente familiar, cálido y tranquilo, ideal para desconectar y respirar aire puro.
Con zona de BBQ y espacios amplios para compartir en familia, con amigos o en pareja.
    </p>
  </article>
  <!-- Card 6 Casa kandu-->
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="#">Los Altos</a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="#" rel="noopener">
        <img src="../../view/alojamiento/Los_Altos/img/ejemplo.jpeg" alt="Apartado">
      </a>
    </figure>

    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.app.goo.gl/8iXw4nfoL2ehs9ZR7" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 15 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573112250633', 'Alojamiento Casa Kandu') ?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp Los altos">
          <span itemprop="openingHours">🕑 Reservar</span>
        </a>
      </li>
      <li class="pill">
        <a href="#" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description">
  Ambiente familiar, cálido y tranquilo, ideal para desconectar y respirar aire puro.
  Con zona de BBQ y espacios amplios para compartir en familia, con amigos o en pareja.
    </p>
  </article>
  <!-- <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="../../view/alojamiento/Casa_Colibri/index.php">Casa Colibrí</a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="../../view/alojamiento/Casa_Colibri/index.php" rel="noopener">
        <img src="../../view/alojamiento/img/casaColibri.jpeg" alt="Casa Colibrí - imagen del alojamiento">
      </a>
    </figure>

    <ul class="meta">
      <li class="pill">
        <a itemprop="address" href="https://maps.app.goo.gl/qq4ekGBdLoD2JRR68" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa">
          📍 20 min 🚶
        </a>
      </li>
      <li class="pill">
        <a href="<?= wa_link('573118627750', 'Casa Colibrí') ?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp con Casa Colibrí">
          <span itemprop="openingHours">🕑 Reservas</span>
        </a>
      </li>
      <li class="pill">
        <a href="../../view/alojamiento/Casa_Colibri/index.php" rel="noopener" aria-label="Ver categoría: Alojamiento">
          🏷️ <span itemprop="additionalType">Rural</span>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description">
      Alojamiento campestre, piscina, vista panorámica.
      Y un ambiente familiar y en parereja ademas de reuniones importantes.
    </p>
  </article> -->
</section>
<script src="../../view/alojamiento/seccion/alojamiento.js?v=<?= $jsTime ?>" type="text/javascript"></script>
