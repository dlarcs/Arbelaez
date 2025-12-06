<?php
$cssTime = filemtime('../../view/alojamiento/seccion/alojamiento.css');
$jsTime  = filemtime('../../view/alojamiento/seccion/alojamiento.js'); // <-- tu JS real

// Helper WhatsApp (mensaje dinámico por alojamiento)
function wa_link($phoneInt, $alojamiento) {
  $texto = "Hola, vengo desde la web de Alojamiento - $alojamiento";
  return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
}

// ====== Configuración de alojamientos (agrega/edita aquí) ======
$lodgings = [
  [
    'name'      => 'IsraHousSuites',
    'slug'      => 'IsraHousSuites',
    'img'       => '../../view/alojamiento/img/isaraHouse.jpeg',
    'img_alt'   => 'IsraHousSuites – vista del alojamiento',
    'map_url'   => 'https://maps.app.goo.gl/5K3pzDrMt5Bnyfb16',
    'distance'  => '15 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573102443297', 'label' => 'Reservas'],
    'category'  => 'Rural',
    'desc'      => 'Alojamiento campestre hasta 50 personas, con hermosa vista y acceso al río. Zonas comunes cómodas, cocina equipada, BBQ y parqueadero. A 15 minutos a pie del pueblo.'
  ],
  [
    'name'      => 'Cachorros L&C',
    'slug'      => 'Cachorros_LyC',
    'img'       => '../../view/alojamiento/Cachorros_LyC/img/trago1.jpg',
    'img_alt'   => 'Cachorros L&C – zona social',
    'map_url'   => 'https://maps.app.goo.gl/xkrKdHVzuiz2aAg99', // TODO: reemplazar por link real de Google Maps
    'distance'  => '15 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573227011059', 'label' => '24 horas'],
    'category'  => 'Rural',
    'desc'      => 'Espacio para acampar, comer y disfrutar con amigos. Ambiente relajado y parqueadero disponible.'
  ],
  [
    'name'      => 'Turismo Hoy Vivo',
    'slug'      => 'Turismo_Hoy_Vivo',
    'img'       => '../../view/alojamiento/Turismo_Hoy_Vivo/img/Casa_rural1.jpg',
    'img_alt'   => 'Turismo Hoy Vivo – casa rural accesible',
    'map_url'   => 'https://maps.app.goo.gl/TXQtMARmkrDKFDqK8',
    'distance'  => '5 min 🚶',
    'reserve'   => ['type' => 'url', 'url' => 'https://www.airbnb.com.co/rooms/47158905', 'label' => 'airbnb'],
    'category'  => 'Rural',
    'desc'      => 'Casa rural accesible, en ambiente privado y seguro. Huerta orgánica y avistamiento de aves.'
  ],
  [
    'name'      => 'La Rinconada',
    'slug'      => 'La_Rinconada',
    'img'       => '../../view/alojamiento/La_Rinconada/img/piscina1.jpeg',
    'img_alt'   => 'La Rinconada – piscina y zona de descanso',
    'map_url'   => 'https://maps.app.goo.gl/trEuugwLTvhcBjiy7',
    'distance'  => '5 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573007804430', 'label' => 'Reservas'],
    'category'  => 'Rural',
    'desc'      => 'Alojamiento campestre con piscina y jacuzzi, rodeado de naturaleza. Ideal para descansar o celebrar en familia.'
  ],
  [
    'name'      => 'Casa Kandu',
    'slug'      => 'Casa_Kandu',
    'img'       => '../../view/alojamiento/img/casa_kandu.jpg',
    'img_alt'   => 'Casa Kandu – fachada',
    'map_url'   => 'https://maps.app.goo.gl/vWRWkRYyF1AXHdXs6',
    'distance'  => '15 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573112250633', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => 'Ambiente familiar, cálido y tranquilo para desconectar y respirar aire puro. Zona BBQ y espacios amplios para compartir.'
  ],
  [
    'name'      => 'Los Altos',
    'slug'      => 'Los_Altos',
    'img'       => '../../view/alojamiento/Los_Altos/img/general11.jpg',
    'img_alt'   => 'Los Altos – vista general',
    'map_url'   => 'https://maps.app.goo.gl/8iXw4nfoL2ehs9ZR7',
    'distance'  => '15 min ',
    'reserve'   => ['type' => 'wa', 'phone' => '573132120224', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => 'Alojamiento campestre con espacios amplios, jacuzzi, zona de BBQ y ambiente familiar para descansar o compartir con amigos.'
  ],
  [
    'name'      => 'La Casita N°2',
    'slug'      => 'view/alojamiento/La_Casita2',
    'img'       => '../../view/alojamiento/La_Casita2/img/general2.jpg',
    'img_alt'   => 'Los Altos – vista general',
    'map_url'   => 'https://maps.app.goo.gl/8iXw4nfoL2ehs9ZR7',
    'distance'  => '7 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573103360964', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => 'Alojamiento comodo y accesible, en el pueblo de arbelaez, la mejor opción 24 horas.'
  ],
];
?>

