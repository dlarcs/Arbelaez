<?php
$cssPath = '../../view/ruta_purpura/purpura.css';
$cssTime = @filemtime($cssPath) ?: time();
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section violentometro" aria-labelledby="vio-title">
  <h2 id="vio-title">Violentómetro — señales para identificar el nivel de violencia</h2>

  <div class="rule" aria-hidden="true"></div>

  <!-- Leyenda tipo “termómetro” (visual) -->
  <div class="thermo" aria-label="Escala de alerta: de señales tempranas a riesgo">
    <div class="thermo__bar" aria-hidden="true"></div>
    <div class="thermo__labels">
      <span>Señales tempranas</span>
      <span>Alerta</span>
      <span>Riesgo</span>
    </div>
  </div>

  <div class="row row--top">
    <article class="step lvl lvl--1">
      <div class="num" aria-hidden="true">01</div>
      <div class="content">
        <h3 class="st">Señales tempranas (ojo)</h3>
        <p class="txt">
          Conductas que se normalizan, pero ya son violencia: control, celos, presión, burlas o
          minimizar lo que sientes.
        </p>
        <ul class="bul">
          <li>Revisa tu celular / exige claves</li>
          <li>Decide con quién hablas o sales</li>
          <li>Se burla, te ridiculiza o te culpa</li>
        </ul>
      </div>
    </article>

    <article class="step lvl lvl--2">
      <div class="num" aria-hidden="true">02</div>
      <div class="content">
        <h3 class="st">Alerta (escala)</h3>
        <p class="txt">
          La violencia se vuelve más frecuente y dañina: manipulación, aislamiento, control
          económico o límites ignorados.
        </p>
        <ul class="bul">
          <li>Te aísla de familia/amigos</li>
          <li>Te controla dinero, tiempo o decisiones</li>
          <li>Te humilla o te intimida con su actitud</li>
        </ul>
      </div>
    </article>
  </div>

  <div class="row">
    <article class="step lvl lvl--3">
      <div class="num" aria-hidden="true">03</div>
      <div class="content">
        <h3 class="st">Riesgo (busca apoyo ya)</h3>
        <p class="txt">
          Hay amenazas, persecución, coerción o miedo constante. Es clave pedir ayuda y activar rutas.
        </p>
        <ul class="bul">
          <li>Amenazas o chantajes</li>
          <li>Control extremo / “si me dejas…”</li>
          <li>Te impide salir o pedir ayuda</li>
        </ul>
      </div>
    </article>

    <article class="step lvl lvl--4">
      <div class="num" aria-hidden="true">04</div>
      <div class="content">
        <h3 class="st">Emergencia (prioridad)</h3>
        <p class="txt">
          Si la vida o integridad está en riesgo, esto es una emergencia.
          <strong>Llama al 123</strong>. La Línea Púrpura orienta, pero no reemplaza emergencias.
        </p>
        <div class="callout" role="note">
          <strong>Emergencia:</strong> 123<br>
          <span>Orientación y acompañamiento: Línea Púrpura (Bogotá)</span>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="wrap lp" aria-labelledby="lp-title">
  <h2 id="lp-title">Línea Púrpura Bogotá — orientación, no emergencias</h2>

  <p class="lp__lead">
    La Línea Púrpura de Bogotá es gratuita y funciona 24/7. Es atendida por psicólogas, trabajadoras
    sociales, abogadas y enfermeras de la Secretaría Distrital de la Mujer. Brinda orientación ante
    hechos relacionados con violencia de género, pero <strong>NO es una línea de emergencia</strong>.
    Si la vida o integridad corre riesgo, se debe llamar a <strong>123</strong>.
  </p>

  <p class="lp__hint">
    (Te invitamos a consultar: <a class="lp__link" href="https://bogota.gov.co/mi-ciudad/seguridad/conoce-la-ubicacion-y-servicios-que-ofrecen-las-comisarias-de-familia" target="_blank" rel="noopener">ubicación y servicios de Comisarías de Familia en Bogotá</a>)
  </p>

  <div class="grid" role="list">
    <article class="card" role="listitem">
      <h3>¿A quién va dirigida?</h3>
      <p>Mujeres mayores de 18 años que identifiquen estar viviendo violencias dentro de Bogotá.</p>
    </article>

    <article class="card" role="listitem">
      <h3>Qué hace</h3>
      <p>Orienta sobre qué hacer, rutas de atención y derechos; y brinda acompañamiento psicosocial y jurídico.</p>
    </article>

    <article class="card" role="listitem">
      <h3>Qué NO es</h3>
      <p>No es línea de emergencias ni recibe denuncias. Para riesgo inmediato: 123.</p>
    </article>

    <article class="card" role="listitem">
      <h3>Dónde denunciar</h3>
      <p>La denuncia se realiza ante Fiscalía General de la Nación o Policía.</p>
    </article>

    <article class="card" role="listitem">
      <h3>Canales</h3>
      <p>
        018000112137<br>
        WhatsApp: 3007551846<br>
        Lengua de señas (videollamada): L–V 08:00–17:00, Sáb 08:00–12:00
      </p>
    </article>

    <article class="card" role="listitem">
      <h3>Servicios</h3>
      <p>
        • Acompañamiento psicosocial<br>
        • Orientación jurídica<br>
        • Información sobre rutas, mecanismos y servicios de protección integral
      </p>
    </article>
  </div>
</section>
