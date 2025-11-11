<?php
$cssTime = filemtime('../../view/Parroquia/galery/galery.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/Parroquia/galery/galery.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/Parroquia/galery/galery.css?v=<?= $cssTime ?>">


<!-- ===== Sección de Gastronomía ===== -->
 <section class="section_iglesia_gallery">

  <!-- Título principal -->
 <h1>arroquia Inmaculada Concepción Arbelaez Cundinamarca</h1>

  <!-- ===== Filtros de categorías ===== -->
 <div class="categories_iglesia_gallery">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="adoracion">Adoración</li>
      <li class="filter_items" data-filter="jovenes">Niños y jovenes</li>
      <li class="filter_items" data-filter="oracion">Oracion</li>
      <li class="filter_items" data-filter="bebidas">Comunidad</li>
    </ul>
  </div>

  <!-- ===== Contenedor de platos ===== -->
 <div class="iglesia_gallery_container">

    <!-- ===== Ejemplo Entrada ===== -->
 <div class="iglesia_card adoracion">
      <img src="../../view/Parroquia/img/decoracion_iglesia.jpg" alt="Empanadas colombianas">
      <div class="overlay_iglesia_card">
        <div class="iglesia_info">
          <h3>Fortaleza en la Oración</h3>
          <p class="iglesia_desc">Habla con Dios, Él siempre escucha.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Plato fuerte ===== -->
    <div class="iglesia_card jovenes">
      <img src="../../view/Parroquia/img/decoracion_iglesia2.jpg" alt="Bandeja Paisa">
      <div class="overlay_iglesia_card">
        <div class="iglesia_info">
          <h3>Paz que Sobrepasa Todo Entendimiento</h3>
          <p class="iglesia_desc">Solo en Dios hallarás verdadera calma.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Postre ===== -->
     <div class="iglesia_card oracion">
      <img src="../../view/Parroquia/img/entrada_iglesia.jpg" alt="Arequipe con obleas">
      <div class="overlay_iglesia_card">
        <div class="iglesia_info">
          <h3>Un Llamado al Perdón</h3>
          <p class="iglesia_desc">En Cristo hay gracia y misericordia para todos.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Bebida ===== -->
     <div class="iglesia_card bebidas">
      <img src="../../view/Parroquia/img/estatuas.jpg" alt="Jugo de lulo">
      <div class="overlay_iglesia_card">
        <div class="iglesia_info">
          <h3>Unidos en Adoración</h3>
          <p class="iglesia_desc">Ven, celebra y alaba junto a nosotros.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<script src="../../view/Parroquia/galery/galery.js?v=<?= $jsTime ?>" type="text/javascript"></script>
