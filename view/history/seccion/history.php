<?php
$cssPath = '../../view/history/seccion/history.css';
$cssTime = @filemtime($cssPath) ?: time();
?>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= $cssPath ?>?v=<?= $cssTime ?>">

<section class="section_history" aria-label="Historia y costumbres de Arbeláez">
  <!-- HISTORIA DE ARBELÁEZ -->
  <div class="container_history">
    <h1>Historia de Arbeláez <br> Villa de los Pensionados</h1>

    <div class="box_history">
      <div class="history">
        <p>El territorio del actual municipio de Arbeláez estuvo habitado por los indígenas sutagaos, contando también con presencia de los muiscas.</p>
        <img src="../../view/history/img/sutagaos1.2.png" alt="Representación de los Sutagaos y Muiscas" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Antes de la llegada de los españoles, la región de Arbeláez estaba habitada por los Panches, un pueblo indígena guerrero. Eran enemigos de los Muiscas y se caracterizaban por su resistencia y tácticas de combate.</p>
        <img src="../../view/history/img/panches2.png" alt="Ilustración sobre los Panches" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>En 1537, los conquistadores españoles, liderados por Gonzalo Jiménez de Quesada, iniciaron la invasión del territorio Panche. La resistencia fue fuerte, pero en 1538, los Panches fueron sometidos por los españoles con la ayuda de los Muiscas.</p>
        <img src="../../view/history/img/conquista3.png" alt="Escena de la conquista española" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Los Panches practicaban la caza, la pesca y la agricultura y tenían una sociedad organizada en cacicazgos.</p>
        <img src="../../view/history/img/cacicazgo4.png" alt="Cacicazgos indígenas" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Durante la colonia, la región formó parte de encomiendas administradas por los españoles. Estas tierras fueron utilizadas para la ganadería y la agricultura, con una población indígena reducida.</p>
        <img src="../../view/history/img/ganaderia5.png" alt="Ganadería y agricultura en la colonia" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>En el siglo XIX, tras la independencia, los territorios de Cundinamarca se organizaron en municipios y provincias. La zona de Arbeláez aún dependía de Fusagasugá.</p>
        <img src="../../view/history/img/independencia6.png" alt="Independencia y organización territorial" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>El 16 de abril de 1903, Arbeláez fue fundado oficialmente como municipio, separándose de Fusagasugá. El nombre honra al arzobispo de Bogotá don Vicente Arbeláez.</p>
        <img src="../../view/history/img/nombrearbelaez7.png" alt="Acto conmemorativo del nombre de Arbeláez" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Durante el siglo XX se consolidó como municipio agrícola y ganadero con cultivos de café, plátano, maíz y caña de azúcar, además de la cría de ganado.</p>
        <img src="../../view/history/img/cultivos8.png" alt="Cultivos y actividad agrícola" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>En las últimas décadas, el turismo ecológico ha cobrado importancia: clima templado, paisajes y fincas campestres lo hacen un destino de descanso.</p>
        <img src="../../view/history/img/paisajes9.png" alt="Paisajes de Arbeláez" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Hoy el municipio busca equilibrar tradición agrícola, tecnología y turismo sostenible, preservando su historia y cultura.</p>
        <img src="../../view/history/img/iglesia-arbelaez.jpg" alt="Iglesia y centro del municipio" loading="lazy" decoding="async">
      </div>

      <!-- CONTENIDO EXTRA (historia/entorno) -->
      <div class="history">
        <p>El casco urbano creció alrededor de la plaza principal y el templo, núcleo de ferias, encuentros y vida comunitaria.</p>
        <img src="../../view/history/img/nombrearbelaez7.png" alt="Plaza principal de Arbeláez" loading="lazy" decoding="async">
      </div>
      <div class="history">
        <p>Las veredas conservan oficios rurales y redes de apoyo vecinal: mingas, trueque y trabajo compartido en cosechas.</p>
        <img src="../../view/history/img/independencia6.png" alt="Veredas y paisajes rurales" loading="lazy" decoding="async">
      </div>
    </div>
  </div>

  <!-- DATOS CURIOSOS / COSTUMBRES -->
  <div class="container_history">
    <h1>Costumbres y territorio</h1>

    <div class="box_history">
      <div class="history"><p><strong>Feria del Diablo:</strong> comparsas nocturnas, máscaras y sátira al “mal” para celebrar la vida en comunidad.</p></div>
      <div class="history"><p><strong>Jornadas de campo:</strong> cosecha de café y caña con beneficio y secado al sol en patios y zarandas.</p></div>
      <div class="history"><p><strong>Días de río:</strong> plan familiar de hamaca, almuerzo de olla y chapuzón en pozos naturales.</p></div>
      <div class="history"><p><strong>Ferias agropecuarias:</strong> exhibiciones equinas/bovinas, emprendimientos locales y música en vivo.</p></div>
      <div class="history"><p><strong>Fiestas patronales:</strong> procesiones, novenas y alumbrados que unen a barrios y veredas.</p></div>
      <div class="history"><p><strong>Mercados campesinos:</strong> frutas andinas, quesos, miel, café y artesanías directamente del productor.</p></div>
      <div class="history"><p><strong>Rutas de senderismo:</strong> caminos veredales entre cafetales, guaduales y quebradas.</p></div>
      <div class="history"><p><strong>Oficios locales:</strong> carpintería en guadua, tejeduría y arte decorativo para el hogar.</p></div>
      <div class="history"><p><strong>Encuentros culturales:</strong> danza folclórica, coplas y cuentería en plazas y colegios.</p></div>
      <div class="history"><p><strong>Hospitalidad:</strong> el visitante es “vecino”; siempre habrá una taza de café y conversación.</p></div>
      <div class="history"><p><strong>Domingo en el parque:</strong> misa, helado y paseo por el centro: la agenda clásica.</p></div>
      <div class="history"><p><strong>Deporte campestre:</strong> ciclomontañismo y trote mañanero por vías rurales y bosques.</p></div>

      <!-- CONTENIDO EXTRA (gastronomía/naturaleza) -->
      <div class="history"><p><strong>Sabores locales:</strong> arepa de chócolo, envueltos, cuajada con melao y café de origen.</p></div>
      <div class="history"><p><strong>Naturaleza viva:</strong> avistamiento de aves, orquídeas y jardines caseros en flor todo el año.</p></div>
      <div class="history"><p><strong>Artes y oficios:</strong> talla en madera, tejidos a mano y cerámica utilitaria con sello veredal.</p></div>
    </div>
  </div>
</section>

<!-- Sección imagen (parallax con máscara) -->
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
