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
          Impresión, diseño y publicidad para tu negocio. Calidad, velocidad y buen acabado.
        </p>

        <!-- Redes sociales -->
        <div class="footer-social" aria-label="Redes sociales">
          <a class="footer-social__btn" href="#" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 22v-8h2.7l.4-3H13.5V9.2c0-.9.3-1.6 1.6-1.6h1.6V5.1c-.8-.1-1.7-.2-2.6-.2-2.6 0-4.3 1.6-4.3 4.5V11H7.1v3h2.7v8h3.7z"/></svg>
          </a>
          <a class="footer-social__btn" href="#" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm9 2h-9A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm5.6-2.2a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2z"/></svg>
          </a>
          <a class="footer-social__btn" href="#" target="_blank" rel="noopener" aria-label="TikTok">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3c.4 2.7 2.2 4.6 4.9 4.9V11c-1.8 0-3.4-.6-4.9-1.6v6.2c0 3.1-2.5 5.6-5.6 5.6S3.8 18.7 3.8 15.6 6.3 10 9.4 10c.4 0 .8 0 1.2.1v3.1c-.4-.2-.8-.3-1.2-.3-1.4 0-2.6 1.2-2.6 2.6s1.2 2.6 2.6 2.6 2.6-1.2 2.6-2.6V3H15z"/></svg>
          </a>
        </div>

        <!-- CTA -->
        <div class="footer-cta">
          <a class="footer-chip"
             target="_blank" rel="noopener"
             href="https://wa.me/573001234567?text=%C2%A1Bienvenido%20a%20Grupo%205G!%20%C2%BFEn%20qu%C3%A9%20podemos%20colaborarte%3F"
             aria-label="Escríbenos por WhatsApp">
            WhatsApp
          </a>
          <a class="footer-chip" href="mailto:contacto@tudominio.com">Correo</a>
          <a class="footer-chip" href="/ubicacion/">Ubicación</a>
        </div>
      </div>

      <!-- Servicios -->
      <nav class="footer-cols" aria-label="Servicios Grupo 5G">
        <div class="footer-col footer-col--wide">
          <h3 class="footer-col__title">Servicios</h3>

          <ul class="footer-grid">
            <li><a href="#" class="footer-item">Corte láser</a></li>
            <li><a href="#" class="footer-item">Avisos en acrílico</a></li>
            <li><a href="#" class="footer-item">Vinilos adhesivos</a></li>
            <li><a href="#" class="footer-item">Impresión gran formato</a></li>
            <li><a href="#" class="footer-item">Tropezones</a></li>
            <li><a href="#" class="footer-item">Tarjetas</a></li>
            <li><a href="#" class="footer-item">Volantes</a></li>
            <li><a href="#" class="footer-item">Papelería comercial</a></li>
            <li><a href="#" class="footer-item">Plotter de corte</a></li>
            <li><a href="#" class="footer-item">Frosted</a></li>
            <li><a href="#" class="footer-item">Pendones</a></li>
            <li><a href="#" class="footer-item">Microperforado</a></li>
            <li><a href="#" class="footer-item">Panaflex</a></li>
            <li><a href="#" class="footer-item">Vallas publicitarias</a></li>
            <li><a href="#" class="footer-item">Retablos</a></li>
            <li><a href="#" class="footer-item">Imanes</a></li>
            <li><a href="#" class="footer-item">Neonflex</a></li>
            <li><a href="#" class="footer-item">Habladores</a></li>
            <li><a href="#" class="footer-item">Señalización</a></li>
            <li><a href="#" class="footer-item">Branding para carros</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Línea inferior -->
    <div class="footer-bottom">
      <p class="footer-copy">© <span id="y"></span> Grupo 5G. Todos los derechos reservados.</p>

      <div class="footer-mini">
        <span class="footer-muted">Arbeláez, Cundinamarca · Colombia</span>
        <span class="footer-dot">•</span>
        <a class="footer-link" href="/terminos/">Términos</a>
        <a class="footer-link" href="/privacidad/">Privacidad</a>
      </div>
    </div>

  </div>
</footer>

<script>document.getElementById('y').textContent = new Date().getFullYear();</script>
