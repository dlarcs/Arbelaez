<?php
/* =========================
   CSS cache-busting
========================= */
$cssTime = filemtime('../../view/Proyectos/galery/arte.css');
?>
<link rel="stylesheet" href="../../view/Proyectos/galery/arte.css?v=<?= $cssTime ?>">

<?php
/* =========================
   DATA: Actividades / Proyectos
   Campos: titulo, dirigido, lugar, foto, pdf, descripcion
========================= */
$items = [

  [
    "name"     => "TourBurger Arbeláez",
    "dirigido" => "Visitantes, familias, jóvenes, amantes de la gastronomía y negocios participantes del TourBurger.",
    "place"    => "Arbeláez • Cundinamarca (rutas por los puntos participantes)",
    "img"      => "../../view/Proyectos/img/tour.jpeg",
    "img_alt"  => "TourBurger Arbeláez - ruta gastronómica",
    "desc"     => "Ruta gastronómica para impulsar los negocios locales: las personas visitan varios puntos, prueban diferentes hamburguesas, sellan su “pasaporte” y votan por sus favoritas. El objetivo es aumentar el turismo, las ventas y la visibilidad de Arbeláez con una actividad divertida, familiar y de alto impacto.",
    "pdf"      => "../../view/Proyectos/pdf/TourBurger.pdf",
  ],

  [
    "name"     => "Arbeláez se llena de color (por etapas)",
    "dirigido" => "Propietarios de casas y negocios de Arbeláez (prioridad participantes de arbelaez.com.co), voluntarios, artistas, diseñadora y comunidad en general.",
    "place"    => "Arbeláez • casco urbano y veredas (según etapas y selección)",
    "img"      => "../../view/Proyectos/img/color.png",
    "img_alt"  => "Arbeláez se llena de color - murales y fachadas",
    "desc"     => "Proyecto por etapas para embellecer Arbeláez con murales y pintura de fachadas. Se realiza una rifa para recaudar fondos y cubrir materiales, mano de obra, diseñadora y artista. Pasos: base de datos de participantes, toma de medidas de fachadas, definición de si lleva mural o solo pintura, selección de paleta (8 colores) y temáticas (mínimo 8 temas), impresión de 1.000 boletas y entrega de premios (premio mayor: mural de 1 m² + pintura; y varios “secos” con premios aportados por negocios como almuerzos, pasadías y artesanías).",
    "pdf"      => "../../view/Proyectos/pdf/arbelaez-se-llena-de-color.pdf",
  ],

  [
    "name"     => "Colegios, universidades y/o empresas",
    "dirigido" => "Colegios, universidades (especialmente de Fusagasugá) y empresas para salidas pedagógicas, bienestar, voluntariado, integración y turismo cultural.",
    "place"    => "Arbeláez • Cundinamarca (agenda cultural, rutas y experiencias)",
    "img"      => "../../view/Proyectos/img/actividades.png",
    "img_alt"  => "Alianzas con colegios, universidades y empresas - turismo cultural",
    "desc"     => "Estrategia para atraer grupos organizados a Arbeláez mediante experiencias: recorridos turísticos, actividades culturales, ferias, gastronomía local, talleres con artesanas y jornadas de voluntariado. La meta es generar flujo constante de visitantes y oportunidades para los emprendimientos del municipio.",
    "pdf"      => "../../view/Proyectos/pdf/alianzas-colegios-universidades-empresas.pdf",
  ],
  [
    "name"     => "Visitas y alianzas con colegios, universidades y empresas",
    "dirigido" => "Colegios, universidades (especialmente de Fusagasugá) y empresas para salidas pedagógicas, bienestar, voluntariado, integración y turismo cultural.",
    "place"    => "Arbeláez • Cundinamarca (agenda cultural, rutas y experiencias)",
    "img"      => "../../view/Proyectos/img/actividades.png",
    "img_alt"  => "Alianzas con colegios, universidades y empresas - turismo cultural",
    "desc"     => "Estrategia para atraer grupos organizados a Arbeláez mediante experiencias: recorridos turísticos, actividades culturales, ferias, gastronomía local, talleres con artesanas y jornadas de voluntariado. La meta es generar flujo constante de visitantes y oportunidades para los emprendimientos del municipio.",
    "pdf"      => "../../view/Proyectos/pdf/alianzas-colegios-universidades-empresas.pdf",
  ],
];
?>

