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
	.countdown .part{
		margin:30px 0px;
	}
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-colors.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="align-center">
		<div class="countdown labels-top tick" data-role="countdown" data-minutes="2" data-seconds="30" data-background-color="bg-green" data-divider-color="fg-dark" data-label-color="fg-gray"><div class="part days fg-gray disabled" data-day-text="days"><div class="digit bg-green fg-white">0</div><div class="digit bg-green fg-white">0</div><div class="digit bg-green fg-white">0</div><div class="digit bg-green fg-white">0</div></div><div class="divider fg-dark">:</div><div class="part hours fg-gray disabled" data-day-text="hours"><div class="digit bg-green fg-white">0</div><div class="digit bg-green fg-white">0</div></div><div class="divider fg-dark">:</div><div class="part minutes fg-gray" data-day-text="mins"><div class="digit bg-green fg-white">0</div><div class="digit bg-green fg-white">2</div></div><div class="divider fg-dark">:</div><div class="part seconds fg-gray" data-day-text="secs"><div class="digit bg-green fg-white">2</div><div class="digit bg-green fg-white">5</div></div></div>
	</div>

	<div class="align-center">
		<div class="countdown tick" data-role="countdown" data-hours="2" data-background-color="bg-red" data-divider-color="fg-dark" data-label-color="fg-gray"><div class="part days fg-gray disabled" data-day-text="days"><div class="digit bg-red fg-white">0</div><div class="digit bg-red fg-white">0</div><div class="digit bg-red fg-white">0</div><div class="digit bg-red fg-white">0</div></div><div class="divider fg-dark">:</div><div class="part hours fg-gray" data-day-text="hours"><div class="digit bg-red fg-white">0</div><div class="digit bg-red fg-white">1</div></div><div class="divider fg-dark">:</div><div class="part minutes fg-gray" data-day-text="mins"><div class="digit bg-red fg-white">5</div><div class="digit bg-red fg-white">9</div></div><div class="divider fg-dark">:</div><div class="part seconds fg-gray" data-day-text="secs"><div class="digit bg-red fg-white">5</div><div class="digit bg-red fg-white">5</div></div></div>
	</div>

	<div class="align-center">
		<div class="countdown labels-top tick" data-role="countdown" data-label-color="fg-grayLight" data-divider-color="fg-grayLight" data-days="2" style="font-size: 2rem"><div class="part days fg-grayLight" data-day-text="days"><div class="digit bg-cyan fg-white">0</div><div class="digit bg-cyan fg-white">0</div><div class="digit bg-cyan fg-white">0</div><div class="digit bg-cyan fg-white">1</div></div><div class="divider fg-grayLight">:</div><div class="part hours fg-grayLight" data-day-text="hours"><div class="digit bg-cyan fg-white">2</div><div class="digit bg-cyan fg-white">3</div></div><div class="divider fg-grayLight">:</div><div class="part minutes fg-grayLight" data-day-text="mins"><div class="digit bg-cyan fg-white">5</div><div class="digit bg-cyan fg-white">9</div></div><div class="divider fg-grayLight">:</div><div class="part seconds fg-grayLight" data-day-text="secs"><div class="digit bg-cyan fg-white">5</div><div class="digit bg-cyan fg-white">5</div></div></div>
	</div>

	<div class="align-center">
		<div class="countdown tick" data-role="countdown" data-background-color="ribbed-darkRed" data-label-color="fg-grayLight" data-divider-color="fg-grayLight" data-days="728" style="font-size: 2rem"><div class="part days fg-grayLight" data-day-text="days"><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">7</div><div class="digit ribbed-darkRed fg-white">2</div><div class="digit ribbed-darkRed fg-white">7</div></div><div class="divider fg-grayLight">:</div><div class="part hours fg-grayLight" data-day-text="hours"><div class="digit ribbed-darkRed fg-white">2</div><div class="digit ribbed-darkRed fg-white">3</div></div><div class="divider fg-grayLight">:</div><div class="part minutes fg-grayLight" data-day-text="mins"><div class="digit ribbed-darkRed fg-white">5</div><div class="digit ribbed-darkRed fg-white">9</div></div><div class="divider fg-grayLight">:</div><div class="part seconds fg-grayLight" data-day-text="secs"><div class="digit ribbed-darkRed fg-white">5</div><div class="digit ribbed-darkRed fg-white">5</div></div></div>
	</div>

	<div class="align-center">
		<div class="countdown tick" data-role="countdown" data-background-color="ribbed-darkRed" data-label-color="fg-grayLight" data-divider-color="fg-grayLight" data-seconds="30" data-on-stop="alert('last countdown stopped')"><div class="part days fg-grayLight disabled" data-day-text="days"><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">0</div></div><div class="divider fg-grayLight">:</div><div class="part hours fg-grayLight disabled" data-day-text="hours"><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">0</div></div><div class="divider fg-grayLight">:</div><div class="part minutes fg-grayLight disabled" data-day-text="mins"><div class="digit ribbed-darkRed fg-white">0</div><div class="digit ribbed-darkRed fg-white">0</div></div><div class="divider fg-grayLight">:</div><div class="part seconds fg-grayLight" data-day-text="secs"><div class="digit ribbed-darkRed fg-white">2</div><div class="digit ribbed-darkRed fg-white">5</div></div></div>
	</div>
</div>