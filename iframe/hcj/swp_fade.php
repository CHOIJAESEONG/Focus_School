<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>

	<link rel="stylesheet" href="<?=WEBPATH?>css/swiper.min.css">
	<script src="<?=WEBPATH?>js/swiper.min.js"></script>
	
	


 <style>
    body {
        background: #ccc;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
	
	.swiper-container {
		width: 100%;
		height: 250px;
		margin: 60px auto;
	}
	<?php
		if($is_ifr=='1'){
			echo '.swiper-container {
					margin: 0px auto !important;
					height: 300px !important;
				}';
		}
	?>
    
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>

<!-- Swiper -->


<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="background:#8e24aa;">Slide 1</div>
		<div class="swiper-slide" style="background:yellow;">Slide 2</div>
		<div class="swiper-slide" style="background:red;">Slide 3</div>
		<div class="swiper-slide" style="background:blue;">Slide 4</div>
		<div class="swiper-slide" style="background:gray;">Slide 5</div>
		<div class="swiper-slide" style="background:white;">Slide 6</div>
		<div class="swiper-slide" style="background:aqua;">Slide 7</div>
		<div class="swiper-slide" style="background:darkolivegreen;">Slide 8</div>
		<div class="swiper-slide" style="background:violet;">Slide 9</div>
		<div class="swiper-slide" style="background:tomato;">Slide 10</div>
	</div>
	
	<!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
		
	<div class="swiper-pagination"></div>
	
</div>

<script>
   var swiper = new Swiper('.swiper-container', {
         pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        effect: 'fade'
    });
    </script>

</body>
</html>