<section class="section_food_gallery" id="proyectos_actividades">
  <?php foreach($items as $it):
    $name     = htmlspecialchars($it["name"] ?? '', ENT_QUOTES, "UTF-8");
    $dirigido = htmlspecialchars($it["dirigido"] ?? '', ENT_QUOTES, "UTF-8");
    $place    = htmlspecialchars($it["place"] ?? '', ENT_QUOTES, "UTF-8");
    $img      = htmlspecialchars($it["img"] ?? '', ENT_QUOTES, "UTF-8");
    $alt      = htmlspecialchars($it["img_alt"] ?? '', ENT_QUOTES, "UTF-8");
    $desc     = htmlspecialchars($it["desc"] ?? '', ENT_QUOTES, "UTF-8");
    $pdf      = htmlspecialchars($it["pdf"] ?? '', ENT_QUOTES, "UTF-8");
  ?>
    <article class="ficha">

      <header class="ficha__header">
        <h2 class="ficha__title"><?= $name ?></h2>

        <?php if($dirigido): ?>
          <p class="ficha__target">🎯 <strong>Dirigido a:</strong> <?= $dirigido ?></p>
        <?php endif; ?>

        <?php if($place): ?>
          <p class="ficha__place">📍 <?= $place ?></p>
        <?php endif; ?>
      </header>

      <figure class="ficha__media">
        <img src="<?= $img ?>" alt="<?= $alt ?>" loading="lazy" decoding="async">
      </figure>

      <p class="ficha__desc"><?= $desc ?></p>

      <?php if($pdf): ?>
        <a class="btn btn--pdf" href="<?= $pdf ?>" download>
          <svg viewBox="0 0 24 24" aria-hidden="true" class="btn__icon">
            <path d="M12 3a1 1 0 0 1 1 1v9.59l2.3-2.3a1 1 0 1 1 1.4 1.42l-4.01 4a1 1 0 0 1-1.4 0l-4.01-4a1 1 0 1 1 1.4-1.42L11 13.59V4a1 1 0 0 1 1-1zM5 19a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1z"/>
          </svg>
          Descargar PDF
        </a>
      <?php endif; ?>

    </article>
  <?php endforeach; ?>
</section>

<script>
(function(){
  function setupReadMore(){
    const descs = document.querySelectorAll(".ficha__desc");

    descs.forEach(desc => {
      let btn = desc.nextElementSibling;
      const already = btn && btn.classList && btn.classList.contains("desc-toggle");

      if (!already){
        btn = document.createElement("button");
        btn.type = "button";
        btn.className = "desc-toggle";
        btn.textContent = "Leer más";
        btn.setAttribute("aria-expanded", "false");
        desc.insertAdjacentElement("afterend", btn);

        btn.addEventListener("click", () => {
          const expanded = desc.classList.toggle("is-expanded");
          btn.textContent = expanded ? "Ocultar" : "Leer más";
          btn.setAttribute("aria-expanded", expanded ? "true" : "false");
        });
      }

      desc.classList.remove("is-expanded");
      btn.textContent = "Leer más";
      btn.setAttribute("aria-expanded", "false");

      requestAnimationFrame(() => {
        const needsToggle = desc.scrollHeight > desc.clientHeight + 1;
        btn.classList.toggle("is-visible", needsToggle);
      });
    });
  }

  window.addEventListener("load", setupReadMore);
  window.addEventListener("resize", () => {
    clearTimeout(window.__rmT);
    window.__rmT = setTimeout(setupReadMore, 150);
  });
})();
</script>
