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
<link href="http://cdn.metroui.org.ua/css/metro-colors.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="padding20 no-padding-right no-padding-left no-padding-top">
		<button class="button" onclick="metroDialog.toggle('#dialog')">Show dialog</button>
		<button class="button" onclick="metroDialog.toggle('#dialog2')">Show dialog2</button>
		<button class="button success" onclick="metroDialog.toggle('#dialog3')">Success</button>
		<button class="button warning" onclick="metroDialog.toggle('#dialog4')">Warning</button>
		<button class="button alert" onclick="metroDialog.toggle('#dialog5')">Alert</button>
		<button class="button info" onclick="metroDialog.toggle('#dialog6')">Info</button>
		<button class="button" onclick="metroDialog.toggle('#dialog10')">Custom colors</button>
		<button class="button" onclick="metroDialog.toggle('#dialog7')">Windows Style</button>
		<button class="button" onclick="metroDialog.toggle('#dialog8')">Overlay</button>
		<button class="button" onclick="metroDialog.toggle('#dialog9')">Overlay 2</button>
	</div>
	<div data-role="dialog" id="dialog" class="padding20 dialog" data-close-button="true" style="width: auto; height: auto; visibility: visible; left: 209px; top: 384.5px;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog2" class="padding20 dialog success" data-close-button="true" data-type="success" style="width: auto; height: auto; visibility: hidden; left: 260px; top: 378px;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog3" class="padding20 dialog success" data-close-button="true" data-type="success" style="width: auto; height: auto; visibility: hidden; left: 260px; top: 378px;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog4" class="padding20 dialog warning" data-close-button="true" data-type="warning" style="width: auto; height: auto; visibility: hidden; left: 209px; top: 384.5px;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog5" class="padding20 dialog alert" data-close-button="true" data-type="alert" style="width: auto; height: auto; visibility: hidden;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog6" class="padding20 dialog info" data-close-button="true" data-type="info" style="width: auto; height: auto; visibility: hidden;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog7" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: hidden;">
		<div class="container">
			<h1>Simple dialog</h1>
			<p>
				Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
			</p>
		</div>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog8" class="info padding20 dialog" data-close-button="true" data-overlay="true" style="width: auto; height: auto; visibility: hidden;">
		<h1>Simple dialog</h1>
		<p>
			This dialog with default overlay
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog9" class="padding20 dialog" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true" style="width: auto; height: auto; visibility: hidden;">
		<h1>Simple dialog</h1>
		<p>
			This dialog with colored overlay
		</p>
	<span class="dialog-close-button"></span></div>
	<div data-role="dialog" id="dialog10" class="padding20 dialog success" data-close-button="true" data-type="success" style="width: auto; height: auto; visibility: hidden; left: 260px; top: 378px;">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	<span class="dialog-close-button"></span></div>
</div>