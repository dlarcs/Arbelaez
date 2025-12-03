<?php
$cssTime = filemtime('../../beto/global/footer/footer.css');
// $jsTime = filemtime('../../../');
?>
<link rel="stylesheet" href="../../beto/global/footer/footer.css?v=<?= $cssTime ?>">
<footer class="site-footer" role="contentinfo" aria-label="Pie de página">
  <div class="footer-inner">

    <div class="footer-top">
      <!-- Marca -->
      <div class="footer-brand">
        <a class="footer-logo" href="/" aria-label="Ir al inicio">
          <span class="footer-mark">5G</span>
          <span class="footer-name">Grupo 5G</span>
        </a>

        <p class="footer-desc">
          Portal digital tipo vitrina para visibilizar negocios, turismo y comunidad.
        </p>

        <div class="footer-social" aria-label="Redes sociales">
          <a href="#" class="footer-social__btn" aria-label="Facebook">Fb</a>
          <a href="#" class="footer-social__btn" aria-label="Instagram">Ig</a>
          <a href="#" class="footer-social__btn" aria-label="TikTok">Tk</a>
        </div>
      </div>

      <!-- Columnas -->
      <nav class="footer-cols" aria-label="Enlaces del sitio">
        <div class="footer-col">
          <h3 class="footer-col__title">Categorías</h3>
          <ul class="footer-links">
            <li><a href="/alojamiento/">Alojamiento</a></li>
            <li><a href="/gastronomia/">Gastronomía</a></li>
            <li><a href="/artesanias/">Artesanías</a></li>
            <li><a href="/naturaleza/">Naturaleza</a></li>
            <li><a href="/turismo/">Turismo</a></li>
            <li><a href="/asociaciones/">Asociaciones & Fundaciones</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3 class="footer-col__title">Explorar</h3>
          <ul class="footer-links">
            <li><a href="/historia/">Historia</a></li>
            <li><a href="/eventos/">Galería de eventos</a></li>
            <li><a href="/publicaciones/">Publicaciones</a></li>
            <li><a href="/veredas/">Veredas</a></li>
            <li><a href="/contacto/">Contacto</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3 class="footer-col__title">Contacto</h3>
          <ul class="footer-links">
            <li>
              <a class="footer-chip"
                 target="_blank" rel="noopener"
                 href="https://wa.me/573001234567?text=%C2%A1Bienvenido%20a%20Grupo%205G!%20%C2%BFEn%20qu%C3%A9%20podemos%20colaborarte%3F">
                WhatsApp: +57 300 123 4567
              </a>
            </li>
            <li><a href="mailto:contacto@tudominio.com">contacto@tudominio.com</a></li>
            <li><span class="footer-muted">Arbeláez, Cundinamarca · Colombia</span></li>
            <li><a class="footer-chip" href="/ubicacion/">Ver ubicación (Maps)</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Línea inferior -->
    <div class="footer-bottom">
      <p class="footer-copy">© <span id="y"></span> Grupo 5G. Todos los derechos reservados.</p>

      <nav class="footer-legal" aria-label="Enlaces legales">
        <a href="/terminos/">Términos</a>
        <a href="/privacidad/">Privacidad</a>
        <a href="/cookies/">Cookies</a>
      </nav>
    </div>
  </div>
</footer>

<script>
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
