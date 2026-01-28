<?php
$cssPath = '../../view/home/places/places.css';
$cssTime = @filemtime($cssPath) ?: time(); // fallback si falta el archivo
?>
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section id="places" class="section_places" aria-labelledby="places-title">
  <h2 id="places-title">Qué hacer en Arbeláez</h2>
  <p>Lo mejor de Arbeláez se vive, se siente y se recuerda.</p>

  <div class="img_galery_places">
    <a href="../../view/artesanias/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Artesanías</p>
        <img
          src="../../view/artesanias/Almacen_Religioso/img/artesanias16.jpg"
          alt="Artesanías y recuerdos hechos a mano"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places">
            <h3>Lo mejor en artesanías y recuerdos</h3>
          </div>
        </div>
      </article>
    </a>

    <a href="../../view/alojamiento/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Alojamiento</p>
        <img
          src="../../view/alojamiento/Cachorros_LyC/img/trago.jpg"
          alt="Opciones de alojamiento para descansar en Arbeláez"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Elige dónde descansar</h3></div>
        </div>
      </article>
    </a>

    <a href="../../view/gastronomia/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Gastronomía</p>
        <img
          src="../../view/gastronomia/Pablos_Restaurant/img/especial17.jpg"
          alt="Gastronomía local: cocteles y platos típicos"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Disfruta lo mejor de Arbeláez</h3></div>
        </div>
      </article>
    </a>

    <!-- <a href="../../view/Naturaleza/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Naturaleza</p>
        <img
          src="../../view/home/img/flor.jpg"
          alt="Naturaleza: ríos, flora y paisajes"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Ríos, plantas y más</h3></div>
        </div>
      </article>
    </a> -->
    <a href="../../view/Juntanza_de_Mujeres/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Asociación Juntanza de Mujeres</p>
        <img
          src="../../view/home/img/juntanza.jpeg"
          alt="Asociación de juntanza de mujeres"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Comunidad de Mujeres</h3></div>
        </div>
      </article>
    </a>
    <a href="../../view/festividades/index.php" class="card_link">
      <article class="galery_card_places">
        <p class="badge">Festividades</p>
        <img
          src="../../view/festividades/la_diablada/IMG_3463.JPG"
          alt="Asociación de juntanza de mujeres"
          loading="lazy" decoding="async" width="800" height="533">
        <div class="overlay_places" aria-hidden="true">
          <div class="card_info_places"><h3>Tradiciones</h3></div>
        </div>
      </article>
    </a>

  </div>
