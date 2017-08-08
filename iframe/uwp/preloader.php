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
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="grid">
		<h4>Ring</h4>
		<div class="row cells3">
			<div class="cell padding20 bg-dark">
				<div data-role="preloader" data-type="ring" style="margin: auto" class="preloader-ring"><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="ring" data-style="dark" style="margin: auto" class="preloader-ring dark-style"><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="ring" data-style="color" style="margin: auto" class="preloader-ring color-style"><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div><div class="wrap"><div class="circle"></div></div></div>
			</div>
		</div>

		<h4>Metro</h4>
		<div class="row cells3">
			<div class="cell padding20 bg-dark">
				<div data-role="preloader" data-type="metro" style="margin: 30px auto" class="preloader-metro"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="metro" data-style="dark" style="margin: 30px  auto" class="preloader-metro dark-style"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="metro" data-style="color" style="margin: 30px  auto" class="preloader-metro color-style"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>
			</div>
		</div>

		<h4>Square</h4>
		<div class="row cells3">
			<div class="cell padding20 bg-dark">
				<div data-role="preloader" data-type="square" style="margin: auto" class="preloader-square"><div class="square"></div><div class="square"></div><div class="square"></div><div class="square"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="square" data-style="dark" style="margin: auto" class="preloader-square dark-style"><div class="square"></div><div class="square"></div><div class="square"></div><div class="square"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="square" data-style="color" style="margin: auto" class="preloader-square color-style"><div class="square"></div><div class="square"></div><div class="square"></div><div class="square"></div></div>
			</div>
		</div>

		<h4>Cycle</h4>
		<div class="row cells3">
			<div class="cell padding20 bg-dark">
				<div data-role="preloader" data-type="cycle" style="margin: auto" class="preloader-cycle"><div class="cycle"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="cycle" data-style="dark" style="margin: auto" class="preloader-cycle dark-style"><div class="cycle"></div></div>
			</div>
			<div class="cell padding20 bg-white">
				<div data-role="preloader" data-type="cycle" data-style="color" style="margin: auto" class="preloader-cycle color-style"><div class="cycle"></div></div>
			</div>
		</div>
	</div>
</div>