<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<style>
	
	.grid{
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


<div class="grid">
	<div class="row cells3">
		<div class="cell">
			<h5>Default</h5>
			<div class="input-control textarea full-size">
				<textarea></textarea>
			</div>
		</div>
		<div class="cell">
			<h5>Auto resize height</h5>
			<div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true">
				<textarea></textarea>
			</div>
		</div>
		<div class="cell">
			<h5>Auto resize with max height</h5>
			<div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true" data-text-max-height="200">
				<textarea></textarea>
			</div>
		</div>
	</div>
</div>
</body>