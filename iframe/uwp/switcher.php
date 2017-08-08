<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>

<style>
	.grid{
		margin : 30px;
		
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
	<div class="row cells2">
		<div class="cell">
			<h5>Modern Switchers</h5>
			<label class="switch">
				<input type="checkbox" checked="">
				<span class="check"></span>
			</label>
			<label class="switch">
				<input type="checkbox">
				<span class="check"></span>
			</label>
			<label class="switch">
				<input type="checkbox" disabled="">
				<span class="check"></span>
			</label>
			<label class="switch">
				<input type="checkbox" disabled="" checked="">
				<span class="check"></span>
			</label>
		</div>
		<div class="cell">
			<h5>Original Switchers</h5>
			<label class="switch-original">
				<input type="checkbox" checked="">
				<span class="check"></span>
			</label>
			<label class="switch-original">
				<input type="checkbox">
				<span class="check"></span>
			</label>
			<label class="switch-original">
				<input type="checkbox" disabled="">
				<span class="check"></span>
			</label>
			<label class="switch-original">
				<input type="checkbox" disabled="" checked="">
				<span class="check"></span>
			</label>
		</div>
	</div>
</div>
</body>