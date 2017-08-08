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
			<div class="input-control modern text " data-role="input">
				<input type="text" style="padding-right: 5px;">
				<span class="label">You login</span>
				<span class="informer">Please enter you login or email</span>
				<span class="placeholder" style="display: block;">Input login</span>
			</div>
		</div>
		<div class="cell">
			<div class="input-control modern text iconic" data-role="input">
				<input type="text" style="padding-right: 5px;">
				<span class="label">You login</span>
				<span class="informer">Please enter you login or email</span>
				<span class="placeholder" style="display: block;">Input login</span>
				<span class="icon mif-user"></span>
			</div>
		</div>
		<div class="cell">
			<div class="input-control modern password iconic " data-role="input">
				<input type="password" style="padding-right: 36px;">
				<span class="label">You password</span>
				<span class="informer">Please enter you password</span>
				<span class="placeholder" style="display: block;">Input password</span>
				<span class="icon mif-lock"></span>
				<button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
			</div>
		</div>
	</div>
</div>
</body>