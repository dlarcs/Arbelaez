<?php
$cssTime = filemtime('../../../view/alojamiento/La_Casita2/galery/productos.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../../view/alojamiento/La_Casita2/galery/productos.js');   // ejemplo: '../Home/5.Video/video.js'
?>
	<link rel="stylesheet" href="../../../view/alojamiento/La_Casita2/galery/productos.css?v=<?= $cssTime ?>">
	<!-- ===== General (4) ===== -->
	<div class="food_card General"><img src="../../../view/alojamiento/La_Casita2/img/general1.jpeg" alt="General 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card General"><img src="../../../view/alojamiento/La_Casita2/img/general2.jpeg" alt="General 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card General"><img src="../../../view/alojamiento/La_Casita2/img/general3.jpeg" alt="General 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card General"><img src="../../../view/alojamiento/La_Casita2/img/general4.jpeg" alt="General 4" width="1200" height="800" loading="lazy" decoding="async"></div>

	<!-- ===== Habitaciones (6) ===== -->
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion1.jpeg" alt="Habitaciones 1" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion2.jpeg" alt="Habitaciones 2" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion3.jpeg" alt="Habitaciones 3" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion4.jpeg" alt="Habitaciones 4" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion5.jpeg" alt="Habitaciones 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion6.jpeg" alt="Habitaciones 6" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion7.jpeg" alt="Habitaciones 5" width="1200" height="800" loading="lazy" decoding="async"></div>
	<div class="food_card Habitaciones"><img src="../../../view/alojamiento/La_Casita2/img/habitacion8.jpeg" alt="Habitaciones 6" width="1200" height="800" loading="lazy" decoding="async"></div>



	<script src="<?php echo '../../../view/alojamiento/La_Casita2/galery/productos.js?v=' . filemtime('../../../view/alojamiento/La_Casita2/galery/productos.js'); ?>" type="text/javascript"></script>
