<?php
$cssTime = filemtime('../../../view/gastronomia/El_Huerto/galery/gastronomia.css');
$jsTime  = filemtime('../../../view/gastronomia/El_Huerto/galery/gastronomia.js');
?>
<link rel="stylesheet" href="../../../view/gastronomia/El_Huerto/galery/gastronomia.css?v=<?= $cssTime ?>">

<section class="section_food_gallery" id="galery_El_Huerto">

  <!-- Título principal -->
  <h1>Nuestra Gastronomía</h1>

  <!-- ===== Filtros de categorías ===== -->
  <div class="categories_food_gallery">
    <ul>
      <li class="filter_items active" data-filter="all">Todos</li>
      <li class="filter_items" data-filter="Pizza">Pizza</li>
      <li class="filter_items" data-filter="Hamburguesas">Hamburguesas</li>
      <li class="filter_items" data-filter="General">General</li>
    </ul>
  </div>

  <!-- ===== Contenedor de platos ===== -->
  <div class="food_gallery_container">

    <!-- ===== PIZZAS (pizza.jpg a pizza6.jpg) ===== -->
    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza.jpg" alt="Pizza artesanal Del Huerto" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza2.jpg" alt="Pizza del Huerto con vegetales frescos" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza3.jpg" alt="Pizza artesanal recién horneada" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div>fsddfgdf</div>
    </div>

    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza4.jpg" alt="Pizza Del Huerto con queso y tomate" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza5.jpg" alt="Porción de pizza servida en mesa" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Pizza">
      <img src="../../../view/gastronomia/El_Huerto/img/pizza6.jpg" alt="Pizza especial de la casa" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- ===== HAMBURGUESAS (burger.jpg a burger3.jpg) ===== -->
    <div class="food_card Hamburguesas">
      <img src="../../../view/gastronomia/El_Huerto/img/burger.jpg" alt="Hamburguesa artesanal Del Huerto" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Hamburguesas">
      <img src="../../../view/gastronomia/El_Huerto/img/burger2.jpg" alt="Hamburguesa con papas y salsas" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card Hamburguesas">
      <img src="../../../view/gastronomia/El_Huerto/img/burger3.jpg" alt="Hamburguesa doble carne Del Huerto" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <!-- ===== GENERAL (general.jpg a general2.jpg) ===== -->
    <div class="food_card General">
      <img src="../../../view/gastronomia/El_Huerto/img/general.jpg" alt="Plato general de la carta Del Huerto" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

    <div class="food_card General">
      <img src="../../../view/gastronomia/El_Huerto/img/general2.jpg" alt="Variedad de platos Del Huerto" loading="lazy" decoding="async">
      <div class="overlay_food_card"><div class="food_info"></div></div>
    </div>

  </div>
</section>

<script src="../../../view/gastronomia/El_Huerto/galery/gastronomia.js?v=<?= $jsTime ?>" type="text/javascript"></script>
