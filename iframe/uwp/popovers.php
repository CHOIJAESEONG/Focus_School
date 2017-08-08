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
	<div class="row cells4">
		<div class="cell">
			<div class="popover marker-on-top bg-amber">
				<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
			</div>
		</div>
		<div class="cell">
			<div class="popover marker-on-bottom bg-pink">
				<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
			</div>
		</div>
		<div class="cell">
			<div class="popover marker-on-left bg-darkRed fg-white">
				<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
			</div>
		</div>
		<div class="cell">
			<div class="popover marker-on-right bg-cyan">
				<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
			</div>
		</div>
	</div>
	<h5>Popover by Click</h5>
	<div>
		<button class="button" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="top" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
		<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="bottom" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
		<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="left" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
		<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="right" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
	</div>

	<h5>Popover by Click</h5>
	<div>
		<input type="text" placeholder="установите сюда курсор" data-role="popover" data-popover-position="right" data-popover-text="Введите Ваши данные, Поле не может быть пустым" data-popover-background="bg-red" data-popover-color="fg-white" data-popover-mode="focus">
	</div>

	<h5>Popover by script</h5>
	<div>
		<input id="popover_by_script" type="text" placeholder="нажмите кнопку справа" data-role="popover" data-popover-position="bottom" data-popover-text="Вы нажали кнопку" data-popover-background="bg-green" data-popover-color="fg-white">
		<button class="button" onclick="$('#popover_by_script').popover('show')">Click me</button>
	</div>
</div>
</div>