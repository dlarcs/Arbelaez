<?php
$cssTime = filemtime('../../view/Radio/galery/galery.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/Radio/galery/galery.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/Radio/galery/galery.css?v=<?= $cssTime ?>">


<!-- ===== Sección de Gastronomía ===== -->
 <section class="section_Radio_gallery">

  <!-- Título principal -->
 <h1>Radio de Arbelaez Cundinamarca</h1>

  <!-- ===== Filtros de categorías ===== -->
 <div class="categories_Radio_gallery">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="adoracion">Agricultores</li>
      <li class="filter_items" data-filter="jovenes">Jovenes</li>
      <li class="filter_items" data-filter="oracion">Maestros</li>
      <li class="filter_items" data-filter="bebidas">Comunidad</li>
    </ul>
  </div>

  <!-- ===== Contenedor de platos ===== -->
 <div class="Radio_gallery_container">

    <!-- ===== Ejemplo Entrada ===== -->
 <div class="Radio_card adoracion">
      <img src="../../view/Radio/img/decoracion_Radio.jpg" alt="Empanadas colombianas">
      <div class="overlay_Radio_card">
        <div class="Radio_info">
          <h3>Fortaleza en la Oración</h3>
          <p class="Radio_desc">Habla con Dios, Él siempre escucha.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Plato fuerte ===== -->
    <div class="Radio_card jovenes">
      <img src="../../view/Radio/img/decoracion_Radio2.jpg" alt="Bandeja Paisa">
      <div class="overlay_Radio_card">
        <div class="Radio_info">
          <h3>Paz que Sobrepasa Todo Entendimiento</h3>
          <p class="Radio_desc">Solo en Dios hallarás verdadera calma.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Postre ===== -->
     <div class="Radio_card oracion">
      <img src="../../view/Radio/img/entrada_Radio.jpg" alt="Arequipe con obleas">
      <div class="overlay_Radio_card">
        <div class="Radio_info">
          <h3>Un Llamado al Perdón</h3>
          <p class="Radio_desc">En Cristo hay gracia y misericordia para todos.</p>
        </div>
      </div>
    </div>

    <!-- ===== Ejemplo Bebida ===== -->
     <div class="Radio_card bebidas">
      <img src="../../view/Radio/img/estatuas.jpg" alt="Jugo de lulo">
      <div class="overlay_Radio_card">
        <div class="Radio_info">
          <h3>Unidos en Adoración</h3>
          <p class="Radio_desc">Ven, celebra y alaba junto a nosotros.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<script src="../../view/Radio/galery/galery.js?v=<?= $jsTime ?>" type="text/javascript"></script>
