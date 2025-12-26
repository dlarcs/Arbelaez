<?php
$cssTime = filemtime('../../view/emprendimientos/seccion/emprendimientos.css');
$jsTime  = filemtime('../../view/Emprendimientos/seccion/Emprendimientos.js'); // ✅ JS real

// Helper WhatsApp (mensaje dinámico por emprendimiento)
function wa_link($phoneInt, $emprendimiento) {
  $texto = "Hola, vengo desde Arbeláez.com.co — Emprendimientos: $emprendimiento";
  return "https://wa.me/{$phoneInt}?text=" . rawurlencode($texto);
}

/* ====== Configuración de EMPRENDIMIENTOS (edita aquí) ======
   1) Artesanas
   2-4) Emprendedores con actividades únicas
*/
$emprendimientos = [

  // 1) ARTESANAS
  [
    'name'      => 'Artesanas de las Veredas (Tejidos & Hecho a Mano)',
    'slug'      => 'Artesanas_Veredas',
    'img'       => '../../view/Emprendimientos/Artesanas_Veredas/img/general1.jpg',
    'img_alt'   => 'Artesanas de las veredas – productos hechos a mano',
    'map_url'   => 'https://maps.app.goo.gl/REEMPLAZAR_MAPA_1',
    'distance'  => 'Centro / Veredas 🧵',
    'reserve'   => ['type' => 'url', 'url' => 'https://www.instagram.com/arbelaez_turismo/', 'label' => 'Ver catálogo'],
    'category'  => 'Artesanías',
    'desc'      => 'Colectivo de artesanas que transforma tradición en piezas únicas: tejidos, detalles para el hogar y regalos hechos a mano. Puedes conocer sus procesos, encargar productos personalizados y apoyar el talento local de Arbeláez y sus veredas.'
  ],

  // 2) EMPRENDEDORES
  [
    'name'      => 'Ruta Local de Sabores (Gastronomía y Experiencias)',
    'slug'      => 'Ruta_Sabores',
    'img'       => '../../view/Emprendimientos/Ruta_Sabores/img/general1.jpg',
    'img_alt'   => 'Ruta de sabores – gastronomía local en Arbeláez',
    'map_url'   => 'https://maps.app.goo.gl/REEMPLAZAR_MAPA_2',
    'distance'  => 'Zona urbana 🍽️',
    'reserve'   => ['type' => 'url', 'url' => 'https://www.instagram.com/arbelaez_turismo/', 'label' => 'Ver opciones'],
    'category'  => 'Gastronomía',
    'desc'      => 'Emprendedores gastronómicos que ofrecen platos locales, recetas tradicionales y propuestas creativas. Ideal para armar tu plan: dónde comer, qué probar, recomendaciones del día y experiencias para compartir en pareja, familia o con amigos.'
  ],

  // 3) EMPRENDEDORES
  [
    'name'      => 'Guías de Naturaleza Arbeláez (Senderos & Avistamiento)',
    'slug'      => 'Guias_Naturaleza',
    'img'       => '../../view/Emprendimientos/Guias_Naturaleza/img/general1.jpg',
    'img_alt'   => 'Guías de naturaleza – senderos y avistamiento en Arbeláez',
    'map_url'   => 'https://maps.app.goo.gl/REEMPLAZAR_MAPA_3',
    'distance'  => 'Rutas cercanas 🌿',
    'reserve'   => ['type' => 'url', 'url' => 'https://www.instagram.com/arbelaez_turismo/', 'label' => 'Agendar recorrido'],
    'category'  => 'Naturaleza',
    'desc'      => 'Emprendedores que guían caminatas ecológicas, rutas de miradores y experiencias de avistamiento. Perfecto para visitantes que quieren conocer paisajes, historias del territorio y recomendaciones seguras para explorar Arbeláez.'
  ],

  // 4) EMPRENDEDORES
  [
    'name'      => 'Taller Creativo (Madera, Guadua & Decoración)',
    'slug'      => 'Taller_Creativo',
    'img'       => '../../view/Emprendimientos/Taller_Creativo/img/general1.jpg',
    'img_alt'   => 'Taller creativo – productos en madera y guadua',
    'map_url'   => 'https://maps.app.goo.gl/REEMPLAZAR_MAPA_4',
    'distance'  => 'Hecho en Arbeláez 🪵',
    'reserve'   => ['type' => 'url', 'url' => 'https://www.instagram.com/arbelaez_turismo/', 'label' => 'Cotizar'],
    'category'  => 'Emprendimiento',
    'desc'      => 'Emprendedores que crean piezas decorativas y funcionales en madera y guadua: letreros, soportes, detalles personalizados y productos para hogar o negocio. Puedes pedir diseños a medida y apoyar producción local con identidad.'
  ],
];
?>

<link rel="stylesheet" href="../../view/emprendimientos/seccion/emprendimientos.css?v=<?= $cssTime ?>">

<section class="seccion_Emprendimientos">
  <?php foreach ($emprendimientos as $it):
    $name = htmlspecialchars($it['name'], ENT_QUOTES, 'UTF-8');
    $slug = htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8');
    $img  = htmlspecialchars($it['img'], ENT_QUOTES, 'UTF-8');
    $alt  = htmlspecialchars($it['img_alt'], ENT_QUOTES, 'UTF-8');
    $map  = htmlspecialchars($it['map_url'], ENT_QUOTES, 'UTF-8');
    $dist = htmlspecialchars($it['distance'], ENT_QUOTES, 'UTF-8');
    $cat  = htmlspecialchars($it['category'], ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($it['desc'], ENT_QUOTES, 'UTF-8');

    $detailHref = "../../view/Emprendimientos/{$slug}/index.php";
    $detailHref = htmlspecialchars($detailHref, ENT_QUOTES, 'UTF-8');
  ?>
  <article class="card" itemscope itemtype="https://schema.org/LocalBusiness">
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
          <a href="<?= $url ?>" target="_blank" rel="noopener noreferrer" aria-label="Abrir contacto de <?= $name ?>">
            🕑 <?= $label ?>
          </a>
        <?php endif; ?>
      </li>

      <li class="pill">
        <a href="<?= $detailHref ?>" rel="noopener" aria-label="Ver categoría del emprendimiento">
          🏷️ <?= $cat ?>
        </a>
      </li>
    </ul>

    <p class="descripcion" itemprop="description"><?= $desc ?></p>
  </article>
  <?php endforeach; ?>
</section>
