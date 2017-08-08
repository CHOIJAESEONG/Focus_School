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
<link href="http://cdn.metroui.org.ua/css/metro-icons.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="grid">
		<div class="row cells4">
			<div class="cell">
				<div class="notify">
					<span class="notify-title">Notify</span>
					<span class="notify-text">This is a default notify style</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify">
					<span class="notify-icon mif-vpn-publ"></span>
					<span class="notify-title">Notify</span>
					<span class="notify-text">Notify with icon</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify">
					<span class="notify-closer"></span>
					<span class="notify-title">Notify</span>
					<span class="notify-text">Notify with closer</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify success">
					<span class="notify-closer"></span>
					<span class="notify-title">Success</span>
					<span class="notify-text">Notify with success</span>
				</div>
			</div>
		</div>

		<div class="row cells4">
			<div class="cell">
				<div class="notify alert">
					<span class="notify-closer"></span>
					<span class="notify-title">Alert</span>
					<span class="notify-text">Notify with alert</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify warning">
					<span class="notify-closer"></span>
					<span class="notify-title">Warning</span>
					<span class="notify-text">Notify with warning</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify info">
					<span class="notify-closer"></span>
					<span class="notify-title">Info</span>
					<span class="notify-text">Notify with info</span>
				</div>
			</div>
			<div class="cell">
				<div class="notify shadow">
					<span class="notify-closer"></span>
					<span class="notify-title">Shadow</span>
					<span class="notify-text">Notify with shadow</span>
				</div>
			</div>
		</div>
	</div>

	<div class="align-center margin40 no-margin-bottom">
		<button class="button" id="notify_btn_2">Create Notifies</button>
		<script>
			$(function(){
				$('#notify_btn_2').on('click', function(){
					setTimeout(function(){
						$.Notify({keepOpen: true, type: 'default', caption: 'Keep open', content: "This notify in keep-open mode"});
					}, 1000);
					setTimeout(function(){
						$.Notify({type: 'alert', caption: 'Alert', content: "Metro UI CSS is Simple!!!"});
					}, 1000);
					setTimeout(function(){
						$.Notify({type: 'success', caption: 'Success', content: "Metro UI CSS is Sufficient!!!"});
					}, 2000);
					setTimeout(function(){
						$.Notify({type: 'warning', caption: 'Warning', content: "Metro UI CSS is Responsive!!!"});
					}, 3000);
					setTimeout(function(){
						$.Notify({type: 'info', caption: 'Info', content: "Metro UI CSS is Responsive!!!"});
					}, 4000);
					setTimeout(function(){
						$.Notify({caption: 'Default', content: "Default style for notify"});
					}, 5000);
					setTimeout(function(){
						$.Notify({caption: 'Icon', content: "Notify with icon", icon: "<span class='mif-vpn-publ'></span>"});
					}, 6000);
				});
			});
		</script>
	</div>
</div>