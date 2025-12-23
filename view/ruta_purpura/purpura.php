<!doctype html>
<html lang="es-CO">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="theme-color" content="#6b2bd9" />
  <title>Ruta Púrpura | Violentómetro, qué hacer y canales de ayuda</title>
  <?php
    $cssTime = filemtime('../../view/ruta_purpura/purpura.css');
    $jsTime  = filemtime('../../view/ruta_purpura/purpura.js');
  ?>
  <link rel="stylesheet" href="../../view/ruta_purpura/purpura.css?v=<?= $cssTime ?>">
  <script src="../../view/ruta_purpura/purpura.js?v=<?= $jsTime ?>" defer></script>
</head>

<body>
  <!-- Barra superior -->
  <div class="topbar" role="banner">
    <div class="topbar-inner">
      <div class="brand" aria-label="Ruta Púrpura">
        <div class="logo" aria-hidden="true"></div>
        <div>
          <h1>Ruta Púrpura</h1>
          <p>Guía rápida: niveles de violencia, qué hacer y canales</p>
        </div>
      </div>

      <nav class="nav" aria-label="Navegación">
        <a href="#violentometro">Violentómetro</a>
        <a href="#que-hacer">Qué hacer</a>
        <a href="#faq">Preguntas frecuentes</a>
        <a href="#canales">Canales</a>
      </nav>

      <div class="actions">
        <button class="btn" id="toggleDiscreet" type="button" aria-pressed="false" title="Baja el contraste y deja el diseño más discreto">
          Modo discreto
        </button>
        <button class="btn btn-danger" id="quickExit" type="button" title="Salir rápido (abre otra página)">
          Salir rápido
        </button>
      </div>
    </div>
  </div>

  <main class="wrap" role="main">
    <!-- HERO -->
    <header class="hero" aria-label="Introducción">
      <div class="hero-grid">
        <div class="panel hero-main">
          <div class="kicker"><span class="dot" aria-hidden="true"></span>Ruta Púrpura · Acompañamiento y orientación</div>
          <h2 class="hero-title">Identifica el nivel de violencia y actúa con un plan claro.</h2>
          <p class="hero-desc">
            Esta página te ayuda a reconocer señales, ubicar el nivel de riesgo y saber qué hacer.
            Si hay peligro inmediato, prioriza tu seguridad y busca ayuda de emergencia.
          </p>

          <div class="banner" role="note" aria-label="Aviso de emergencia">
            <strong>Si tu vida o integridad está en riesgo: llama al 123.</strong>
            <span>Si puedes, ve a un lugar seguro y pide apoyo a alguien de confianza.</span>
            <a class="btn btn-primary" href="tel:123" style="margin-left:auto">Llamar 123</a>
          </div>
        </div>

        <aside class="panel hero-side" aria-label="Consejos rápidos">
          <div class="mini">
            <h3>1) Si hay agresión en curso</h3>
            <p>Aléjate del agresor, busca un lugar seguro y llama al 123.</p>
          </div>
          <div class="mini">
            <h3>2) Si hay control, amenazas o miedo</h3>
            <p>Habla con una línea de orientación y arma un plan de seguridad.</p>
          </div>
          <div class="mini">
            <h3>3) Si necesitas orientación</h3>
            <p>Busca canales especializados (Línea Púrpura / 155) y ruta institucional.</p>
          </div>
        </aside>
      </div>
    </header>

    <!-- VIOLENTÓMETRO -->
    <section id="violentometro" class="panel meter" aria-label="Violentómetro">
      <div class="meter-top">
        <div>
          <h2 class="section-title">Violentómetro</h2>
          <p class="section-sub">
            Selecciona el nivel que más se parece a tu situación. Si dudas entre dos, elige el más alto.
          </p>
        </div>
        <p class="hint">
          <b>Importante:</b> si hay estrangulamiento, armas, amenazas de muerte, violencia sexual o lesiones,
          considéralo <b>alto riesgo</b> aunque “no pase siempre”.
        </p>
      </div>

      <div class="levels" role="tablist" aria-label="Niveles del violentómetro">
        <button class="lvl-btn is-active" type="button" data-level="0" role="tab" aria-selected="true">
          <small>Verde · Alertas</small>
          <strong>Control sutil / maltrato emocional</strong>
        </button>
        <button class="lvl-btn" type="button" data-level="1" role="tab" aria-selected="false">
          <small>Amarillo · Riesgo</small>
          <strong>Control fuerte / aislamiento / chantaje</strong>
        </button>
        <button class="lvl-btn" type="button" data-level="2" role="tab" aria-selected="false">
          <small>Naranja · Alto riesgo</small>
          <strong>Amenazas / agresión física / violencia sexual</strong>
        </button>
        <button class="lvl-btn" type="button" data-level="3" role="tab" aria-selected="false">
          <small>Rojo · Emergencia</small>
          <strong>Peligro inminente / agresión en curso</strong>
        </button>
      </div>

      <div class="lvl-content" id="lvlContent" aria-live="polite"></div>
    </section>

    <!-- QUÉ HACER -->
    <section id="que-hacer" class="panel meter" aria-label="Qué hacer según el caso">
      <h2 class="section-title">Qué hacer en cada caso</h2>
      <p class="section-sub">
        Acciones prácticas que puedes aplicar hoy (sin ponerte en mayor riesgo).
      </p>

      <div class="grid grid-2">
        <div class="callout">
          <div class="swatch" style="background: var(--purple2)" aria-hidden="true"></div>
          <div>
            <b>Si estás planeando salir o protegerte</b>
            <p>
              Prepara una “bolsa de emergencia” (documentos, llaves, algo de dinero, medicamentos),
              define una persona de confianza y una palabra clave para pedir ayuda.
            </p>
          </div>
        </div>

        <div class="callout">
          <div class="swatch" style="background: var(--purple2)" aria-hidden="true"></div>
          <div>
            <b>Si vas a guardar evidencia</b>
            <p>
              Solo si es seguro: registra fechas, guarda capturas, mensajes y fotos de lesiones.
              Evita hacerlo en dispositivos a los que el agresor tenga acceso.
            </p>
          </div>
        </div>

        <div class="callout">
          <div class="swatch" style="background: var(--purple2)" aria-hidden="true"></div>
          <div>
            <b>Si necesitas atención en salud</b>
            <p>
              Busca un servicio de salud (IPS/urgencias) para valoración. Tu bienestar físico y emocional es prioridad.
            </p>
          </div>
        </div>

        <div class="callout">
          <div class="swatch" style="background: var(--purple2)" aria-hidden="true"></div>
          <div>
            <b>Si quieres denunciar o pedir medidas de protección</b>
            <p>
              Puedes acudir a Fiscalía/Policía y Comisarías de Familia. Las líneas de orientación te pueden guiar sobre la ruta más segura.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- CANALES -->
    <section id="canales" aria-label="Canales de comunicación">
      <h2 class="section-title">Canales de comunicación</h2>
      <p class="section-sub">
        Usa estos canales según el nivel de riesgo. Si hay emergencia, empieza por <b>123</b>.
      </p>

      <div class="grid grid-3">
        <article class="panel channel">
          <span class="chip">EMERGENCIA</span>
          <h3>Línea 123 (Bogotá/Colombia)</h3>
          <p>Para peligro inmediato, agresión en curso o riesgo para tu vida o integridad.</p>
          <div class="row">
            <a class="btn btn-danger" href="tel:123">Llamar 123</a>
          </div>
        </article>

        <article class="panel channel">
          <span class="chip">ORIENTACIÓN · BOGOTÁ</span>
          <h3>Línea Púrpura Distrital</h3>
          <p>Orientación psicosocial y jurídica. <b>No</b> es línea de emergencias ni de denuncia.</p>
          <div class="row">
            <a class="btn btn-primary" href="tel:018000112137">Llamar 018000112137</a>
            <a class="btn" href="https://wa.me/573007551846" target="_blank" rel="noopener">WhatsApp 300 755 1846</a>
          </div>
        </article>

        <article class="panel channel">
          <span class="chip">ORIENTACIÓN · NACIONAL</span>
          <h3>Línea 155</h3>
          <p>Orientación a nivel nacional para mujeres víctimas de violencia basada en género.</p>
          <div class="row">
            <a class="btn btn-primary" href="tel:155">Llamar 155</a>
          </div>
        </article>

        <article class="panel channel">
          <span class="chip">DENUNCIAS</span>
          <h3>Fiscalía General</h3>
          <p>Canales para denunciar (si decides hacerlo). Si hay emergencia, llama primero al 123.</p>
          <div class="row">
            <a class="btn btn-primary" href="tel:122">Llamar 122</a>
            <a class="btn" href="tel:018000919748">Fijo 018000 919 748</a>
            <a class="btn" href="https://sicecon.fiscalia.gov.co/denuncia/LlenarFormulario" target="_blank" rel="noopener">
              Denuncia virtual
            </a>
          </div>
        </article>

        <article class="panel channel">
          <span class="chip">MEDIDAS DE PROTECCIÓN</span>
          <h3>Comisarías de Familia</h3>
          <p>Orientan y tramitan medidas de protección. (Ubicación depende de tu localidad.)</p>
          <div class="row">
            <a class="btn" href="#faq" title="Ver preguntas frecuentes">Ver FAQ</a>
          </div>
        </article>

        <article class="panel channel">
          <span class="chip">APOYO</span>
          <h3>“Una Llamada de Vida” (Bogotá)</h3>
          <p>Línea informada como canal de apoyo/medidas de protección (Bogotá).</p>
          <div class="row">
            <a class="btn btn-primary" href="tel:+576013808400">Llamar 601 380 8400</a>
          </div>
        </article>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="panel faq" aria-label="Preguntas frecuentes">
      <h2 class="section-title" style="padding: 10px 10px 0;">Preguntas frecuentes</h2>
      <p class="section-sub" style="padding: 0 10px 8px;">
        Respuestas rápidas para actuar con claridad.
      </p>

      <div class="faq-item is-open">
        <button class="faq-q" type="button" aria-expanded="true">
          ¿Cuándo llamo al 123 y cuándo a la Línea Púrpura?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          Llama al <b>123</b> si hay <b>peligro inmediato</b>, agresión en curso o riesgo para la vida/integridad.
          La <b>Línea Púrpura</b> es para <b>orientación</b> (psicosocial/jurídica) y guía de ruta, pero no reemplaza la emergencia.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" type="button" aria-expanded="false">
          ¿La Línea Púrpura recibe denuncias?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          No. Es una línea de <b>orientación</b>. Para denunciar, puedes acudir a Fiscalía/Policía (y usar sus canales).
          Aun así, la Línea Púrpura puede ayudarte a identificar el paso más seguro y el canal correcto.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" type="button" aria-expanded="false">
          ¿Qué señales indican “alto riesgo”?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          Amenazas de muerte, violencia sexual, estrangulamiento/ahorcamiento, presencia de armas,
          agresiones que aumentan, persecución/acecho, aislamiento extremo o miedo constante. Si aparece cualquiera,
          trátalo como <b>alto riesgo</b> y activa canales de emergencia y apoyo.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" type="button" aria-expanded="false">
          ¿Qué puedo hacer si no puedo hablar por teléfono?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          Si estás en peligro, intenta moverte a un lugar más seguro y busca apoyo de alguien cercano (vecino, familiar, comercio).
          Si puedes, envía un mensaje de WhatsApp a la Línea Púrpura o llama cuando sea seguro.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" type="button" aria-expanded="false">
          ¿Es normal sentir culpa, confusión o miedo?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          Sí. La violencia suele mezclarse con ciclos de disculpas, manipulación o promesas.
          Buscar orientación no te obliga a denunciar: te ayuda a recuperar claridad y seguridad.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" type="button" aria-expanded="false">
          ¿Qué hago con mis hijos o personas dependientes?
          <span class="chev" aria-hidden="true">⌄</span>
        </button>
        <div class="faq-a">
          Prioriza un plan: un lugar seguro, contactos de apoyo, documentos y necesidades básicas.
          Las entidades de ruta pueden orientar medidas de protección y pasos seguros según tu caso.
        </div>
      </div>
    </section>

    <footer class="panel" style="padding: 14px 18px;">
      <b>Nota:</b> Este contenido es informativo y no reemplaza atención profesional o legal.
      Si estás en riesgo, busca ayuda inmediata.
      <div style="margin-top:10px;">
        <b>Fuentes (Bogotá/Colombia):</b>
        <ul class="sources">
          <li><a href="https://www.sdmujer.gov.co/lineapurpura" target="_blank" rel="noopener">Secretaría Distrital de la Mujer: Línea Púrpura</a></li>
          <li><a href="https://bogota.gov.co/mi-ciudad/mujer/canales-recibir-atencion-y-denunciar-violencia-contra-mujeres-bogota" target="_blank" rel="noopener">Bogotá.gov: canales de atención y denuncia</a></li>
        </ul>
      </div>
    </footer>
  </main>


</body>
</html>
