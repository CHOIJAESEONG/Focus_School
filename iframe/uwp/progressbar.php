<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
	.cell {width:250px; float:left; margin:10px; }
		@media (min-width: 768px) {
		.whole {
			width:25% ;
			left : inherit;
			right: 0;
		}
	} 
	.whole {
		width: 80%;
		margin: 0 auto;
	}
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-colors.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<h5>Default</h5>
	<div class="progress" data-value="85" data-color="bg-red" data-role="progress"><div class="bar bg-red" style="width: 85%;"></div></div>

	<h5>Small</h5>
	<div class="progress small" data-value="30" data-role="progress"><div class="bar default" style="width: 30%;"></div></div>
	
	<h5>Large</h5>
	<div class="progress large" data-value="55" data-color="ribbed-amber" data-role="progress"><div class="bar ribbed-amber" style="width: 55%;"></div></div>

	<h5>Gradient</h5>
	<div class="progress small gradient-bar" data-value="85" data-role="progress"><div class="bar default" style="width: 85%;"></div></div>

	<h5>Animate</h5>
	<div class="progress small" data-animate="500" data-value="85" data-role="progress"><div class="bar default" style="width: 85%;"></div></div>
	<div class="progress large ani" data-value="55" data-color="ribbed-amber" data-role="progress"><div class="bar ribbed-amber" style="width: 55%;"></div></div>
</div>