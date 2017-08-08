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
	.radio+.radio, .checkbox+.checkbox {
		margin-top : 5px;
	}
	body{
		height : 150px;
	}

</style>


<div class="grid">
	<div class="row cells2">
		<div class="cell">
			<h5>Checkboxes</h5>
			<label class="input-control checkbox">
				<input type="checkbox" checked="">
				<span class="check"></span>
				<span class="caption">Check</span>
			</label>
			<label class="input-control checkbox">
				<input type="checkbox" disabled="">
				<span class="check"></span>
				<span class="caption">Check</span>
			</label>
			<label class="input-control checkbox">
				<input type="checkbox" disabled="" checked="">
				<span class="check"></span>
				<span class="caption">Check</span>
			</label>
			<h5>Indeterminate</h5>
			<label class="input-control checkbox">
				<input type="checkbox" checked="" data-show="indeterminate">
				<span class="check"></span>
				<span class="caption">Check</span>
			</label>
			<label class="input-control checkbox">
				<input type="checkbox" data-show="indeterminate" disabled="">
				<span class="check"></span>
				<span class="caption">Check</span>
			</label>
		</div>
		
		<div class="cell">
			<h5>Radio Buttons</h5>
			<label class="input-control radio">
				<input type="radio" name="n1" checked="">
				<span class="check"></span>
				<span class="caption">Select</span>
			</label>
			<label class="input-control radio">
				<input type="radio" name="n1">
				<span class="check"></span>
				<span class="caption">Select</span>
			</label>
			<label class="input-control radio">
				<input type="radio" name="n2" disabled="">
				<span class="check"></span>
				<span class="caption">Select</span>
			</label>
			<label class="input-control radio">
				<input type="radio" name="n2" disabled="" checked="">
				<span class="check"></span>
				<span class="caption">Select</span>
			</label>
		</div>
	</div>
</div>
</body>