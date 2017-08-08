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
		height : 400px;
	}
	.image-container img{
		height:auto !important;
	}
	.image-container .frame{
		height:auto !important;
	}

</style>

<div class="grid">
	<div class="row cells2">
		<div class="cell">
			<h5>image-container</h5>
			<div class="image-container">
				<div class="frame"><img src="../../img/uwp/1.jpg"></div>
			</div>
		</div>
		<div class="cell">
			<h5>&amp;.rounded</h5>
			<div class="image-container rounded">
				<div class="frame"><img src="../../img/uwp/1.jpg"></div>
			</div>
		</div>
	</div>
	<div class="row cells2">
		<div class="cell">
			<h5>&amp;.bordered</h5>
			<div class="image-container bordered">
				<div class="frame"><img src="../../img/uwp/1.jpg"></div>
			</div>
		</div>
		<div class="cell">
			<h5>&amp;.polaroid</h5>
			<div class="image-container polaroid">
				<div class="frame"><img src="../../img/uwp/1.jpg"></div>
			</div>
		</div>
	</div>
	<div class="row cells2">
		<div class="cell">
			<h5>&amp;.handing</h5>
			<div class="image-container bordered handing image-format-hd">
				<div class="frame">
					<img src="../../img/uwp/1.jpg">
				</div>
			</div>
		</div>
		<div class="cell">
			<h5>&amp;.handing.ani</h5>
			<div class="image-container bordered handing ani image-format-hd">
				<div class="frame">
					<img src="../../img/uwp/1.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class="row cells2">	
		<div class="cell">
			<h5>image-container with overlay</h5>
			<div class="image-container">
				<div class="frame"><img src="../../img/uwp/2.jpg"></div>
				<div class="image-overlay">
					<h2>Image title</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
		</div>
		<div class="cell">
			<h5>image-container selected</h5>
			<div class="image-container element-selected">
				<div class="frame"><img src="../../img/uwp/4.jpg"></div>
				<div class="image-overlay">
					<h2>Image title</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>