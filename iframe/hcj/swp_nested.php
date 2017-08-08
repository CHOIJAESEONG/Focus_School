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

<div class="swiper-container swiper-container-h">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="background:#8e24aa;">Horizontal Slide 1</div>
		<div class="swiper-slide" >
			<div class="swiper-container swiper-container-v">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background:red;">Vertical Slide 1</div>
					<div class="swiper-slide" style="background:blue;">Vertical Slide 2</div>
					<div class="swiper-slide" style="background:gray;">Vertical Slide 3</div>
					<div class="swiper-slide" style="background:white;">Vertical Slide 4</div>
					<div class="swiper-slide" style="background:aqua;">Vertical Slide 5</div>
				</div>
				<div class="swiper-pagination swiper-pagination-v"></div>
			</div>
		</div>
		<div class="swiper-slide" style="background:darkolivegreen;">Horizontal Slide 3</div>
		<div class="swiper-slide" style="background:tomato;">Horizontal Slide 4</div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination swiper-pagination-h"></div>
</div>
	
	


<script>
    var swiperH = new Swiper('.swiper-container-h', {
        pagination: '.swiper-pagination-h',
        paginationClickable: true,
        spaceBetween: 50
    });
    var swiperV = new Swiper('.swiper-container-v', {
        pagination: '.swiper-pagination-v',
        paginationClickable: true,
        direction: 'vertical',
        spaceBetween: 50
    });
    </script>

</body>
</html>