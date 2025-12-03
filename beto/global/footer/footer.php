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
        <span class="footer-muted">Ricaurte, Bogotá, Cundinamarca · Colombia</span>
        <span class="footer-dot">•</span>
        <a class="footer-link" href="/terminos/">Términos</a>
        <a class="footer-link" href="/privacidad/">Privacidad</a>
      </div>
    </div>

  </div>
</footer>

<script>
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
