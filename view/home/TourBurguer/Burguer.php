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
        <h2 class="tourburger__title"> TourBurger Arbeláez 2025 – Ruta de Sabores</h2>
        <p class="tourburger__subtitle">
          Ruta gastronómica de hamburguesas Arbelaences.
        </p>
        <p class="tourburger__dates">
          Del <strong>16</strong> al <strong>28 de diciembre</strong>
        </p>
        <p class="tourburger__description">
          Visita los locales aliados, pide la <strong>TourBurger</strong>,
          completa tu tarjetón y participa por Pasadia + Psicina + Almuerzo + bebinas para dos personas
        </p>

        <div class="tourburger__cta">
          <button class="btn btn--outline" type="button" data-open-modal>
            Ver términos y condiciones
          </button>
        </div>
      </div>

      <figure class="tourburger__image-wrapper">
        <!-- Imagen principal por defecto -->
        <img
          src="../../../view/home/TourBurguer/img/general.png"
          alt="Hamburguesa artesanal del TourBurger Arbeláez"
          class="tourburger__image"
          loading="lazy"
        >
      </figure>
    </div>

    <!-- Locales participantes -->
  <div class="tourburger__places" aria-label="Locales participantes">
    <!--
      IMPORTANTE:
      data-image => ruta de la imagen que quieres mostrar en el hero al hacer clic
      data-image-alt => texto alternativo para esa imagen
    -->

    <!-- CARD 1 – Kalú Café Resto-Bar -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/kalu/img/especial10.jpg"
      data-image-alt="TourBurger de Kalú Café Resto-Bar"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/kalu/img/especial10.jpg"
          alt="TourBurger de Kalú Café Resto-Bar"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Kalú Café Resto-Bar</h3>
      <p class="tourburger-card__details">
        Arbeláez, Cundinamarca — Ambiente familiar y hamburguesa TourBurger Kalú.
      </p>

      <!-- 🍔 Info de la hamburguesa -->
      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Kalú
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Pan artesanal, carne de res, queso, tocineta, vegetales frescos y salsas de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/nTFZHiv39HS4dnwn8"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>

    <!-- CARD 2 – KapaLuna 360° -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/kapaLuna360/img/ESLOGAN.jpg"
      data-image-alt="TourBurger parrillera de KapaLuna 360°"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/kapaLuna360/img/ESLOGAN.jpg"
          alt="TourBurger parrillera de KapaLuna 360°"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">KapaLuna 360°</h3>
      <p class="tourburger-card__details">
        Arbeláez, Cundinamarca — Vista panorámica y TourBurger parrillera.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger KapaLuna 360°
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Pan brioche, carne a la parrilla, queso doble, cebolla grille y salsa especial de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
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

    <!-- CARD 3 – La Marranada Campestre -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/La_Marranada/img/especial5.jpg"
      data-image-alt="TourBurger de La Marranada Campestre"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/La_Marranada/img/especial5.jpg"
          alt="TourBurger de La Marranada Campestre"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">La Marranada Campestre</h3>
      <p class="tourburger-card__details">
        Sabor contundente — TourBurger con recetas inspiradas en la casa.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger La Marranada
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de cerdo, queso fundido, chicharrón crocante, guacamole y salsa de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/e5wFcoDBmMACpPAe6"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>

    <!-- CARD 4 – Totumazo 2 -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/Totumazo_2/img/burger.jpg"
      data-image-alt="TourBurger de Totumazo 2"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/Totumazo_2/img/burger.jpg"
          alt="TourBurger de Totumazo 2"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Totumazo 2</h3>
      <p class="tourburger-card__details">
        Tradición hamburguesera — TourBurger con sabor clásico y generoso.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Totumazo 2
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, queso cheddar, tomate, lechuga, cebolla y salsa tártara.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/41QQ4FCvsKua8N1K7"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>

    <!-- CARD 5 – Del Huerto -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/El_Huerto/img/burger.jpg"
      data-image-alt="TourBurger de Del Huerto"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/El_Huerto/img/burger.jpg"
          alt="TourBurger de Del Huerto"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Del Huerto</h3>
      <p class="tourburger-card__details">
        Frente al parque principal — TourBurger con ingredientes frescos y locales.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Del Huerto
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, vegetales salteados, queso, hojas verdes y salsa de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/pvRUNEBFycEitzmF7"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>

    <!-- CARD 6 – Pimienta Gastro-Bar -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/Pimienta_GastroBar/img/burger.jpg"
      data-image-alt="TourBurger de Pimienta Gastro-Bar"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/Pimienta_GastroBar/img/burger.jpg"
          alt="TourBurger de Pimienta Gastro-Bar"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Pimienta Gastro-Bar</h3>
      <p class="tourburger-card__details">
        Entorno natural — TourBurger para disfrutar en un ambiente campestre.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Pimienta
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, mix de pimientas, queso, cebolla caramelizada y salsa especial.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/eLECkCAz2VHhvc2s8"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>

    <!-- CARD 7 – Don Cipro -->
    <article
      class="tourburger-card"
      data-image="../../view/gastronomia/Don_Cipro/img/burger.jpg"
      data-image-alt="TourBurger de Don Cipro"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/gastronomia/Don_Cipro/img/burger.jpg"
          alt="TourBurger de Don Cipro"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Don Cipro</h3>
      <p class="tourburger-card__details">
        Sabor local — TourBurger perfecta para cerrar el recorrido con broche de oro.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Don Cipro
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, queso, tocineta, vegetales frescos y salsa secreta de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573123804104?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/eLECkCAz2VHhvc2s8"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>
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
          <li>
            Seguirnos en nuestras redes sociales. Facebook, Instagram y Tiktok
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<script src="../../view/home/TourBurguer/Burguer.js?v=<?= $jsTime ?>" type="text/javascript" ></script>
