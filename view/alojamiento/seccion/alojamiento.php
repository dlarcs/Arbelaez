<?php
$cssTime = filemtime('../../view/alojamiento/seccion/alojamiento.css');

/* Helper WhatsApp */
function wa_link($phoneInt, $alojamiento) {
  $texto = "Hola, vengo desde la web de Alojamiento - $alojamiento";
  return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
}

/* Helper CTA principal */
function get_contact_cta($item) {
  if (($item['reserve']['type'] ?? '') === 'wa' && !empty($item['reserve']['phone'])) {
    return [
      'href'   => wa_link($item['reserve']['phone'], $item['name']),
      'label'  => 'WhatsApp',
      'target' => '_blank',
      'rel'    => 'noopener noreferrer'
    ];
  }

  if (($item['reserve']['type'] ?? '') === 'url' && !empty($item['reserve']['url'])) {
    return [
      'href'   => $item['reserve']['url'],
      'label'  => 'Reservar',
      'target' => '_blank',
      'rel'    => 'noopener noreferrer'
    ];
  }

  return [
    'href'   => '#',
    'label'  => 'WhatsApp',
    'target' => '',
    'rel'    => ''
  ];
}

/* ====== Configuración de alojamientos ====== */
$lodgings = [

  [
    'name'      => 'Cachorros L&C',
    'slug'      => 'Cachorros_LyC',
    'img'       => '../../view/alojamiento/Cachorros_LyC/img/trago1.jpg',
    'img_alt'   => 'Cachorros L&C – zona social',
    'map_url'   => 'https://maps.app.goo.gl/xkrKdHVzuiz2aAg99',
    'distance'  => '15 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573227011059', 'label' => '24 horas'],
    'category'  => 'Rural',
    'desc'      => 'Espacio para acampar y llevar carpa. Ambiente relajado, carne asada los fines de semana, ideal para disfrutar con amigos y con parqueadero disponible.'
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
    'desc'      => '6 huéspedes, 3 habitaciones, 5 camas y 2 baños. Casa rural accesible, en un ambiente privado y seguro, con huerta orgánica y avistamiento de aves.'
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
    'desc'      => 'Piscina pública y alojamiento para 42 huéspedes. Finca campestre con piscina y jacuzzi, rodeada de naturaleza, ideal para descansar o celebrar en familia.'
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
    'desc'      => '12 huéspedes, 3 habitaciones y un mini glamping. Ambiente familiar, cálido y tranquilo para desconectar, con zona BBQ y espacios amplios para compartir.'
  ],
  [
    'name'      => 'La Casita N°2',
    'slug'      => 'La_Casita2',
    'img'       => '../../view/alojamiento/La_Casita2/img/general2.jpg',
    'img_alt'   => 'La Casita – vista general',
    'map_url'   => 'https://maps.app.goo.gl/8iXw4nfoL2ehs9ZR7',
    'distance'  => '7 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573103360964', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => '40 huéspedes, 14 habitaciones en acomodación múltiple y baño privado en cada habitación. Una opción cómoda y disponible las 24 horas.'
  ],
  [
    'name'      => 'Casa Kiyari',
    'slug'      => 'Casa_Kiyari',
    'img'       => '../../view/alojamiento/Casa_Kiyari/img/general1.jpg',
    'img_alt'   => 'Casa Kiyari – vista general',
    'map_url'   => 'https://maps.app.goo.gl/2vw5ETNGfCsFp78LA',
    'distance'  => '20 min 🚶',
    'reserve'   => ['type' => 'wa', 'phone' => '573016677095', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => '6 huéspedes, una habitación con cama doble, dos habitaciones con camas sencillas y 2 baños. También cuenta con espacio para camping y caminata ecológica.'
  ],
  [
    'name'      => 'Casa Colibrí',
    'slug'      => 'Casa_Colibri',
    'img'       => '../../view/alojamiento/Casa_Colibri/img/piscina3.jpeg',
    'img_alt'   => 'Casa Colibrí',
    'map_url'   => 'https://maps.app.goo.gl/J2RYVwmVwmACdmRL7',
    'distance'  => '7 min 🚙',
    'reserve'   => ['type' => 'wa', 'phone' => '573118627750', 'label' => 'Reservar'],
    'category'  => 'Rural',
    'desc'      => 'Piscina privada, capacidad mínima de 10 personas y máxima de 28 en camas compartidas. Incluye habitaciones, cocina integral, hamacas, parqueadero y zona de piscina.'
  ],
];
?>

