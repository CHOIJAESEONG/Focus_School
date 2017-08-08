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
		width: 65% !important;
		margin: 0 auto;
	}
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="row cells4">
		<div class="cell">
			<h5>Default</h5>
			<div class="slider" data-role="slider"><div class="slider-backside"></div><div class="complete" style="width: 0px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker" style="left: 0px;"></a></div>
		</div>
		<div class="cell">
			<h5>With hint</h5>
			<div class="slider permanent-hint" data-role="slider" data-show-hint="true" data-permanent-hint="true" data-position="35"><div class="slider-backside"></div><div class="complete" style="width: 85px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker" style="left: 85px;"></a><span class="slider-hint" style="left: 75.5px;">35</span></div>
		</div>
		<div class="cell">
			<h5>With hint bottom</h5>
			<div class="slider permanent-hint hint-bottom" data-role="slider" data-show-hint="true" data-permanent-hint="true" data-hint-position="bottom" data-position="35"><div class="slider-backside"></div><div class="complete" style="width: 85px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker" style="left: 85px;"></a><span class="slider-hint" style="left: 75.5px;">35</span></div>
		</div>
		<div class="cell">
			<h5>Accuracy mode</h5>
			<div class="slider" data-accuracy="10" data-role="slider" data-complete-color="ribbed-red" data-marker-color="blue" data-show-hint="true"><div class="slider-backside"></div><div class="complete ribbed-red" style="width: 0px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker blue" style="left: 0px;"></a><span class="slider-hint" style="left: -9.5px;">0</span></div>
		</div>
	</div>
	<div class="row cells4">
		<div class="cell">
			<h5>Buffered</h5>
			<div class="slider" data-role="slider" data-position="35" data-buffer="75"><div class="slider-backside"></div><div class="complete" style="width: 85px;"></div><div class="buffer" style="width: 75%;"></div><a class="marker" style="left: 85px;"></a></div>
		</div>
		<div class="cell">
			<h5>Cycle marker</h5>
			<div class="slider cycle-marker" data-role="slider" data-position="35" data-buffer="75"><div class="slider-backside"></div><div class="complete" style="width: 85px;"></div><div class="buffer" style="width: 75%;"></div><a class="marker" style="left: 85px;"></a></div>
		</div>
		<div class="cell">
			<h5>Customize</h5>
			<div class="slider" data-role="slider" data-complete-color="ribbed-green" data-marker-color="bg-cyan" data-color="bg-lightRed"><div class="slider-backside bg-lightRed"></div><div class="complete ribbed-green" style="width: 0px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker bg-cyan" style="left: 0px;"></a></div>
		</div>
		<div class="cell">
			<h5>Ani complete</h5>
			<div class="slider ani" data-role="slider" data-complete-color="ribbed-green" data-marker-color="bg-cyan" data-color="bg-lightRed" data-position="75"><div class="slider-backside bg-lightRed"></div><div class="complete ribbed-green" style="width: 182px;"></div><div class="buffer" style="width: 0%;"></div><a class="marker bg-cyan" style="left: 182px;"></a></div>
		</div>
	</div>
	<div class="row cells4">
		<div class="cell">
			<h5>Vertical</h5>
			<div class="slider vertical" data-role="slider" data-vertical="true"><div class="slider-backside"></div><div class="complete" style="height: 10px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker" style="top: 90px;"></a></div>
			<div class="slider cycle-marker vertical" data-role="slider" data-vertical="true" data-position="100"><div class="slider-backside"></div><div class="complete" style="height: 90px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker" style="top: 10px;"></a></div>
			<div class="slider vertical" data-role="slider" data-vertical="true" data-position="35" data-buffer="75"><div class="slider-backside"></div><div class="complete" style="height: 38px;"></div><div class="buffer" style="height: 75%;"></div><a class="marker" style="top: 62px;"></a></div>
		</div>
		<div class="cell">
			<h5>Vertical With hint</h5>
			<div class="slider vertical permanent-hint hint-left" data-role="slider" data-show-hint="true" data-vertical="true" data-hint-position="left" data-position="50" data-permanent-hint="true"><div class="slider-backside"></div><div class="complete" style="height: 50px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker" style="top: 50px;"></a><span class="slider-hint" style="top: 36.9px;">50</span></div>
			<div class="slider vertical permanent-hint" data-role="slider" data-show-hint="true" data-vertical="true" data-hint-position="right" data-position="50" data-permanent-hint="true"><div class="slider-backside"></div><div class="complete" style="height: 50px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker" style="top: 50px;"></a><span class="slider-hint" style="top: 36.9px;">50</span></div>
		</div>
		<div class="cell">
			<h5>Vertical Customize</h5>
			<div class="slider vertical" data-role="slider" data-complete-color="ribbed-red" data-marker-color="blue" data-vertical="true" data-position="60"><div class="slider-backside"></div><div class="complete ribbed-red" style="height: 58px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker blue" style="top: 42px;"></a></div>
			<div class="slider ani vertical" data-role="slider" data-complete-color="ribbed-cyan" data-marker-color="blue" data-vertical="true" data-position="60"><div class="slider-backside"></div><div class="complete ribbed-cyan" style="height: 58px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker blue" style="top: 42px;"></a></div>
		</div>
		<div class="cell">
			<h5>Accuracy mode</h5>
			<div class="slider vertical" data-accuracy="10" data-role="slider" data-complete-color="ribbed-red" data-vertical="true" data-show-hint="true"><div class="slider-backside"></div><div class="complete ribbed-red" style="height: 10px;"></div><div class="buffer" style="height: 0%;"></div><a class="marker" style="top: 90px;"></a><span class="slider-hint" style="top: 76.9px;">0</span></div>
		</div>
	</div>
</div>