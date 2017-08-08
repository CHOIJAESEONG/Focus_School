<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
</style>
	<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
	<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
	
<div class="tabcontrol" data-role="tabcontrol" style="width:800px; border:1px solid skyblue; margin:30px auto;">
	<ul class="tabs">
		<li class=""><a href="#frame_1_1" style="font-size:20px;">Tab 1</a></li>
		<li class=""><a href="#frame_1_2" style="font-size:20px;">Tab 2</a></li>
		<li class=""><a href="#frame_1_3" style="font-size:20px;">Tab 3</a></li>
	</ul>
	<div class="frames bg-grayLight">
		<div class="frame bg-orange" id="frame_1_1" style="font-size:20px;">첫 번째 탭입니다.</div>
		<div class="frame bg-amber" id="frame_1_2" style="font-size:20px;">두 번째 탭입니다.</div>
		<div class="frame bg-lightorange" id="frame_1_3" style="font-size:20px;">세 번째 탭입니다.</div>
	</div>
</div>

<div class="tabcontrol tabs-bottom" data-role="tabcontrol" style="width:800px; border:1px solid skyblue; margin:30px auto;">
	<div class="frames bg-grayLight">
		<div class="frame bg-lime" id="frame_2_1" style="font-size:20px;">첫 번째 탭입니다.</div>
		<div class="frame bg-teal" id="frame_2_2" style="font-size:20px;">두 번째 탭입니다.</div>
		<div class="frame bg-lightblue" id="frame_2_3" style="font-size:20px;">세 번째 탭입니다.</div>
	</div>
	<ul class="tabs tab-bottom">
		<li class=""><a href="#frame_2_1" style="font-size:20px;">Tab 1</a></li>
		<li class=""><a href="#frame_2_2" style="font-size:20px;">Tab 2</a></li>
		<li class=""><a href="#frame_2_3" style="font-size:20px;">Tab 3</a></li>
	</ul>
</div>