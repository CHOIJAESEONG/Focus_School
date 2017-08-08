<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>
<head>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="/f_school/js/jquery.imageSlider.js"></script>
		<link rel="stylesheet" href="/f_school/css/jquery.imageSlider.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="theme-color" content="#000000">
		<style>

		</style>
	</head>
	<body>
		
			<div class="image-slider" style="width:500px" align="center"></div>
			<br>
			<div class="image-slider2"></div>
			<br>
			<div class="image-slider3"></div>
			<br>
			<div class="image-slider4"></div>
			<br>
			<div class="image-slider5"></div>
		
		<script>
			$(document).ready(function(){
				$('.image-slider').imageSlider({
					left: "/f_school/iframe/hcj/img/2.PNG",
					right: "/f_school/iframe/hcj/img/1.PNG"
				});
				$('.image-slider2').imageSlider({
					left: "/f_school/iframe/hcj/img/5.PNG",
					right: "/f_school/iframe/hcj/img/6.PNG"
				});
				$('.image-slider3').imageSlider({
					left: "/f_school/iframe/hcj/img/7.PNG",
					right: "/f_school/iframe/hcj/img/8.PNG"
				});
				$('.image-slider4').imageSlider({
					left: "/f_school/iframe/hcj/img/9.PNG",
					right: "/f_school/iframe/hcj/img/10.PNG"
				});
				$('.image-slider4').imageSlider({
					left: "/f_school/iframe/hcj/img/two_face_after.png",
					right: "/f_school/iframe/hcj/img/two_face_before.png"
				});
			});
			
			$(window).resize(function(){
				$(".image-slider-wrapper").css("width","100%");
				$(".image-left").css("width","100%");
				$(".image-slider-wrapper img").css("width","100%");
			});
		</script>
	</body>
</html>