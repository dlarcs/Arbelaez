<?php
  $cssPath = '../../view/history/seccion/history.css';
  $cssFile = __DIR__ . '/../../view/history/seccion/history.css';
  $cssTime = file_exists($cssFile) ? filemtime($cssFile) : time();
?>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_history" aria-label="Historia y costumbres de Arbeláez">

  <!-- HISTORIA DE ARBELÁEZ -->
  <div class="container_history">
    <h1>Historia de Arbeláez <br> Villa de los Pensionados</h1>

    <!-- DATOS RÁPIDOS (nuevo) -->
    <div class="history_facts" role="note" aria-label="Datos rápidos de Arbeláez">
      <div class="fact">
        <span class="fact_label">Fundación del poblado</span>
        <span class="fact_value">22 oct 1870</span>
      </div>
      <div class="fact">
        <span class="fact_label">Municipio (creación)</span>
        <span class="fact_value">16 ene 1886</span>
      </div>
      <div class="fact">
        <span class="fact_label">Provincia</span>
        <span class="fact_value">Sumapaz</span>
      </div>
      <div class="fact">
        <span class="fact_label">Altitud</span>
        <span class="fact_value">2663 msnm</span>
      </div>
      <div class="fact">
        <span class="fact_label">Distancia a Bogotá</span>
        <span class="fact_value">82 km</span>
      </div>
      <div class="fact">
        <span class="fact_label">Día de mercado</span>
        <span class="fact_value">Domingo</span>
      </div>
    </div>

    <div class="box_history">
      <!-- 1 -->
      <div class="history">
        <span class="history_badge">Época precolombina</span>
        <h3>Los primeros habitantes: sutagaos</h3>
        <p>
          Antes de la colonia, el territorio estuvo asociado principalmente con los <strong>sutagaos</strong>.
          En las zonas altas hubo influencia de los <strong>muiscas</strong> y hacia las zonas bajas del occidente
          se reconoce presencia de pueblos como los <strong>panches</strong> (contexto regional).
        </p>
        <img src="../../view/history/img/sutagaos1.2.png" alt="Representación de los Sutagaos y otros pueblos indígenas de la región" loading="lazy" decoding="async">
      </div>

      <!-- 2 -->
      <div class="history">
        <span class="history_badge">Siglo XVI</span>
        <h3>Conquista y cambios del territorio</h3>
        <p>
          Con la llegada española, el panorama social y territorial cambió profundamente: nuevas rutas,
          control político, encomiendas y transformación de las prácticas tradicionales. En Cundinamarca,
          los conflictos entre pueblos indígenas también marcaron la historia de la región.
        </p>
        <img src="../../view/history/img/conquista3.png" alt="Escena simbólica de la conquista y el cambio de época" loading="lazy" decoding="async">
      </div>

      <!-- 3 -->
      <div class="history">
        <span class="history_badge">Nombre antiguo</span>
        <h3>“Hato de Fusagasugá”</h3>
        <p>
          El sitio fue conocido inicialmente como <strong>Hato de Fusagasugá</strong>. Con el tiempo,
          el poblamiento y la organización del territorio consolidaron el nacimiento del casco urbano.
        </p>
        <img src="../../view/history/img/cacicazgo4.png" alt="Ilustración simbólica de organización territorial y cacicazgos" loading="lazy" decoding="async">
      </div>

      <!-- 4 -->
      <div class="history">
        <span class="history_badge">1870</span>
        <h3>Poblamiento y fundación del poblado</h3>
        <p>
          En <strong>1870</strong> llegaron numerosos pobladores procedentes de <strong>Guasca</strong>.
          Entre ellos se menciona a <strong>Vicente Rodríguez</strong>, quien cedió área para fundar el pueblo
          y construyó la primera casa; por ello se le considera uno de los principales fundadores.
          La fecha que se destaca como <strong>fundación del poblado</strong> es el <strong>22 de octubre de 1870</strong>.
        </p>
        <img src="../../view/history/img/nombrearbelaez7.png" alt="Referencia histórica del origen del poblado" loading="lazy" decoding="async">
      </div>

      <!-- 5 -->
      <div class="history">
        <span class="history_badge">1886</span>
        <h3>Creación como municipio</h3>
        <p>
          Arbeláez se creó como municipio por <strong>Decreto No. 32 del 16 de enero de 1886</strong>.
          Se dispuso su funcionamiento y límites, y se menciona como primer alcalde a <strong>Ramón Rodríguez</strong>.
          El nombre honra al arzobispo <strong>Vicente Arbeláez</strong>.
        </p>
        <img src="../../view/history/img/independencia6.png" alt="Organización territorial y creación municipal" loading="lazy" decoding="async">
      </div>

      <!-- 6 -->
      <div class="history">
        <span class="history_badge">1902–1904</span>
        <h3>Guerra de los Mil Días: incendio y reconstrucción</h3>
        <p>
          El <strong>29 de enero de 1902</strong>, durante la Guerra de los Mil Días, el poblado fue incendiado
          y arrasado. La reconstrucción comenzó en <strong>1904</strong>, y ese periodo marcó profundamente
          la memoria local.
        </p>
        <img src="../../view/history/img/ganaderia5.png" alt="Imagen simbólica de reconstrucción y vida rural" loading="lazy" decoding="async">
      </div>

      <!-- 7 -->
      <div class="history">
        <span class="history_badge">1932–1955</span>
        <h3>Reconstrucción y nueva iglesia</h3>
        <p>
          A inicios del siglo XX, la iglesia antigua fue reconstruida por el párroco <strong>Julio Sabogal</strong>.
          Más adelante, una <strong>nueva iglesia</strong> empezó a construirse en <strong>1932</strong> y fue
          <strong>consagrada el 19 de marzo de 1955</strong>.
        </p>
        <img src="../../view/history/img/iglesia-arbelaez.jpg" alt="Iglesia y centro del municipio" loading="lazy" decoding="async">
      </div>

      <!-- 8 -->
      <div class="history">
        <span class="history_badge">1947</span>
        <h3>Hospital San Antonio</h3>
        <p>
          En <strong>1947</strong> se creó el <strong>Hospital San Antonio</strong>, un paso importante
          para la infraestructura de salud del municipio.
        </p>
        <img src="../../view/history/img/cultivos8.png" alt="Imagen simbólica del desarrollo comunitario y rural" loading="lazy" decoding="async">
      </div>

      <!-- 9 -->
      <div class="history">
        <span class="history_badge">2001</span>
        <h3>Hecho de memoria reciente</h3>
        <p>
          El <strong>19 de junio de 2001</strong>, el municipio sufrió un ataque atribuido al <strong>frente 42 de las FARC</strong>,
          con daños a infraestructura y víctimas fatales.
        </p>
        <img src="../../view/history/img/paisajes9.png" alt="Paisajes de Arbeláez como símbolo de resiliencia" loading="lazy" decoding="async">
      </div>

      <!-- 10 -->
      <div class="history">
        <span class="history_badge">Hoy</span>
        <h3>Tradición agrícola + turismo sostenible</h3>
        <p>
          Arbeláez mantiene una base agrícola (café, caña, yuca, plátano y otros cultivos) y, en las últimas décadas,
          ha fortalecido el turismo de descanso y naturaleza. La meta es crecer sin perder identidad: historia,
          cultura, veredas y hospitalidad.
        </p>
        <img src="../../view/history/img/pueblo.jpg" alt="Arbeláez: vida tranquila, veredas y tradición" loading="lazy" decoding="async">
      </div>
    </div>
  </div>

  <!-- COSTUMBRES -->
  <div class="container_history">
    <h1>Costumbres y territorio</h1>

    <div class="box_history box_history--customs">
      <div class="history is_text">
        <span class="history_badge">Diciembre</span>
        <h3>La Diablada (tradición decembrina)</h3>
        <p>
          En diciembre, Arbeláez vive una tradición cultural muy reconocida: <strong>La Diablada</strong>,
          con recorrido por el municipio, máscaras, comparsas y encuentro comunitario.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Julio</span>
        <h3>Fiesta de la Virgen del Carmen</h3>
        <p>
          Una de las festividades destacadas del municipio es la <strong>Fiesta de la Virgen del Carmen</strong>,
          que reúne a la comunidad en un ambiente de fe, música y tradición.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Cultura</span>
        <h3>Festival del Retorno</h3>
        <p>
          El <strong>Festival del Retorno</strong> se reconoce como una festividad importante para reencontrarse,
          celebrar identidad local y compartir con visitantes y familias que vuelven al pueblo.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Campo</span>
        <h3>Jornadas rurales</h3>
        <p>
          Las veredas conservan oficios y redes de apoyo: trabajo compartido en cosechas, aprendizaje entre vecinos
          y un ritmo de vida conectado con la tierra.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Domingo</span>
        <h3>Mercado campesino</h3>
        <p>
          El <strong>domingo</strong> es un día clave: mercado, encuentro familiar y movimiento en el centro.
          Es una buena fecha para que el turista vea la vida real del municipio.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Naturaleza</span>
        <h3>Rutas y senderos</h3>
        <p>
          Caminos veredales entre cafetales, guaduales y quebradas: espacios de caminata, descanso y fotografía
          para quienes visitan buscando tranquilidad.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Sabores</span>
        <h3>Gastronomía local</h3>
        <p>
          Café, envueltos, cuajada con melao y sabores caseros: lo simple aquí se vuelve memorable
          por la forma de recibir y compartir.
        </p>
      </div>

      <div class="history is_text">
        <span class="history_badge">Hospitalidad</span>
        <h3>“El visitante es vecino”</h3>
        <p>
          Una costumbre que no se pierde: saludar, conversar, ofrecer un tinto y orientar al que llega.
          Esa calidez también es patrimonio.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección imagen (postal) -->
<section class="seccion_imagen" aria-label="Postales de café">
  <div class="imagen">
    <div class="text_imagen">
      <h1>Arbeláez es ese abrazo que llega con aroma a café y brisa de montaña</h1>
      <p>Donde los ríos susurran historias y las tardes, doradas, prometen volver.</p>
      <a href="https://wa.me/3138846378" target="_blank" rel="noopener noreferrer">
        <button type="button">Envía un dato curioso</button>
      </a>
    </div>
  </div>
</section>
