<?php 
	$npg_d = dirname($_SERVER['PHP_SELF']);
	$npg_f = basename($_SERVER['PHP_SELF']);
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}

	
?>

<body>
	<!--Top Nav Bar-->
	<nav class="navbar navbar-fixed-top" style="background:#3c3c3c;height:60px;<?php if($is_ifr!=""){echo 'display:none;';}?>">
	  <div class="container-fluid" style="margin-top:5px;">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=WEBPATH?>" style="padding:0px;"><img src="<?=IMGPATH?>logo_w.png" height="50"/></a>
		</div>
	  </div>
	</nav>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="top:60px;<?php if(startsWith($npg_d,"/f_school/iframe/")){echo 'display:none;';}?>">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div id="navbar" class="navbar-collapse collapse" style="border:none;background-image:none;">
		  <ul class="nav navbar-nav navbar-left">
		    <?php
				if($npg_d=="/f_school"){
			?>
				<li><a href="<?=WIGPATH?>hcj/index.php" style="color:white;">HTML5/CSS3/JS</a></li>
				<li><a href="<?=WIGPATH?>c3a/index.php" style="color:white;">CSS3 Animation</a></li>
				<li><a href="<?=WIGPATH?>btp/index.php" style="color:white;">BootStrap</a></li>
				<li><a href="<?=WIGPATH?>gmd/index.php" style="color:white;">Google Material Design</a></li>
			<?php
				}
			?>

			<?php
				//Google Material Design
				if($npg_d=="/f_school/widget/gmd"){
			?>
				
				<li><a href="<?=WEBPATH?>index.php" style="color:black;">Home</a></li>
				<li><a href="<?=WIGPATH?>gmd/index.php" style="color:black;">Overview</a></li>
				<li><a href="<?=WIGPATH?>gmd/environment.php" style="color:black;">Environment</a></li>
				<li><a href="<?=WIGPATH?>gmd/motion.php" style="color:black;">Motion</a></li>
				<li><a href="<?=WIGPATH?>gmd/bottom_navi.php" style="color:black;">Bottom Navigation</a></li>
				<li><a href="<?=WIGPATH?>gmd/bottom_sheets.php" style="color:black;">Modal Bottom Sheets</a></li>
				<li><a href="<?=WIGPATH?>gmd/btns.php" style="color:black;">Buttons</a></li>
				<li><a href="<?=WIGPATH?>gmd/card.php" style="color:black;">Cards</a></li>
				<li><a href="<?=WIGPATH?>gmd/dialog.php" style="color:black;">Dialog</a></li>
				<li><a href="<?=WIGPATH?>gmd/expanel.php" style="color:black;">Expansion Panels</a></li>
				<li><a href="<?=WIGPATH?>gmd/tab.php" style="color:black;">Tabs</a></li>
				<li><a href="<?=WIGPATH?>gmd/navi_drawer.php" style="color:black;">Navigation Drawer</a></li>
			<?php
				}
			?>
			
			<?php
				//Google Material Design
				if($npg_d=="/f_school/widget/uwp"){
			?>
				
				
			<?php
				}
			?>
			
			<?php
				//HTML/CSS3/JS
				if($npg_d=="/f_school/widget/hcj"){
			?>
				<li><a href="<?=WEBPATH?>index.php" style="color:black;">Home</a></li>
				<li><a href="<?=WIGPATH?>hcj/index.php" style="color:black;">2D Transforms</a></li>
				<li><a href="<?=WIGPATH?>hcj/3d_transform.php" style="color:black;">3D Transforms</a></li>
				<li><a href="<?=WIGPATH?>hcj/anim.php" style="color:black;">CSS3 Animations</a></li>
				<li><a href="<?=WIGPATH?>hcj/swp.php" style="color:black;">iDangerous Swiper</a></li>
			<?php
				}
			?>
			
			<?php
				//Bootstrap
				if($npg_d=="/f_school/widget/btp"){
			?>
				<li><a href="<?=WEBPATH?>index.php" style="color:white;">Home</a></li>
				<li><a href="<?=WIGPATH?>btp/index.php" style="color:white;">Overview</a></li>
				<li><a href="<?=WIGPATH?>btp/progress.php" style="color:white;">Progress</a></li>
				<li><a href="<?=WIGPATH?>btp/collapse.php" style="color:white;">Collapse</a></li>
				<li><a href="<?=WIGPATH?>btp/popup.php" style="color:white;">Modal/Popup</a></li>
			<?php
				}
			?>
			
			<?php
				//Framework7
				if($npg_d=="/f_school/widget/frm7"){
			?>
				<li><a href="<?=WEBPATH?>index.php" style="color:white;">Home</a></li>
				<li><a href="<?=WIGPATH?>frm7/index.php" style="color:white;">Overview</a></li>
				<li><a href="<?=WIGPATH?>frm7/navbar.php" style="color:white;">Navbar</a></li>
				<li><a href="<?=WIGPATH?>frm7/dynamic_navbar.php" style="color:white;">Dynamic NavBar</a></li>
				<li><a href="<?=WIGPATH?>frm7/toolbar.php" style="color:white;">Toolbar</a></li>
				<li><a href="<?=WIGPATH?>frm7/tabbar.php" style="color:white;">Tabbar</a></li>
				<li><a href="<?=WIGPATH?>frm7/hide_bars.php" style="color:white;">Hide Bars</a></li>
				<li><a href="<?=WIGPATH?>frm7/side_panels.php" style="color:white;">Side Panels</a></li>
				<li><a href="<?=WIGPATH?>frm7/modals.php" style="color:white;">Modals</a></li>
				<li><a href="<?=WIGPATH?>frm7/popup.php" style="color:white;">Popup</a></li>
				<li><a href="<?=WIGPATH?>frm7/actionsheet.php" style="color:white;">ActionSheet</a></li>
				<li><a href="<?=WIGPATH?>frm7/picker_modals.php" style="color:white;">Picker Modals</a></li>
				<li><a href="<?=WIGPATH?>frm7/progressbar.php" style="color:white;">ProgressBar</a></li>
				<li><a href="<?=WIGPATH?>frm7/listview.php" style="color:white;">ListView</a></li>
				<li><a href="<?=WIGPATH?>frm7/swipeout.php" style="color:white;">SwipeOut</a></li>
				<li><a href="<?=WIGPATH?>frm7/sortable_listview.php" style="color:white;">Sortable ListView</a></li>
				<li><a href="<?=WIGPATH?>frm7/accordian.php" style="color:white;">Accordian</a></li>
				<li><a href="<?=WIGPATH?>frm7/cards.php" style="color:white;">Cards</a></li>
				<li><a href="<?=WIGPATH?>frm7/button.php" style="color:white;">Button</a></li>
				<li><a href="<?=WIGPATH?>frm7/calendar_datepicker.php" style="color:white;">Calendar / Datepicker</a></li>
				<li><a href="<?=WIGPATH?>frm7/messages.php" style="color:white;">Messages</a></li>
				<li><a href="<?=WIGPATH?>frm7/notification.php" style="color:white;">Notification</a></li>
				<li><a href="<?=WIGPATH?>frm7/icons.php" style="color:white;">Icons</a></li>
				
			<?php
				}
			?>
			
			<?php
				//css3 animations
				if($npg_d=="/f_school/widget/c3a"){
			?>
				<li><a href="<?=WEBPATH?>index.php" style="color:white;">Home</a></li>
				<li class="active"><a href="#" onclick="doAnim(1, this, 'bounce');return false;" style="color:white;">Bounce</a></li>	
				<li><a href="#" onclick="doAnim(2, this, 'flash');return false;" style="color:white;">Flash</a></li>	
				<li><a href="#" onclick="doAnim(3, this, 'pulse');return false;" style="color:white;">Pulse</a></li>	
				<li><a href="#" onclick="doAnim(4, this, 'rubberBand');return false;" style="color:white;">RubberBand</a></li>	
				<li><a href="#" onclick="doAnim(5, this, 'shake');return false;" style="color:white;">Shake</a></li>	
				<li><a href="#" onclick="doAnim(6, this, 'wobble');return false;" style="color:white;">Wobble</a></li>	
				<li><a href="#" onclick="doAnim(7, this, 'jello');return false;" style="color:white;">Jello</a></li>	
				<li><a href="#" onclick="doAnim(8, this, 'bounceIn');return false;" style="color:white;">BounceIn</a></li>	
				<li><a href="#" onclick="doAnim(9, this, 'bounceInDown');return false;" style="color:white;">BounceInDown</a></li>	
				<li><a href="#" onclick="doAnim(10, this, 'bounceInLeft');return false;" style="color:white;">BounceInLeft</a></li>	
				<li><a href="#" onclick="doAnim(11, this, 'bounceInRight');return false;" style="color:white;">BounceInRight</a></li>	
				<li><a href="#" onclick="doAnim(12, this, 'bounceInUp');return false;" style="color:white;">BounceInUp</a></li>	
				<li><a href="#" onclick="doAnim(13, this, 'bounceOut');return false;" style="color:white;">BounceOut</a></li>	
				<li><a href="#" onclick="doAnim(14, this, 'bounceOutDown');return false;" style="color:white;">BounceOutDown</a></li>	
				<li><a href="#" onclick="doAnim(15, this, 'bounceOutLeft');return false;" style="color:white;">BounceOutLeft</a></li>	
				<li><a href="#" onclick="doAnim(16, this, 'bounceOutRight');return false;" style="color:white;">BounceOutRight</a></li>	
				<li><a href="#" onclick="doAnim(17, this, 'bounceOutUp');return false;" style="color:white;">BounceOutUp</a></li>	
				<li><a href="#" onclick="doAnim(18, this, 'fadeIn');return false;" style="color:white;">FadeIn</a></li>	
				<li><a href="#" onclick="doAnim(19, this, 'fadeInDown');return false;" style="color:white;">FadeInDown</a></li>	
				<li><a href="#" onclick="doAnim(20, this, 'fadeInDownBig');return false;" style="color:white;">FadeInDownBig</a></li>
				<li><a href="#" onclick="doAnim(21, this, 'fadeInLeft');return false;" style="color:white;">FadeInLeft</a></li>	
				<li><a href="#" onclick="doAnim(22, this, 'fadeInLeftBig');return false;" style="color:white;">FadeInLeftBig</a></li>	
				<li><a href="#" onclick="doAnim(23, this, 'fadeInRight');return false;" style="color:white;">FadeInRight</a></li>	
				<li><a href="#" onclick="doAnim(24, this, 'fadeInRightBig');return false;" style="color:white;">FadeInRightBig</a></li>	
				<li><a href="#" onclick="doAnim(25, this, 'fadeInUp');return false;" style="color:white;">FadeInUp</a></li>	
				<li><a href="#" onclick="doAnim(26, this, 'fadeInUpBig');return false;" style="color:white;">FadeInUpBig</a></li>	
				<li><a href="#" onclick="doAnim(27, this, 'fadeOut');return false;" style="color:white;">FadeOut</li>	
				<li><a href="#" onclick="doAnim(28, this, 'fadeOutDown');return false;" style="color:white;">FadeOutDown</a></li>	
				<li><a href="#" onclick="doAnim(29, this, 'fadeOutDownBig');return false;" style="color:white;">FadeOutDownBig</a></li>	
				<li><a href="#" onclick="doAnim(30, this, 'fadeOutLeft');return false;" style="color:white;">FadeOutLeft</a></li>
				<li><a href="#" onclick="doAnim(31, this, 'fadeOutLeftBig');return false;" style="color:white;">FadeOutLeftBig</a></li>
				<li><a href="#" onclick="doAnim(32, this, 'fadeOutRight');return false;" style="color:white;">FadeOutRight</a></li>
				<li><a href="#" onclick="doAnim(33, this, 'fadeOutRightBig');return false;" style="color:white;">FadeOutRightBig</a></li>
				<li><a href="#" onclick="doAnim(34, this, 'fadeOutUp');return false;" style="color:white;">FadeOutUp</a></li>
				<li><a href="#" onclick="doAnim(35, this, 'fadeOutUpBig');return false;" style="color:white;">FadeOutUpBig</a></li>
				<li><a href="#" onclick="doAnim(36, this, 'flip');return false;" style="color:white;">Flip</a></li>
				<li><a href="#" onclick="doAnim(37, this, 'flipInX');return false;" style="color:white;">FlipInX</a></li>
				<li><a href="#" onclick="doAnim(38, this, 'flipInY');return false;" style="color:white;">FlipInY</a></li>
				<li><a href="#" onclick="doAnim(39, this, 'flipOutX');return false;" style="color:white;">FlipOutX</a></li>
				<li><a href="#" onclick="doAnim(40, this, 'flipOutY');return false;" style="color:white;">FlipOutY</a></li>
				<li><a href="#" onclick="doAnim(41, this, 'lightSpeedIn');return false;" style="color:white;">LightSpeedIn</a></li>
				<li><a href="#" onclick="doAnim(42, this, 'lightSpeedOut');return false;" style="color:white;">LightSpeedOut</a></li>
				<li><a href="#" onclick="doAnim(43, this, 'rotateIn');return false;" style="color:white;">RotateIn</a></li>
				<li><a href="#" onclick="doAnim(44, this, 'rotateInDownLeft');return false;" style="color:white;">RotateInDownLeft</a></li>
				<li><a href="#" onclick="doAnim(45, this, 'rotateInDownRight');return false;" style="color:white;">RotateInDownRight</a></li>
				<li><a href="#" onclick="doAnim(46, this, 'rotateInUpLeft');return false;" style="color:white;">RotateInUpLeft</a></li>
				<li><a href="#" onclick="doAnim(47, this, 'rotateInUpRight');return false;" style="color:white;">RotateInUpRight</a></li>
				<li><a href="#" onclick="doAnim(48, this, 'rotateOut');return false;" style="color:white;">RotateOut</a></li>
				<li><a href="#" onclick="doAnim(49, this, 'rotateOutDownLeft');return false;" style="color:white;">RotateOutDownLeft</a></li>
				<li><a href="#" onclick="doAnim(50, this, 'rotateOutDownRight');return false;" style="color:white;">RotateOutDownRight</a></li>
				<li><a href="#" onclick="doAnim(51, this, 'rotateOutUpLeft');return false;" style="color:white;">RotateOutUpLeft</a></li>
				<li><a href="#" onclick="doAnim(52, this, 'rotateOutUpLeft');return false;" style="color:white;">RotateOutUpLeft</a></li>
				<li><a href="#" onclick="doAnim(53, this, 'rotateOutUpRight');return false;" style="color:white;">RotateOutUpRight</a></li>
				<li><a href="#" onclick="doAnim(54, this, 'slideInUp');return false;" style="color:white;">SlideInUp</a></li>
				<li><a href="#" onclick="doAnim(55, this, 'slideInDown');return false;" style="color:white;">SlideInDown</a></li>
				<li><a href="#" onclick="doAnim(56, this, 'slideInLeft');return false;" style="color:white;">SlidInLeft</a></li>
				<li><a href="#" onclick="doAnim(57, this, 'slideInRight');return false;" style="color:white;">SlideInRight</a></li>
				<li><a href="#" onclick="doAnim(58, this, 'slideOutUp');return false;" style="color:white;">SlideOutUp</a></li>
				<li><a href="#" onclick="doAnim(59, this, 'slideOutDown');return false;" style="color:white;">SlideOutDown</a></li>
				<li><a href="#" onclick="doAnim(60, this, 'slideOutLeft');return false;" style="color:white;">SlideOutLeft</a></li>
				<li><a href="#" onclick="doAnim(61, this, 'slideOutRight');return false;" style="color:white;">SlideOutRight</a></li>
				<li><a href="#" onclick="doAnim(62, this, 'zoomIn');return false;" style="color:white;">ZoomIn</a></li>
				<li><a href="#" onclick="doAnim(63, this, 'zoomInDown');return false;" style="color:white;">ZoomInDown</a></li>
				<li><a href="#" onclick="doAnim(64, this, 'zoomInLeft');return false;" style="color:white;">ZoomInLeft</a></li>
				<li><a href="#" onclick="doAnim(65, this, 'zoomInRight');return false;" style="color:white;">ZoomInRight</a></li>
				<li><a href="#" onclick="doAnim(66, this, 'zoomInUp');return false;" style="color:white;">ZoomInUp</a></li>
				<li><a href="#" onclick="doAnim(67, this, 'zoomOut');return false;" style="color:white;">ZoomOut</a></li>
				<li><a href="#" onclick="doAnim(68, this, 'zoomOutDown');return false;" style="color:white;">ZoomOutDown</a></li>
				<li><a href="#" onclick="doAnim(69, this, 'zoomOutLeft');return false;" style="color:white;">ZoomOutLeft</a></li>
				<li><a href="#" onclick="doAnim(70, this, 'zoomOutRight');return false;" style="color:white;">ZoomOutRight</a></li>
				<li><a href="#" onclick="doAnim(71, this, 'zoomOutUp');return false;" style="color:white;">ZoomOutUp</a></li>
				<li><a href="#" onclick="doAnim(72, this, 'hinge');return false;" style="color:white;">Hinge</a></li>
				<li><a href="#" onclick="doAnim(73, this, 'rollIn');return false;" style="color:white;">RollIn</a></li>
				<li><a href="#" onclick="doAnim(74, this, 'rollOut');return false;" style="color:white;">RollOut</a></li>

			<?php
				}
			?>
			
			<?php
				//Bootstrap
				if($npg_d=="/f_school/widget/uwp"){
			?>
				<li><a href="<?=WEBPATH?>index.php" style="color:white;">Home</a></li>
				<li><a href="<?=WIGPATH?>uwp/index.php" style="color:black;">Overview</a></li>
				<li><a href="<?=WIGPATH?>uwp/form.php" style="color:black;">Form/Inputs</a></li>
				<li><a href="<?=WIGPATH?>uwp/btn.php" style="color:black;">Buttons</a></li>
				<li><a href="<?=WIGPATH?>uwp/img.php" style="color:black;">Images</a></li>
				<li><a href="<?=WIGPATH?>uwp/icon.php" style="color:black;">Icons</a></li>
				<li><a href="<?=WIGPATH?>uwp/applicationbar.php" style="color:black;">Application Bar</a></li>
				<li><a href="<?=WIGPATH?>uwp/tab.php" style="color:black;">Tab</a></li>
				<li><a href="<?=WIGPATH?>uwp/treeview.php" style="color:black;">Tree View</a></li>
				<li><a href="<?=WIGPATH?>uwp/list.php" style="color:black;">List</a></li>
				<li><a href="<?=WIGPATH?>uwp/slider.php" style="color:black;">Slider</a></li>
				<li><a href="<?=WIGPATH?>uwp/tile.php" style="color:black;">Tile</a></li>
				<li><a href="<?=WIGPATH?>uwp/popovers.php" style="color:black;">Popovers</a></li>
				<li><a href="<?=WIGPATH?>uwp/progressbar.php" style="color:black;">Progress bar</a></li>
				<li><a href="<?=WIGPATH?>uwp/preloader.php" style="color:black;">Preloader</a></li>
				<li><a href="<?=WIGPATH?>uwp/notifysystem.php" style="color:black;">Notify</a></li>
				<li><a href="<?=WIGPATH?>uwp/dialog.php" style="color:black;">Dialog</a></li>
				<li><a href="<?=WIGPATH?>uwp/datepicker.php" style="color:black;">Datepicker</a></li>
				<li><a href="<?=WIGPATH?>uwp/countdown.php" style="color:black;">Countdown</a></li>
				<li><a href="<?=WIGPATH?>uwp/start.php" style="color:black;">Start Screen</a></li>
				<li><a href="<?=WIGPATH?>uwp/admin.php" style="color:black;">Admin page</a></li>
				
			<?php
				}
			?>
			
		  </ul>
		  <!--<form class="navbar-form navbar-right">
			<input type="text" class="form-control" placeholder="Search...">
		  </form>-->
		</div>
	  </div>
	</nav>	
	<!--Top Nav Bar End-->