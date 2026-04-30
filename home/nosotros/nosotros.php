<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/home/nosotros/nosotros.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="/home/nosotros/nosotros.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="about-apps">
    <h1 class="about-apps__title">Sobre Arbelaez.com.co</h1>
    <p class="about-apps__intro">
        Una vitrina digital creada para mostrar lo mejor de Arbeláez, impulsando el turismo local y dando visibilidad a los emprendimientos, la naturaleza, la gastronomía, el alojamiento y las artesanías del municipio.
    </p>

    <div class="about-apps__wrapper">
        <div class="about-apps__glow"></div>

        <div class="img_nosotros">
          <img
              class="about-apps__image"
              src="../../home/img/parque_principal.jpg"
              alt="Proyecto turístico digital de Arbeláez"
          />
          <img
              class="about-apps__image"
              src="../../home/img/parque_principal1.jpg"
              alt="Proyecto turístico digital de Arbeláez"
          />

        </div>
        <div class="about-apps__content">
            <p class="about-apps__text">
                Arbelaez.com.co conecta a visitantes y comunidad con los lugares, servicios y experiencias que hacen especial a Arbeláez, ayudando a que más personas descubran todo lo que este destino tiene para ofrecer.
            </p>

            <div class="about-apps__features">
                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/flashEmoji.png" alt="Turismo icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Promoción del turismo local</h3>
                        <p class="feature-item__text">
                            Damos visibilidad a sitios turísticos, paisajes naturales, rutas, cultura y experiencias que invitan a conocer y disfrutar Arbeláez.
                        </p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/colorsEmoji.png" alt="Emprendimientos icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Apoyo a los emprendimientos</h3>
                        <p class="feature-item__text">
                            Cada negocio puede contar con su propio espacio para mostrar sus productos o servicios, incluyendo alojamiento, gastronomía, artesanías y mucho más.
                        </p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item__icon">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/aboutSection/puzzelEmoji.png" alt="Comunidad icon">
                    </div>
                    <div>
                        <h3 class="feature-item__title">Conexión con la comunidad</h3>
                        <p class="feature-item__text">
                            El proyecto integra alojamientos, artesanías, gastronomía, zonas de agua y cultura que hay en el municipio fortaleciendo la identidad turística de Arbeláez en digital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