<link rel="stylesheet" href="../../view/alojamiento/seccion/alojamiento.css?v=<?= $cssTime ?>">

<section class="seccion_alojamiento" aria-label="Alojamientos en Arbeláez">
  <?php foreach ($lodgings as $it):
    $name = htmlspecialchars($it['name'], ENT_QUOTES, 'UTF-8');
    $slug = htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8');
    $img  = htmlspecialchars($it['img'], ENT_QUOTES, 'UTF-8');
    $alt  = htmlspecialchars($it['img_alt'], ENT_QUOTES, 'UTF-8');
    $map  = htmlspecialchars($it['map_url'], ENT_QUOTES, 'UTF-8');
    $dist = htmlspecialchars($it['distance'], ENT_QUOTES, 'UTF-8');
    $cat  = htmlspecialchars($it['category'], ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($it['desc'], ENT_QUOTES, 'UTF-8');

    $detailHref = "../../view/alojamiento/{$slug}/index.php";
    $detailHref = htmlspecialchars($detailHref, ENT_QUOTES, 'UTF-8');

    $cta = get_contact_cta($it);
    $ctaHref   = htmlspecialchars($cta['href'], ENT_QUOTES, 'UTF-8');
    $ctaLabel  = htmlspecialchars($cta['label'], ENT_QUOTES, 'UTF-8');
    $ctaTarget = htmlspecialchars($cta['target'], ENT_QUOTES, 'UTF-8');
    $ctaRel    = htmlspecialchars($cta['rel'], ENT_QUOTES, 'UTF-8');
  ?>
    <article class="card" itemscope itemtype="https://schema.org/LodgingBusiness">
      <figure class="media">
        <a href="<?= $detailHref ?>" rel="noopener" aria-label="Ver más sobre <?= $name ?>">
          <img
            src="<?= $img ?>"
            alt="<?= $alt ?>"
            width="1200"
            height="800"
            loading="lazy"
            decoding="async"
            itemprop="image"
          >
        </a>
      </figure>

      <div class="card-body">
        <div class="card-top">
          <span class="card-category">Alojamiento <?= $cat ?></span>

          <h2 class="card-title" itemprop="name">
            <a href="<?= $detailHref ?>" rel="noopener"><?= $name ?></a>
          </h2>
        </div>

        <ul class="meta">
          <li class="pill">
            <a itemprop="hasMap" href="<?= $map ?>" target="_blank" rel="noopener noreferrer" aria-label="Ver ubicación en el mapa de <?= $name ?>">
              📍 <?= $dist ?>
            </a>
          </li>

          <li class="pill">
            <span>🏷️ <?= $cat ?></span>
          </li>

          <li class="pill">
            <span>🛏️ Hospedaje</span>
          </li>
        </ul>

        <p class="descripcion" itemprop="description"><?= $desc ?></p>

        <div class="card-actions">
          <a
            class="btn-action btn-whatsapp"
            href="<?= $ctaHref ?>"
            <?= $ctaTarget ? 'target="'.$ctaTarget.'"' : '' ?>
            <?= $ctaRel ? 'rel="'.$ctaRel.'"' : '' ?>
            aria-label="<?= $ctaLabel ?> con <?= $name ?>"
          >
            <?= $ctaLabel ?>
          </a>

          <a
            class="btn-action btn-more"
            href="<?= $detailHref ?>"
            rel="noopener"
            aria-label="Ver más sobre <?= $name ?>"
          >
            Ver más
          </a>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</section>
