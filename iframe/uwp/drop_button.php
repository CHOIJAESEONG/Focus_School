
<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
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
		height : 150px;
	}

</style>

<div class="margin10">
	<div class="dropdown-button">
		<button class="button dropdown-toggle">Menu</button>
		<ul class="split-content d-menu" data-role="dropdown" style="display: none;">
			<li><a href="#">Reply</a></li>
			<li><a href="#">Reply All</a></li>
			<li><a href="#">Forward</a></li>
		</ul>
	</div>
	<div class="dropdown-button place-right active-container">
		<button class="button dropdown-toggle active-toggle">Menu</button>
		<ul class="split-content d-menu place-right" data-role="dropdown" style="display: block;">
			<li><a href="#">Reply</a></li>
			<li><a href="#">Reply All</a></li>
			<li><a href="#">Forward</a></li>
		</ul>
	</div>
</div>
</body>