<link rel="stylesheet" href="../../view/alojamiento/seccion/alojamiento.css?v=<?= $cssTime ?>">

<section class="seccion_alojamiento">
  <?php foreach ($lodgings as $it):
    // Sanitización básica
    $name = htmlspecialchars($it['name'], ENT_QUOTES, 'UTF-8');
    $slug = htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8');
    $img  = htmlspecialchars($it['img'], ENT_QUOTES, 'UTF-8');
    $alt  = htmlspecialchars($it['img_alt'], ENT_QUOTES, 'UTF-8');
    $map  = htmlspecialchars($it['map_url'], ENT_QUOTES, 'UTF-8');
    $dist = htmlspecialchars($it['distance'], ENT_QUOTES, 'UTF-8');
    $cat  = htmlspecialchars($it['category'], ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($it['desc'], ENT_QUOTES, 'UTF-8');

    // Link principal a la ficha
    $detailHref = "../../view/alojamiento/{$slug}/index.php";
    $detailHref = htmlspecialchars($detailHref, ENT_QUOTES, 'UTF-8');
  ?>
  <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
    <header>
      <h2 class="card-title" itemprop="name">
        <a href="<?= $detailHref ?>" rel="noopener"><?= $name ?></a>
      </h2>
    </header>

    <figure class="media" itemprop="image">
      <a href="<?= $detailHref ?>" rel="noopener">
        <img src="<?= $img ?>" alt="<?= $alt ?>" width="1200" height="800" loading="lazy" decoding="async">
      </a>
    </figure>

    <ul class="meta">
      <li class="pill">
        <a itemprop="hasMap" href="<?= $map ?>" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa de <?= $name ?>">
          📍 <?= $dist ?>
        </a>
      </li>

      <li class="pill">
        <?php if ($it['reserve']['type'] === 'wa'):
          $wa = wa_link($it['reserve']['phone'], $it['name']);
          $wa = htmlspecialchars($wa, ENT_QUOTES, 'UTF-8');
          $label = htmlspecialchars($it['reserve']['label'], ENT_QUOTES, 'UTF-8');
        ?>
          <a href="<?= $wa ?>" target="_blank" rel="noopener noreferrer" aria-label="Chatear por WhatsApp con <?= $name ?>">
            🕑 <?= $label ?>
          </a>
        <?php else:
          $url   = htmlspecialchars($it['reserve']['url'], ENT_QUOTES, 'UTF-8');
          $label = htmlspecialchars($it['reserve']['label'], ENT_QUOTES, 'UTF-8');
        ?>
          <a href="<?= $url ?>" target="_blank" rel="noopener noreferrer" aria-label="Abrir reservas de <?= $name ?>">
            🕑 <?= $label ?>
          </a>
        <?php endif; ?>
      </li>

      <li class="pill">
        <a href="<?= $detailHref ?>" rel="noopener" aria-label="Ver categoría del alojamiento">
          🏷️ <?= $cat ?>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description"><?= $desc ?></p>
  </article>
  <?php endforeach; ?>
</section>

<script src="../../view/alojamiento/seccion/alojamiento.js?v=<?= $jsTime ?>" type="text/javascript"></script>
