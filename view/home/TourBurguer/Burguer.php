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
          Del <strong>14</strong> al <strong>28 de diciembre</strong>
        </p>
        <p class="tourburger__description">
          Visita los locales aliados, pide la <strong>TourBurger</strong>,
          completa tu FICHA y participa por Pasadia + Jacuzzi + Psicina + Almuerzo + bebidas para dos personas. <br> <br>
          ENTREGA TU FICHA EN LA URNA DE CUALQUIERA DE LOS LOCALES GASTRONÓMICOS PARTICIPANTES DEL TOUR BURGER ARBELÁEZ 2025.
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
      data-image="../../view/home/TourBurguer/img/kalu.jpeg"
      data-image-alt="TourBurger de Kalú Café Resto-Bar"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/kalu.jpeg"
          alt="TourBurger de Kalú Café Resto-Bar"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Kalú Café Resto-Bar</h3>
      <p class="tourburger-card__details">
        Al lado de la casa de cafe, al lado de la capilla, cerca al parque verde. <br>
        Lunes a viernes de 5:00pm a 10:00pm,
        Sabado a domingo y festivos de 4:00pm a 10:00pm

      </p>

      <!-- 🍔 Info de la hamburguesa -->
      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Reno Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          •⁠  ⁠Pan finas hierbas, 150 gramos de carne artesanal, ⁠Lechuga crespa, ⁠tomate, Queso fundid, Cebolla crispy, Salsa de café y tocineta caramelizada.
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
      data-image="../../view/home/TourBurguer/img/kapaluna.jpeg"
      data-image-alt="TourBurger parrillera de KapaLuna 360°"
    >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/kapaluna.jpeg"
          alt="TourBurger parrillera de KapaLuna 360°"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">KapaLuna 360°</h3>
      <p class="tourburger-card__details">
        Cuadra y media arriba de la alcaldía. <br>
        Lunes a Viernes 4:00 pm – 10:00 pm,
       Sábados, domingos y festivos 11:00 am – 10:00 pm
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger La Pelotera Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Pan tipo brioche, Carne artesanal, Queso cheddar, Queso Philadelphia rosa, Costilla a la barbacoa,
          Cebolla crunchy, Salsa de la casa
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573007804430?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/yuyCaQezn3Bpi61K8"
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
      data-image="../../view/home/TourBurguer/img/general.png"
      data-image-alt="TourBurger de La Marranada Campestre"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/general.png"
          alt="TourBurger de La Marranada Campestre"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">La Marranada Campestre</h3>
      <p class="tourburger-card__details">
       En el arenal, San Antonio. <br>
       Viernes 5:00 pm – 9:00 pm,
       Sábado 12:00 pm – 9:00 pm,
       Domingo 7:00 am – 5:00 pm
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger SorpresaBurger Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de cerdo, queso fundido, chicharrón crocante, guacamole y salsa de la casa.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573022514381?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/jRqys8D7fyELAsMe7"
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
      data-image="../../view/home/TourBurguer/img/totumazo2.jpeg"
      data-image-alt="TourBurger de Totumazo 2"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/totumazo2.jpeg"
          alt="TourBurger de Totumazo 2"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Totumazo</h3>
      <p class="tourburger-card__details">
        Costado de la iglesia principla <br>
        Domingo a Domingo 5:00pm a 9:00pm
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Sipote Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, queso cheddar, tomate, lechuga, cebolla y salsa tártara.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573135891912?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/fYryXu8p8s1PJCi47"
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
      data-image="../../view/home/TourBurguer/img/huerto1.jpeg"
      data-image-alt="TourBurger de Del Huerto"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/huerto1.jpeg"
          alt="TourBurger de Del Huerto"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Del Huerto</h3>
      <p class="tourburger-card__details">
        Costado del parque principal, frente a la alcaldía.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger La Diablada Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          200 GMS de carne, pan artesanal, cebolla caramelizada ,tomate, lechuga, tocineta, queso y salsas de la casa
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573203152118?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/466ghbcaFLJteyF36"
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
      data-image="../../view/home/TourBurguer/img/general.png"
      data-image-alt="TourBurger de Pimienta Gastro-Bar"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/general.png"
          alt="TourBurger de Pimienta Gastro-Bar"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Pimienta Gastro-Bar</h3>
      <p class="tourburger-card__details">
        Villa Olimpica
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Golden Queen Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de artesanal, mix de salsas especiales, queso, cebolla caramelizada.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573142605461?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/kHvFtC4FhJ8jTyZy8"
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
      data-image="../../view/home/TourBurguer/img/doncipro.jpeg"
      data-image-alt="TourBurger de Don Cipro"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/doncipro.jpeg"
          alt="TourBurger de Don Cipro"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">Don Cipro</h3>
      <p class="tourburger-card__details">
        Ubicado en la casa de los pájaros segundo piso al frente del parque Gómez Otero <br>
        Entre semana 6:00pm - 10:00pm. <br>
        Fines de semana 4:00pm - 10:00pm.
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger Campechana Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
        cebolla y tomate grilleth queso mosarela carne artesanal.
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573176184453?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/XTWVkx4Mxcqw4xBJ9"
          class="btn btn--ghost"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cómo llegar
        </a>
      </div>
    </article>
    <!-- CARD 8 – La moza -->
    <article
      class="tourburger-card"
      data-image="../../view/home/TourBurguer/img/moza.jpeg"
      data-image-alt="TourBurger de La moza"
     >
      <figure class="tourburger-card__thumb">
        <img
          src="../../view/home/TourBurguer/img/moza.jpeg"
          alt="TourBurger de La moza"
          loading="lazy"
          decoding="async"
        >
      </figure>

      <h3 class="tourburger-card__name">La Moza Gastro-Bar</h3>
      <p class="tourburger-card__details">
        Entrada de Arbeláez-Fusagasugá Turín
      </p>

      <div class="tourburger-card__burger">
        <h4 class="tourburger-card__burger-name">
          TourBurger La Doble Moza Arbeláez 2025
        </h4>
        <p class="tourburger-card__burger-ingredients">
          Carne de res, queso, tocineta, vegetales frescos y salsa secreta de la casa. <br>
          De 6:00pm-10:00pm
        </p>
      </div>

      <div class="tourburger-card__actions">
        <a
          href="https://wa.me/573504633485?text=Hola%2C%20quiero%20info%20del%20TourBurger%20Arbel%C3%A1ez"
          class="btn btn--primary"
          target="_blank"
          rel="noopener noreferrer"
        >
          Contacto
        </a>
        <a
          href="https://maps.app.goo.gl/XfkTbM82ypzCw23F6"
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
            Los premios consisten en pasadía, jacuzzi, piscina y almuerzo para dos personas,
            esto puede variar dependiendo del premio 1 o premio 2.
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
