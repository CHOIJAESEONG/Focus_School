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
		width: 100%;
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
	<div class="tile-container bg-darkCobalt">
		<div class="tile bg-red fg-white" data-role="tile">
			<div class="tile-content iconic">
				<span class="icon mif-cogs"></span>
			</div>
		</div>

		<div class="tile bg-cyan fg-white" data-role="tile">
			<div class="tile-content iconic">
				<span class="icon mif-envelop"></span>
				<span class="tile-badge bg-darkRed">5</span>
				<span class="tile-label">Mail</span>
			</div>
		</div>

		<div class="tile-wide bg-orange fg-white" data-role="tile">
			<div class="tile-content iconic">
				<span class="icon mif-cloud"></span>
				<span class="tile-label">Cloud service</span>
			</div>
		</div>

		<div class="tile-wide bg-orange fg-white" data-role="tile">
			<div class="tile-content image-set">
				<img src="../../img/tile/1.jpg">
				<img src="../../img/tile/2.jpg">
				<img src="../../img/tile/3.jpg">
				<img src="../../img/tile/4.jpg">
				<img src="../../img/tile/5.jpg">
			</div>
			<span class="tile-label">image-set</span>
		</div>

		<div class="tile-wide bg-orange fg-white" data-role="tile">
			<div class="tile-content">
				<div class="image-container">
					<div class="frame">
						<img src="../../img/tile/1.jpg">
					</div>
					<div class="image-overlay op-green">
						<h2>Image title</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
					</div>
				</div>
				<div class="tile-label">Image container</div>
			</div>
		</div>

		<div class="tile bg-transparent fg-white text-shadow" data-role="tile">
			<div class="tile-content">
				
				<div class="tile-label">fitImage</div>
			<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/me.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
		</div>

		<div class="tile-wide bg-orange fg-white" data-role="tile">
			<div class="tile-content">
				<div class="carousel" data-role="carousel" data-controls="false" data-markers="true" style="width: 100%; height: 150px;">
					<div class="slide" style="display: block; left: -310px;"><img src="../../img/tile/1.jpg"></div>
					<div class="slide" style="display: block; left: -310px;"><img src="../../img/tile/2.jpg"></div>
					<div class="slide" style="display: block; left: -310px;"><img src="../../img/tile/3.jpg"></div>
					<div class="slide" style="display: block; left: -310px;"><img src="../../img/tile/4.jpg"></div>
					<div class="slide" style="display: block; left: 0px;"><img src="../../img/tile/5.jpg"></div>
				<div class="carousel-bullets"><a class="carousel-bullet" href="javascript:void(0)" data-num="0"></a><a class="carousel-bullet" href="javascript:void(0)" data-num="1"></a><a class="carousel-bullet" href="javascript:void(0)" data-num="2"></a><a class="carousel-bullet" href="javascript:void(0)" data-num="3"></a><a class="carousel-bullet bullet-on" href="javascript:void(0)" data-num="4"></a></div></div>
				<div class="tile-label">Carousel</div>
			</div>
		</div>

		<div class="tile bg-green fg-white element-selected" data-role="tile">
			<div class="tile-content iconic">
				<span class="icon mif-home"></span>
				<div class="tile-label">selected</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile">
			<div class="tile-content slide-up">
				<div class="slide">
					
				<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-cyan text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-up</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-up">
				<div class="slide">
					
				<div class="image-container image-format-hd" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 174.375px; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-orange text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-up</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-up-2">
				<div class="slide">
					
				<div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over bg-orange text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-up-2</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile">
			<div class="tile-content slide-down">
				<div class="slide">
					
				<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-cyan text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-down</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-down">
				<div class="slide">
					
				<div class="image-container image-format-hd" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 174.375px; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-down</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-down-2">
				<div class="slide">
					
				<div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over bg-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-down-2</div>
			</div>
		</div>

		<div class="tile fg-white bg-transparent" data-role="tile">
			<div class="tile-content slide-down-2 ">
				<div class="slide">
					
				<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/spface2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over bg-green text-small padding10 ">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-down-2</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile">
			<div class="tile-content slide-left">
				<div class="slide">
					
				<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-cyan text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-left</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-left">
				<div class="slide">
					
				<div class="image-container image-format-hd" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 174.375px; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-left</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile">
			<div class="tile-content slide-left-2">
				<div class="slide">
					
				<div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-left-2</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile">
			<div class="tile-content slide-right">
				<div class="slide">
					
				<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-cyan text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-right</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-right">
				<div class="slide">
					
				<div class="image-container image-format-hd" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 174.375px; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-right</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content slide-right-2">
				<div class="slide">
					
				<div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="slide-over op-green text-small padding10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="tile-label">slide-right-2</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content zooming">
				<div class="slide">
					<img src="../../img/tile/5.jpg">
				</div>
				<div class="tile-label">Zooming</div>
			</div>
		</div>

		<div class="tile-wide fg-white" data-role="tile">
			<div class="tile-content zooming-out">
				<div class="slide">
					<img src="../../img/tile/4.jpg">
				</div>
				<div class="tile-label">Zooming out</div>
			</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideLeft">
			<div class="tile-content">
				<div class="live-slide" style="left: -150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideLeft</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideRight">
			<div class="tile-content">
				<div class="live-slide" style="left: 150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideRight</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideLeftRight">
			<div class="tile-content">
				<div class="live-slide" style="left: 150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="left: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideLeftRight</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideUp">
			<div class="tile-content">
				<div class="live-slide" style="top: -150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideUp</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideDown">
			<div class="tile-content">
				<div class="live-slide" style="top: 150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideDown</div>
		</div>

		<div class="tile fg-white" data-role="tile" data-effect="slideUpDown">
			<div class="tile-content">
				<div class="live-slide" style="top: 150px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: 0px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/tile/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
			</div>
			<div class="tile-label">effect: slideUpDown</div>
		</div>

	</div>
</div>