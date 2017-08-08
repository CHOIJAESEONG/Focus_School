<?php

	@include_once("../../include/header.php");
	$npg_d = dirname($_SERVER['PHP_SELF']);
	$npg_f = basename($_SERVER['PHP_SELF']);	
	
?>
    <link href="<?=WEBPATH?>css/c3a_common.css" rel="stylesheet">
	<link href="<?=WEBPATH?>css/animate.css" rel="stylesheet">
   
    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	 

		<!--Side Nav Bar-->
			<div class="col-sm-3 col-md-2 sidebar">
				<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">CSS3 Animation</h1>
				
				<ul class="dropdown_wrapper">	
			
					<li class="dropdown">
					  <input type="checkbox" <?php if($npg_f=="index.php") {echo ('checked="true""');}?>/>
					  <a href="#" data-toggle="dropdown">Basic</a>
					  <ul class="dropdown-menu">
						<li><a href="<?=WEBPATH?>index.php">Home</a></li>		
						<li class="active"><a href="#" onclick="doAnim(1, this, 'bounce');return false;">Bounce</a></li>	
						<li><a href="#" onclick="doAnim(2, this, 'flash');return false;">Flash</a></li>	
						<li><a href="#" onclick="doAnim(3, this, 'pulse');return false;">Pulse</a></li>	
						<li><a href="#" onclick="doAnim(4, this, 'rubberBand');return false;">RubberBand</a></li>	
						<li><a href="#" onclick="doAnim(5, this, 'shake');return false;">Shake</a></li>	
						<li><a href="#" onclick="doAnim(6, this, 'wobble');return false;">Wobble</a></li>	
						<li><a href="#" onclick="doAnim(7, this, 'jello');return false;">Jello</a></li>	
						<li><a href="#" onclick="doAnim(8, this, 'bounceIn');return false;">BounceIn</a></li>	
						<li><a href="#" onclick="doAnim(9, this, 'bounceInDown');return false;">BounceInDown</a></li>	
						<li><a href="#" onclick="doAnim(10, this, 'bounceInLeft');return false;">BounceInLeft</a></li>	
						<li><a href="#" onclick="doAnim(11, this, 'bounceInRight');return false;">BounceInRight</a></li>	
						<li><a href="#" onclick="doAnim(12, this, 'bounceInUp');return false;">BounceInUp</a></li>	
						<li><a href="#" onclick="doAnim(13, this, 'bounceOut');return false;">BounceOut</a></li>	
						<li><a href="#" onclick="doAnim(14, this, 'bounceOutDown');return false;">BounceOutDown</a></li>	
						<li><a href="#" onclick="doAnim(15, this, 'bounceOutLeft');return false;">BounceOutLeft</a></li>	
						<li><a href="#" onclick="doAnim(16, this, 'bounceOutRight');return false;">BounceOutRight</a></li>	
						<li><a href="#" onclick="doAnim(17, this, 'bounceOutUp');return false;">BounceOutUp</a></li>	
						<li><a href="#" onclick="doAnim(18, this, 'fadeIn');return false;">FadeIn</a></li>	
						<li><a href="#" onclick="doAnim(19, this, 'fadeInDown');return false;">FadeInDown</a></li>	
						<li><a href="#" onclick="doAnim(20, this, 'fadeInDownBig');return false;">FadeInDownBig</a></li>
						<li><a href="#" onclick="doAnim(21, this, 'fadeInLeft');return false;">FadeInLeft</a></li>	
						<li><a href="#" onclick="doAnim(22, this, 'fadeInLeftBig');return false;">FadeInLeftBig</a></li>	
						<li><a href="#" onclick="doAnim(23, this, 'fadeInRight');return false;">FadeInRight</a></li>	
						<li><a href="#" onclick="doAnim(24, this, 'fadeInRightBig');return false;">FadeInRightBig</a></li>	
						<li><a href="#" onclick="doAnim(25, this, 'fadeInUp');return false;">FadeInUp</a></li>	
						<li><a href="#" onclick="doAnim(26, this, 'fadeInUpBig');return false;">FadeInUpBig</a></li>	
						<li><a href="#" onclick="doAnim(27, this, 'fadeOut');return false;">FadeOut</li>	
						<li><a href="#" onclick="doAnim(28, this, 'fadeOutDown');return false;">FadeOutDown</a></li>	
						<li><a href="#" onclick="doAnim(29, this, 'fadeOutDownBig');return false;">FadeOutDownBig</a></li>	
						<li><a href="#" onclick="doAnim(30, this, 'fadeOutLeft');return false;">FadeOutLeft</a></li>
						<li><a href="#" onclick="doAnim(31, this, 'fadeOutLeftBig');return false;">FadeOutLeftBig</a></li>
						<li><a href="#" onclick="doAnim(32, this, 'fadeOutRight');return false;">FadeOutRight</a></li>
						<li><a href="#" onclick="doAnim(33, this, 'fadeOutRightBig');return false;">FadeOutRightBig</a></li>
						<li><a href="#" onclick="doAnim(34, this, 'fadeOutUp');return false;">FadeOutUp</a></li>
						<li><a href="#" onclick="doAnim(35, this, 'fadeOutUpBig');return false;">FadeOutUpBig</a></li>
						<li><a href="#" onclick="doAnim(36, this, 'flip');return false;">Flip</a></li>
						<li><a href="#" onclick="doAnim(37, this, 'flipInX');return false;">FlipInX</a></li>
						<li><a href="#" onclick="doAnim(38, this, 'flipInY');return false;">FlipInY</a></li>
						<li><a href="#" onclick="doAnim(39, this, 'flipOutX');return false;">FlipOutX</a></li>
						<li><a href="#" onclick="doAnim(40, this, 'flipOutY');return false;">FlipOutY</a></li>
						<li><a href="#" onclick="doAnim(41, this, 'lightSpeedIn');return false;">LightSpeedIn</a></li>
						<li><a href="#" onclick="doAnim(42, this, 'lightSpeedOut');return false;">LightSpeedOut</a></li>
						<li><a href="#" onclick="doAnim(43, this, 'rotateIn');return false;">RotateIn</a></li>
						<li><a href="#" onclick="doAnim(44, this, 'rotateInDownLeft');return false;">RotateInDownLeft</a></li>
						<li><a href="#" onclick="doAnim(45, this, 'rotateInDownRight');return false;">RotateInDownRight</a></li>
						<li><a href="#" onclick="doAnim(46, this, 'rotateInUpLeft');return false;">RotateInUpLeft</a></li>
						<li><a href="#" onclick="doAnim(47, this, 'rotateInUpRight');return false;">RotateInUpRight</a></li>
						<li><a href="#" onclick="doAnim(48, this, 'rotateOut');return false;">RotateOut</a></li>
						<li><a href="#" onclick="doAnim(49, this, 'rotateOutDownLeft');return false;">RotateOutDownLeft</a></li>
						<li><a href="#" onclick="doAnim(50, this, 'rotateOutDownRight');return false;">RotateOutDownRight</a></li>
						<li><a href="#" onclick="doAnim(51, this, 'rotateOutUpLeft');return false;">RotateOutUpLeft</a></li>
						<li><a href="#" onclick="doAnim(52, this, 'rotateOutUpLeft');return false;">RotateOutUpLeft</a></li>
						<li><a href="#" onclick="doAnim(53, this, 'rotateOutUpRight');return false;">RotateOutUpRight</a></li>
						<li><a href="#" onclick="doAnim(54, this, 'slideInUp');return false;">SlideInUp</a></li>
						<li><a href="#" onclick="doAnim(55, this, 'slideInDown');return false;">SlideInDown</a></li>
						<li><a href="#" onclick="doAnim(56, this, 'slideInLeft');return false;">SlidInLeft</a></li>
						<li><a href="#" onclick="doAnim(57, this, 'slideInRight');return false;">SlideInRight</a></li>
						<li><a href="#" onclick="doAnim(58, this, 'slideOutUp');return false;">SlideOutUp</a></li>
						<li><a href="#" onclick="doAnim(59, this, 'slideOutDown');return false;">SlideOutDown</a></li>
						<li><a href="#" onclick="doAnim(60, this, 'slideOutLeft');return false;">SlideOutLeft</a></li>
						<li><a href="#" onclick="doAnim(61, this, 'slideOutRight');return false;">SlideOutRight</a></li>
						<li><a href="#" onclick="doAnim(62, this, 'zoomIn');return false;">ZoomIn</a></li>
						<li><a href="#" onclick="doAnim(63, this, 'zoomInDown');return false;">ZoomInDown</a></li>
						<li><a href="#" onclick="doAnim(64, this, 'zoomInLeft');return false;">ZoomInLeft</a></li>
						<li><a href="#" onclick="doAnim(65, this, 'zoomInRight');return false;">ZoomInRight</a></li>
						<li><a href="#" onclick="doAnim(66, this, 'zoomInUp');return false;">ZoomInUp</a></li>
						<li><a href="#" onclick="doAnim(67, this, 'zoomOut');return false;">ZoomOut</a></li>
						<li><a href="#" onclick="doAnim(68, this, 'zoomOutDown');return false;">ZoomOutDown</a></li>
						<li><a href="#" onclick="doAnim(69, this, 'zoomOutLeft');return false;">ZoomOutLeft</a></li>
						<li><a href="#" onclick="doAnim(70, this, 'zoomOutRight');return false;">ZoomOutRight</a></li>
						<li><a href="#" onclick="doAnim(71, this, 'zoomOutUp');return false;">ZoomOutUp</a></li>
						<li><a href="#" onclick="doAnim(72, this, 'hinge');return false;">Hinge</a></li>
						<li><a href="#" onclick="doAnim(73, this, 'rollIn');return false;">RollIn</a></li>
						<li><a href="#" onclick="doAnim(74, this, 'rollOut');return false;">RollOut</a></li>					
						
					  </ul>				 
					</li>

			   </ul>
			</div>
		<!--Side Nav Bar End-->
		
		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:810px;">
			
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Bounce</h1>
				<div id="anim_obj"  style="background:linear-gradient(135deg, #303f9f , #3f51b5, #37479d);max-width:300px;margin:50px auto;border-radius:20px;">
					<img class="animated bounce" src="<?=IMGPATH?>logo_s2.png" style="max-width:300px;margin:15px 0px;"/>
				</div>	
			</div>	
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<!--<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#00bcd4;">
				<a href="#" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						소개
					</span>	
			   </a>
			</div>-->
			<div class="page_next_w" style="position:absolute;bottom:0px;left:0px;width:100% !important;height:80px;background:#252831;text-align:left;">
				<a class="page_next" href="<?=WEBPATH?>index.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
						</svg>
					</span>
					<span class="page_text">
						Home
					</span>	
			   </a>
			</div>
		</div>
      </div>
    </div>
	
	<script>
	function doAnim(cnt, obj, anim){
		$(".container-fluid").find("#navbar").removeClass("in");
		$(".placeholders").find(".page-header").text($(obj).text());
		$(".dropdown-menu").find("li").removeClass();
		$(".dropdown-menu").find("li").eq(cnt).addClass("active");
		$("#anim_obj").find("img").removeClass();
		setTimeout(function(){ 
			$("#anim_obj").find("img").addClass("animated");
			$("#anim_obj").find("img").addClass(anim);
		}, 100);
		
		
	}
	</script>
	

	<?php
		@include_once("../../include/footer.php");
	?>
</body>
</html>