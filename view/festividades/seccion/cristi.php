<?php
$cssTime = filemtime('../../view/festividades/seccion/cristi.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/festividades/seccion/cristi.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/festividades/seccion/cristi.css?v=<?= $cssTime ?>">



<section>
	<div class="marquee-wrapper" id="marqueeWrapper">
		 <div class="fade-left"></div>

		 <div class="marquee-inner" id="marqueeInner">
			 <div class="marquee-track" id="marqueeTrack"></div>
		 </div>

		 <div class="fade-right"></div>
	 </div>

	 <script src="script.js"></script>
</section>

<script src="../../view/festividades/seccion/cristi.js?v=<?= $jsTime ?>" type="text/javascript"></script>
