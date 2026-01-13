<?php
$cssPath = '../../view/home/activ/activ.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo

?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="arb-cats" aria-label="Categorías Arbelaez.com.co">
  <p class="arb-kicker">Categorías</p>
  <h2 class="arb-title">Lo que el pueblo ofrece</h2>
  <p class="arb-lead">
    Cada rincón guarda historias de maestría y dedicación. Desde los talleres hasta las mesas,
    todo refleja la esencia de quienes viven aquí.
  </p>

  <div class="arb-box">
    <!-- Tabs (solo CSS) -->
    <div class="arb-tabs" role="tablist" aria-label="Categorías">
      <input checked type="radio" name="tab" id="tab-artesanias" class="arb-tab" />
      <label for="tab-artesanias" class="arb-tab-label" role="tab">Artesanías</label>

      <input type="radio" name="tab" id="tab-alojamientos" class="arb-tab" />
      <label for="tab-alojamientos" class="arb-tab-label" role="tab">Alojamientos</label>

      <input type="radio" name="tab" id="tab-gastronomia" class="arb-tab" />
      <label for="tab-gastronomia" class="arb-tab-label" role="tab">Gastronomía</label>

      <input type="radio" name="tab" id="tab-turismo" class="arb-tab" />
      <label for="tab-turismo" class="arb-tab-label" role="tab">Turismo</label>

      <input type="radio" name="tab" id="tab-naturaleza" class="arb-tab" />
      <label for="tab-naturaleza" class="arb-tab-label" role="tab">Naturaleza</label>

      <input type="radio" name="tab" id="tab-mas" class="arb-tab" />
      <label for="tab-mas" class="arb-tab-label" role="tab">Más</label>

      <!-- Panels -->
      <div class="arb-panels">
        <!-- Artesanías -->
        <article class="arb-panel arb-panel--artesanias" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Artesanías</span>
            <h3 class="arb-h3">Manos que crean, corazones que preservan tradiciones</h3>
            <p class="arb-p">
              En Arbelaez.com.co mostramos a los artesanos locales con fichas completas: título, logo,
              slider, galería, “Acerca de nosotros”, mapa y redes sociales para impulsar su visibilidad.
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver artesanías">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1520975958225-18e3ed8a7b61?auto=format&fit=crop&w=1200&q=70"
              alt="Artesanías locales"
              loading="lazy"
            />
          </div>
        </article>

        <!-- Alojamientos -->
        <article class="arb-panel arb-panel--alojamientos" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Alojamientos</span>
            <h3 class="arb-h3">Hospedajes con encanto para descansar y volver</h3>
            <p class="arb-p">
              Promovemos alojamientos del pueblo y veredas con páginas individuales:
              menú, slider, galería, descripción, Google Maps y enlaces directos a WhatsApp y redes.
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver alojamientos">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1200&q=70"
              alt="Alojamiento en Arbelaez"
              loading="lazy"
            />
          </div>
        </article>

        <!-- Gastronomía -->
        <article class="arb-panel arb-panel--gastronomia" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Gastronomía</span>
            <h3 class="arb-h3">Sabores del pueblo: recetas, familias y tradición</h3>
            <p class="arb-p">
              Difundimos restaurantes y emprendimientos gastronómicos con fotografía, menú, historia,
              ubicación y enlaces a sus redes para que más personas los conozcan.
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver gastronomía">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1200&q=70"
              alt="Gastronomía local"
              loading="lazy"
            />
          </div>
        </article>

        <!-- Turismo -->
        <article class="arb-panel arb-panel--turismo" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Turismo</span>
            <h3 class="arb-h3">Experiencias locales para visitar, aprender y compartir</h3>
            <p class="arb-p">
              Arbelaez.com.co funciona como una vitrina digital para promover lo mejor del municipio:
              rutas, sitios, planes y experiencias para público nacional e internacional.
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver turismo">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=70"
              alt="Turismo en Arbelaez"
              loading="lazy"
            />
          </div>
        </article>

        <!-- Naturaleza -->
        <article class="arb-panel arb-panel--naturaleza" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Naturaleza</span>
            <h3 class="arb-h3">Paisajes, veredas y aire puro para reconectar</h3>
            <p class="arb-p">
              Mostramos lugares naturales, caminatas y planes al aire libre, incluyendo sitios del pueblo
              y veredas que aportan al progreso del turismo.
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver naturaleza">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1200&q=70"
              alt="Naturaleza"
              loading="lazy"
            />
          </div>
        </article>

        <!-- Más -->
        <article class="arb-panel arb-panel--mas" role="tabpanel">
          <div class="arb-panel__text">
            <span class="arb-eyebrow">Más</span>
            <h3 class="arb-h3">Asociaciones, fundaciones, historia y eventos</h3>
            <p class="arb-p">
              También impulsamos asociaciones y fundaciones, la historia del municipio y una galería de eventos.
              Además, hacemos campañas como el <strong>Tour Burger Arbeláez</strong> y proyectos comunitarios
              (murales y actividades culturales como la filarmónica).
            </p>

            <div class="arb-cta-row">
              <a class="arb-cta" href="#" aria-label="Ver más">
                <span>Ver</span>
                <span class="arb-cta__arrow">→</span>
              </a>
              <span class="arb-cta-mini" aria-hidden="true">›</span>
            </div>
          </div>

          <div class="arb-panel__media">
            <img
              src="https://images.unsplash.com/photo-1515165562835-c3b8b43754b6?auto=format&fit=crop&w=1200&q=70"
              alt="Eventos y comunidad"
              loading="lazy"
            />
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