</section>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Tour Burger Arbeláez 2025</title>

  <style>
    :root{
      --bg-1:#140c08;
      --bg-2:#2a1510;
      --bg-3:#4a2214;

      --white:#FAFAFA;
      --white-2:rgba(255,255,255,.86);

      --gold:#d7b46a;
      --gold-soft:rgba(215,180,106,.55);

      --shadow: 0 20px 60px rgba(0,0,0,.55);
      --glass: rgba(0,0,0,.22);
      --border: rgba(215,180,106,.22);
    }

    *{ box-sizing:border-box; }
    body{
      margin:0;
      min-height:100svh;
      display:grid;
      place-items:center;
      padding:24px;
      color:var(--white);
      background:
        radial-gradient(1200px 700px at 20% 20%, rgba(215,180,106,.10), transparent 60%),
        radial-gradient(1000px 700px at 80% 30%, rgba(255,210,150,.08), transparent 60%),
        radial-gradient(1200px 900px at 50% 90%, rgba(215,180,106,.10), transparent 65%),
        linear-gradient(180deg, #070606 0%, #140c08 35%, #070606 100%);
      font-family: ui-serif, Georgia, "Times New Roman", serif;
    }

    /* POSTER */
    .poster{
      width:min(980px, 100%);
      aspect-ratio: 3 / 4;
      border-radius:24px;
      position:relative;
      overflow:hidden;
      box-shadow: var(--shadow);
      border: 1px solid var(--border);
      background:
        radial-gradient(1200px 900px at 50% 40%, rgba(255,210,150,.12), transparent 62%),
        radial-gradient(900px 700px at 20% 20%, rgba(215,180,106,.12), transparent 60%),
        radial-gradient(700px 700px at 80% 65%, rgba(215,180,106,.10), transparent 55%),
        linear-gradient(145deg, var(--bg-1), var(--bg-2) 45%, var(--bg-3));
    }

    /* bokeh */
    .poster::before{
      content:"";
      position:absolute; inset:-40px;
      background:
        radial-gradient(circle at 10% 15%, rgba(255,210,150,.20) 0 10px, transparent 12px),
        radial-gradient(circle at 22% 22%, rgba(215,180,106,.18) 0 12px, transparent 14px),
        radial-gradient(circle at 82% 18%, rgba(255,210,150,.16) 0 9px, transparent 11px),
        radial-gradient(circle at 72% 30%, rgba(215,180,106,.14) 0 14px, transparent 16px),
        radial-gradient(circle at 16% 55%, rgba(255,210,150,.12) 0 16px, transparent 18px),
        radial-gradient(circle at 88% 52%, rgba(215,180,106,.12) 0 18px, transparent 20px),
        radial-gradient(circle at 50% 82%, rgba(255,210,150,.12) 0 20px, transparent 22px);
      filter: blur(1px);
      opacity:.85;
      pointer-events:none;
    }

    /* vignette + glow */
    .poster::after{
      content:"";
      position:absolute; inset:0;
      background:
        linear-gradient(180deg, rgba(0,0,0,.62), transparent 18%, transparent 72%, rgba(0,0,0,.70)),
        radial-gradient(900px 520px at 50% 78%, rgba(215,180,106,.22), transparent 60%);
      pointer-events:none;
    }

    .content{
      position:relative;
      z-index:2;
      height:100%;
      padding: clamp(22px, 3.2vw, 40px);
      display:flex;
      flex-direction:column;
      justify-content: space-between; /* “justificado” vertical */
      gap: clamp(14px, 2vw, 20px);
    }

    /* TOP TITLES */
    .hero{
      text-align:center;
      padding-top: clamp(4px, 1.2vw, 12px);
    }
    .hero .script{
      margin:0;
      font-style: italic;
      letter-spacing:.02em;
      font-size: clamp(44px, 6.2vw, 84px);
      line-height:1;
      color: var(--white);
      text-shadow: 0 10px 25px rgba(0,0,0,.55);
    }
    .hero .sub{
      margin: 10px 0 0;
      font-size: clamp(20px, 2.7vw, 36px);
      letter-spacing:.12em;
      text-transform: uppercase;
      color: var(--white);
      text-shadow: 0 8px 18px rgba(0,0,0,.6);
    }

    /* RULE (line + label) */
    .rule{
      display:flex;
      align-items:center;
      gap: 14px;
      color: var(--white);
      text-transform: uppercase;
      letter-spacing:.20em;
      font-weight: 800;
      font-size: clamp(14px, 1.6vw, 18px);
      opacity:.95;
    }
    .rule::before,
    .rule::after{
      content:"";
      height:1px;
      flex:1;
      background: linear-gradient(90deg, transparent, var(--gold-soft), transparent);
    }
    .rule span{
      padding: 8px 12px;
      border: 1px solid var(--border);
      border-radius: 999px;
      background: rgba(0,0,0,.18);
      backdrop-filter: blur(4px);
    }

    /* PARTICIPANTS */
    .participants{
      display:grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
      padding: 8px 0 0;
    }
    .brand{
      border: 1px solid var(--border);
      background: #0D0706;
      border-radius: 16px;
      padding: 14px 14px;
      min-height: 62px;
      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
      box-shadow: 0 10px 25px rgba(0,0,0,.25);
    }
    .brand b{
      color: var(--white);
      font-size: clamp(18px, 2.2vw, 28px);
      letter-spacing:.08em;
      text-transform: uppercase;
    }
    .brand em{
      color: var(--white);
      font-style: italic;
      font-size: clamp(18px, 2.1vw, 28px);
      letter-spacing:.03em;
    }
    .brand small{
      display:block;
      margin-top: 2px;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial;
      font-size: 12px;
      letter-spacing:.14em;
      opacity:.9;
      color: var(--white-2);
      text-transform: uppercase;
    }

    /* VIDEO CENTER */
    .media{
      display:flex;
      justify-content:center;
      padding: 6px 0 2px;
    }
    .media-frame{
      width: min(740px, 100%);
      aspect-ratio: 16 / 9;
      border-radius: 18px;
      overflow:hidden;
      border: 1px solid var(--border);
      background: rgba(0,0,0,.35);
      box-shadow: 0 18px 45px rgba(0,0,0,.45);
      position:relative;
    }
    .media-frame::before{
      content:"";
      position:absolute; inset:0;
      background: radial-gradient(500px 220px at 50% 50%, rgba(215,180,106,.14), transparent 70%);
      pointer-events:none;
      z-index:2;
    }
    .media-frame video{
      width:100%;
      height:100%;
      object-fit: cover;
      display:block;
      position:relative;
      z-index:1;
    }

    /* PODIUM */
    .podium{
      display:grid;
      grid-template-columns: 1fr 1.25fr 1fr;
      gap: clamp(10px, 2vw, 18px);
      align-items:end;
      padding-bottom: clamp(8px, 2vw, 18px);
    }
    .award{ display:flex; align-items:center; justify-content:center; }

    .medal{
      position:relative;
      width: 100%;
      max-width: 250px;
      border-radius: 26px;
      padding: 18px 16px 16px;
      background: linear-gradient(180deg, rgba(0,0,0,.62), rgba(0,0,0,.30));
      border: 1px solid var(--border);
      box-shadow: 0 24px 60px rgba(0,0,0,.55);
      text-align:center;
    }

    .medal--circle{
      aspect-ratio: 1 / 1;
      border-radius: 999px;
      display:grid;
      place-items:center;
      padding: 18px;
    }

    .medal--shield{
      max-width: 310px;
      padding: 22px 18px 18px;
      clip-path: polygon(10% 0%, 90% 0%, 100% 18%, 100% 70%, 50% 100%, 0% 70%, 0% 18%);
      background:
        radial-gradient(140px 100px at 50% 25%, rgba(215,180,106,.14), transparent 65%),
        linear-gradient(180deg, rgba(0,0,0,.68), rgba(0,0,0,.34));
    }

    .medal::before{
      content:"";
      position:absolute; inset:10px;
      border-radius: inherit;
      border: 1px solid rgba(255,255,255,.22); /* borde blanco suave */
      pointer-events:none;
    }
    .medal--shield::before{ inset:12px; }

    .laurel{
      display:flex;
      justify-content:center;
      gap: 14px;
      margin: 6px 0 10px;
      opacity:.95;
    }
    .leaf{
      width: 44px;
      height: 22px;
      border: 2px solid rgba(255,255,255,.55); /* laurel blanco */
      border-color: rgba(255,255,255,.55) transparent transparent transparent;
      border-radius: 999px 999px 0 0;
      transform: rotate(-12deg);
    }
    .leaf.r{ transform: rotate(12deg); }

    .place{
      font-size: clamp(36px, 4.5vw, 64px);
      font-weight: 900;
      letter-spacing:.02em;
      color: var(--white); /* números blancos */
      text-shadow: 0 10px 24px rgba(0,0,0,.55);
      line-height:1;
    }

    .winner-name{
      margin: 10px 0 0;
      font-size: clamp(16px, 2.2vw, 26px);
      color: var(--white);
      letter-spacing:.03em;
    }
    .winner-name em{ font-style: italic; color: var(--white); }

    .medal hr{
      border:0;
      height:1px;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,.35), transparent);
      margin: 10px auto;
      width: 70%;
      opacity:.9;
    }

    .pedestal{
      margin-top: 14px;
      width: 88%;
      height: 14px;
      border-radius: 999px;
      background: radial-gradient(circle at 50% 40%, rgba(255,255,255,.18), rgba(0,0,0,.35));
      opacity:.9;
    }

    /* Responsive */
    @media (max-width: 860px){
      .participants{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .podium{ grid-template-columns: 1fr; }
      .medal{ max-width: 420px; }
      .medal--circle{ max-width: 320px; }
      .medal--shield{ max-width: 420px; }
      .media-frame{ aspect-ratio: 4 / 3; }
    }
  </style>
</head>

<body>
  <main class="poster" role="img" aria-label="Póster Tour Burger Arbeláez 2025 con participantes, video y ganadores">
    <div class="content">

      <header class="hero">
        <h1 class="script">Tour Burger</h1>
        <p class="sub">Arbeláez 2025</p>
      </header>

      <div class="rule"><span>Participantes</span></div>

      <section class="participants" aria-label="Participantes">
        <div class="brand"><b>KALÚ</b></div>
        <div class="brand"><b>Kapaluna 360°</b></div>
        <div class="brand"><b>La Marranada Campestre</b></div>
        <div class="brand"><em>Don Ciprio</em></div>
        <div class="brand"><b>La Moza</b></div>
        <div class="brand"><b>Pimienta Gastro Bar</b></div>
      </section>

      <!-- VIDEO CENTRADO (autoplay) -->
      <section class="media" aria-label="Video central">
        <div class="media-frame">
          <video
            src="../../view/home/img/GanadorTourBurger.mp4"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
          ></video>
        </div>
      </section>

      <div class="rule"><span>¡Ganador del Tour Burger Arbeláez 2025!</span></div>

      <section class="podium" aria-label="Podio de ganadores">
        <div class="award">
          <div class="medal medal--circle" aria-label="Tercer lugar: Kalú">
            <div>
              <div class="place">3°</div>
              <div class="laurel" aria-hidden="true">
                <span class="leaf"></span><span class="leaf r"></span>
              </div>
              <hr>
              <p class="winner-name"><b>KALÚ</b></p>
              <div class="pedestal" aria-hidden="true"></div>
            </div>
          </div>
        </div>

        <div class="award">
          <div class="medal medal--circle" aria-label="Tercer lugar: Kalú">
            <div>
              <div class="place">1°</div>
              <div class="laurel" aria-hidden="true">
                <span class="leaf"></span><span class="leaf r"></span>
              </div>
              <hr>
              <p class="winner-name"><b>DON CIPRIO</b></p>
              <div class="pedestal" aria-hidden="true"></div>
            </div>
          </div>
        </div>

        <!-- 3rd -->
        <div class="award">
          <div class="medal medal--circle" aria-label="Tercer lugar: Kalú">
            <div>
              <div class="place">2°</div>
              <div class="laurel" aria-hidden="true">
                <span class="leaf"></span><span class="leaf r"></span>
              </div>
              <hr>
              <p class="winner-name"><b>KAPALUNA 360°</b></p>
              <div class="pedestal" aria-hidden="true"></div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>
</body>
</html>
