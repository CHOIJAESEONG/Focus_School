
<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>

<style>
	.margin10{
		margin : 60px;
		
	}
	.navbar-brand img {
		max-width:initial !important;
		height:inherit !important;
	} 
	
	body{
		height : 300px;
	}
	span.title {
		text-align: center;
		font-size: .75rem;
		line-height: 1;
		padding: 0px;
	}
</style>

<div class="margin10">
	<button class="button success block-shadow-success text-shadow">Button</button>
	<button class="button warning block-shadow-warning text-shadow">Button</button>
	<button class="button danger block-shadow-danger text-shadow">Button</button>
	<button class="button info block-shadow-info text-shadow">Button</button>
	<button class="button loading-pulse">Download NOW</button>
	<button class="button loading-pulse lighten primary">Download NOW</button>
	<button class="button loading-cube">Loading...</button>
	<button class="button loading-cube lighten danger">Loading...</button>
</div>
<div class="margin10">
	<button class="command-button">
		<span class="icon mif-share"></span>
		Yes, share and connect
		<small>Use this option for home or work</small>
	</button>
	<button class="command-button icon-right warning">
		<span class="icon mif-share"></span>
		Yes, share and connect
		<small>Use this option for home or work</small>
	</button>
</div>
<div class="margin10">
	<a class="shortcut-button">
		<span class="icon mif-rocket"></span>
		<span class="title">Rocket</span>
	</a>
	<button class="shortcut-button bg-cyan bg-active-darkBlue fg-white">
		<span class="icon mif-rocket"></span>
		<span class="title">Rocket</span>
		<span class="badge">10</span>
	</button>
</div>
</body>