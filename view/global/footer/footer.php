<?php
$cssTime = filemtime('../../view/global/footer/footer.css');
// $jsTime = filemtime('../../../');
?>
<link rel="stylesheet" href="../../view/global/footer/footer.css?v=<?= $cssTime ?>">
<section class="seccion_footer" aria-label="Pie de página">
  <div class="footer_logo">
    <a href="../../view/home/index.php" aria-label="Inicio">
      <!-- <img class="logo_menu" src="../../view/global/img/logo.png" alt="Logo Arbeláez Turismo"> -->
    </a>
    <h2>ARBELÁEZ CUNDINAMARCA</h2>
  </div>

  <div class="footer_container">
    <nav class="footer_grid" aria-label="Mapa del sitio">
      <!-- Columna: Inicio -->
      <div class="footer_col">
        <h3 class="footer_title">Inicio</h3>
        <ul class="footer_list">
          <li><a href="../../view/home/index.php">Página principal</a></li>
          <li><a href="#places">Sector turístico</a></li>
          <li>
            <a href="https://maps.app.goo.gl/6BS4VuoXdJ8dpAyu9" target="_blank">
              ¿Cómo llegar?
            </a>
          </li>
          <li>
            <a
              href="https://wa.me/573138846378?text=Gracias%20por%20comunicarse%20con%20el%20sistema%20PQRS%20del%20portal%20arbelaez.com.co.%20%0A%C2%BFEn%20qu%C3%A9%20podemos%20colaborarte%20hoy%3F"
              target="_blank">
              PQRS
            </a>
          </li>
        </ul>
      </div>

      <!-- Columna: Alojamiento (7) -->
      <div class="footer_col">
        <h3 class="footer_title">Alojamiento</h3>
        <ul class="footer_list">
          <li><a href="#">Los Altos</a></li>
          <li><a href="../../view/alojamiento/Casa_Kandu/index.php">Casa Kandu</a></li>
          <li><a href="../../view/alojamiento/La_Rinconada/index.php">La Rinconada</a></li>
          <li><a href="../../view/alojamiento/Turismo_Hoy_Vivo/index.php">Turismo Hoy Vivo</a></li>
          <li><a href="../../view/alojamiento/Cachorros_LyC/index.php">Cachorros L&C</a></li>
          <li><a href="../../view/alojamiento/IsraHousSuites/index.php">Isra House Suite</a></li>

        </ul>
      </div>

      <!-- Columna: Gastronomía (5) -->
      <div class="footer_col">
        <h3 class="footer_title">Gastronomía</h3>
        <ul class="footer_list">
          <li><a href="../../view/gastronomia/El_Fogon_del_Triangulo/index.php">El Fogon del Triángulo</a></li>
          <li><a href="../../view/gastronomia/La_Marranada/index.php">La marranada Campestre</a></li>
          <li><a href="../../view/gastronomia/Pablos_Restaurant/index.php">Pablos Restaurant</a></li>
          <li><a href="../../view/gastronomia/kalu/index.php">Kalú</a></li>
          <li><a href="../../view/gastronomia/kapaLuna360/index.php">KapaLuna360°</a></li>
        </ul>
      </div>

      <!-- Columna: Artesanías (2) -->
      <div class="footer_col">
        <h3 class="footer_title">Artesanías</h3>
        <ul class="footer_list">
          <li><a href="../../view/artesanias/Almacen_Religioso/index.php">Almacen Divino Niño Jesús</a></li>
          <li><a href="../../view/artesanias/Artesanias_Martha_E/index.php">Artesanías Marta E</a></li>
        </ul>
      </div>

      <!-- Columna: Asociaciones (1) -->
      <div class="footer_col">
        <h3 class="footer_title">Asociaciones</h3>
        <ul class="footer_list">
          <li><a href="#">Asociación Juntanza de Mujeres</a></li>
        </ul>
      </div>

      <!-- Columna: Redes -->
      <div class="footer_col">
        <h3 class="footer_title">Síguenos</h3>
        <ul class="socials" aria-label="Redes sociales">
          <li>
            <a href="https://www.instagram.com/arbelaez_turismo/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
              <ion-icon name="logo-instagram"></ion-icon><span class="sr-only">Instagram</span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/people/Arbelaez-Turismo/61580302286594/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
              <ion-icon name="logo-facebook"></ion-icon><span class="sr-only">Facebook</span>
            </a>
          </li>
          <li>
            <a href="https://www.tiktok.com/@arbelaez_turismo" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
              <ion-icon name="logo-tiktok"></ion-icon><span class="sr-only">TikTok</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="footer_bottom">
    <a href="https://www.dlarcs.com" target="_blank" rel="noopener noreferrer">
      <p>&copy; <span id="year"></span> D'LARCS — Todos los derechos reservados.</p>
    </a>
  </div>
</section>

<!-- Actualizar el año -->
<script>
  // Ejecuta seguro aunque el span #year no exista
  (function () {
    var el = document.getElementById('year');
    if (el) el.textContent = new Date().getFullYear();
  })();
</script>

<!-- Ionicons (icons de redes) -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
