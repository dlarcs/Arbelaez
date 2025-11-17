<?php
$cssTime = filemtime('../../view/home/TourBurguer/Burguer.css');
$jsTime  = filemtime('../../view/home/TourBurguer/Burguer.js');
?>
<link rel="stylesheet" href="../../view/home/TourBurguer/Burguer.css?v=<?= $cssTime ?>">

<!-- =========================
  SECTION: TOURBURGER ARBELÁEZ
========================= -->
<section class="tourburger" id="tourburger">
  <div class="tourburger__inner">
    <!-- Bloque principal: info + imagen -->
    <div class="tourburger__hero">
      <div class="tourburger__text">
        <h2 class="tourburger__title">TourBurger Arbeláez</h2>
        <p class="tourburger__subtitle">
          Ruta gastronómica de hamburguesas Arbelaences
        </p>
        <p class="tourburger__dates">
          Del <strong>16</strong> al <strong>28 de diciembre</strong>
        </p>
        <p class="tourburger__description">
          Visita los locales aliados, pide la <strong>TourBurger</strong>,
          completa tu tarjetón y participa por increíbles premios.
        </p>

        <div class="tourburger__cta">
          <button class="btn btn--outline" type="button" data-open-modal>
            Ver términos y condiciones
          </button>
        </div>
      </div>

      <figure class="tourburger__image-wrapper">
        <!-- Cambia la ruta por la imagen que quieras usar -->
        <img
          src="../../view/gastronomia/La_Marranada/img/especial5.jpg"
          alt="Hamburguesa artesanal del TourBurger Arbeláez"
          class="tourburger__image"
          loading="lazy"
        >
      </figure>
    </div>

    <!-- Locales participantes -->
    <div class="tourburger__places" aria-label="Locales participantes">
      <!-- CARD 1 -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">Kalú Café Resto-Bar</h3>
        <p class="tourburger-card__details">
          Arbeláez, Cundinamarca — Ambiente familiar y hamburguesa TourBurger Kalú.
        </p>
        <div class="tourburger-card__actions">
          <!-- Reemplaza por el número real -->
          <a
            href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <!-- Reemplaza por el enlace real de Maps -->
          <a
            href="https://maps.app.goo.gl/6jA4Quw4p3FkPY8Y8"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>

      <!-- CARD 2 -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">KapaLuna 360°</h3>
        <p class="tourburger-card__details">
          Arbeláez, Cundinamarca — Vista panorámica y TourBurger parrillera.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573024229260?text=Hola%2C%20quiero%20reservar%20para%20el%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/wbGNcZNAbQ9SudKQ9"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>

      <!-- CARD 3 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">Café & Burger Parque</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
      <!-- CARD 4 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">Huerto</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
      <!-- CARD 5 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">El garage</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
      <!-- CARD 6 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">La marranada</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
      <!-- CARD 7 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">Hamburguesas</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
      <!-- CARD 3 (ejemplo, duplica y ajusta según locales) -->
      <article class="tourburger-card">
        <h3 class="tourburger-card__name">Casa Campestre</h3>
        <p class="tourburger-card__details">
          Al frente del parque principal — TourBurger con sabor artesanal y toques de café.
        </p>
        <div class="tourburger-card__actions">
          <a
            href="https://wa.me/573007778899?text=Hola%2C%20quiero%20probar%20la%20TourBurger"
            class="btn btn--primary"
            target="_blank"
            rel="noopener noreferrer"
          >
            Contacto
          </a>
          <a
            href="https://maps.app.goo.gl/xxxxxxxx"
            class="btn btn--ghost"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cómo llegar
          </a>
        </div>
      </article>
    </div>
  </div>

  <!-- MODAL TÉRMINOS Y CONDICIONES -->
  <div
    class="tourburger-modal"
    id="tourburger-terms"
    aria-hidden="true"
  >
    <div class="tourburger-modal__overlay" data-close-modal></div>

    <div
      class="tourburger-modal__dialog"
      role="dialog"
      aria-modal="true"
      aria-labelledby="tourburger-terms-title"
    >
      <button
        class="tourburger-modal__close"
        type="button"
        aria-label="Cerrar términos y condiciones"
        data-close-modal
      >
        ×
      </button>

      <h3 class="tourburger-modal__title" id="tourburger-terms-title">
        Términos y condiciones — TourBurger Arbeláez
      </h3>

      <div class="tourburger-modal__content">
        <ol>
          <li>
            La actividad es válida del <strong>16 al 28 de diciembre</strong> en
            los locales aliados de Arbeláez, Cundinamarca.
          </li>
          <li>
            Para participar en el sorteo, la persona debe completar el
            tarjetón con los sellos de todos los locales participantes.
          </li>
          <li>
            Cada tarjetón es personal e intransferible. Solo se permite
            un tarjetón válido por participante.
          </li>
          <li>
            Los premios consisten en pasadía, piscina y almuerzo para dos personas,
            según las condiciones informadas en las redes de
            <strong>@arbelaez_turismo</strong>.
          </li>
          <li>
            La fecha y lugar del sorteo serán publicados en
            <strong>arbelaez.com.co</strong> y en las redes oficiales.
          </li>
          <li>
            Los participantes autorizan el uso de su nombre e imagen en
            publicaciones relacionadas con el TourBurger Arbeláez.
          </li>
          <li>
            La organización se reserva el derecho de modificar estos términos
            por causas de fuerza mayor, informándolo previamente en los
            canales oficiales.
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
<script src="../../view/home/TourBurguer/Burguer.js?v=<?= $jsTime ?>" type="text/javascript"></script>
