<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.css" rel="stylesheet">
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
			<label>Button with icon font</label>
			<div class="input-control file full-size" data-role="input">
				<input type="file" style="z-index: 0;" tabindex="-1">
				<button class="button" type="button"><span class="mif-folder"></span></button>
			</div>
		</div>
		<div class="cell">
			<label>Button with image</label>
			<div class="input-control file full-size" data-role="input">
				<input type="file" style="z-index: 0;" tabindex="-1" >
				<button class="button" type="button"><img src="../../img/uwp/Blank_Folder.png"></button>
			</div>
		</div>
		<div class="cell">
			<label>Disabled input</label>
			<div class="input-control file full-size" data-role="input">
				<input type="file" disabled="" style="z-index: 0;" tabindex="-1">
				<button class="button" type="button"><img src="../../img/uwp/Blank_Folder.png"></button>
			</div>
		</div>
	</div>
</div>
</body>