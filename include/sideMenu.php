<?php 
	$npg_d = dirname($_SERVER['PHP_SELF']);
	$npg_f = basename($_SERVER['PHP_SELF']);
?>

<!--Side Nav Bar-->
	<div class="col-sm-3 col-md-2 sidebar">
		<?php
			if($npg_d=="/f_school"){echo('<h1 class="title">Home</h1>');}
			else if($npg_d=="/f_school/widget/gmd"){echo('<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">Google Material Design</h1>');}
			else if($npg_d=="/f_school/widget/hcj"){echo('<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">HTML5<br>CSS3<br>JAVASCRIPT</h1>');}
			else if($npg_d=="/f_school/widget/btp"){echo('<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">Bootstrap</h1>');}
			else if($npg_d=="/f_school/widget/frm7"){echo('<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">Framework7</h1>');}
			else if($npg_d=="/f_school/widget/uwp"){echo('<h1 class="title" style="text-align:center;padding:30px 0px;margin:0px;background:#fff;">Universal Window Platform</h1>');}
		?>
		
		<ul class="dropdown_wrapper">	
		
			<?php
				if($npg_d=="/f_school"){
			?>
			
			<li class="dropdown">
			  <a href="<?=WIGPATH?>hcj/index.php" data-toggle="dropdown_n">HTML5/CSS3/JS</a>		
			</li>

			<li class="dropdown">
				<a href="<?=WIGPATH?>c3a/index.php" data-toggle="dropdown_n">CSS3 Animation</a>
			</li>
			
			<li class="dropdown">
			  <input type="checkbox" />
			  <a href="#" data-toggle="dropdown">UI/UX Framework</a>
			  <ul class="dropdown-menu">
				<li><a href="<?=WIGPATH?>btp/index.php">BootStrap</a></li>
				<li><a href="<?=WIGPATH?>frm7/index.php">Framework7</a></li>
				<!--<li><a href="#">Angular</a></li>
				<li><a href="#">Jquery Mobile</a></li>
				<li><a href="#">Jindo Framwork</a></li>
				<li><a href="#">Ionic Framework</a></li>-->
			  </ul>
			</li>
			
			
			
			
			
			<li class="dropdown">
			  <input type="checkbox" />
			  <a href="#" data-toggle="dropdown">앱 플랫폼</a>
			  <ul class="dropdown-menu">
				<li><a href="<?=WIGPATH?>gmd/index.php">Google</a></li>
				<li><a href="#">Apple</a></li>
				<li><a href="<?=WIGPATH?>uwp/index.php">UWP</a></li>
			  </ul>
			</li>
		
			
			
			<?php
				}
			?>
			
			
			<?php
				//Google Material Design
				if($npg_d=="/f_school/widget/gmd"){
			?>
				<link href="<?=WEBPATH?>css/gmd_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php"||$npg_f=="environment.php"||$npg_f=="motion.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/index.php">Overview</a></li>
					<li <?php if($npg_f=="environment.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/environment.php">Environment</a></li>	
					<li <?php if($npg_f=="motion.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/motion.php">Motion</a></li>					
				  </ul>
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="bottom_navi.php"||$npg_f=="bottom_sheets.php"||$npg_f=="btns.php"||$npg_f=="card.php"||$npg_f=="dialog.php"||
												  $npg_f=="expanel.php"||$npg_f=="tab.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Components/Widgets</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="bottom_navi.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/bottom_navi.php">Bottom Navigation</a></li>
					<li <?php if($npg_f=="bottom_sheets.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/bottom_sheets.php">Modal Bottom Sheets</a></li>
					<li <?php if($npg_f=="btns.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/btns.php">Buttons</a></li>
					<li <?php if($npg_f=="card.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/card.php">Cards</a></li>
					<li <?php if($npg_f=="dialog.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/dialog.php">Dialog</a></li>
					<li <?php if($npg_f=="expanel.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/expanel.php">Expansion Panels</a></li>
					<li <?php if($npg_f=="tab.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/tab.php">Tabs</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="navi_drawer.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Patterns</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="navi_drawer.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>gmd/navi_drawer.php">Navigation Drawer</a></li>
				  </ul>
				</li>
			<?php
				}
			
			?>
			
			<?php
				//UWP
				if($npg_d=="/f_school/widget/uwp"){
			?>
				<link href="<?=WEBPATH?>css/uwp_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/index.php">Overview</a></li>
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="form.php"||$npg_f=="btn.php"||$npg_f=="img.php" ||$npg_f=="icon.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Base CSS</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="form.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/form.php">Forms/Inputs</a></li>
					<li <?php if($npg_f=="btn.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/btn.php">Buttons</a></li>
					<li <?php if($npg_f=="img.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/img.php">Images</a></li>
					<li <?php if($npg_f=="icon.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/icon.php">Icons</a></li>
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" 
				  <?php if($npg_f=="applicationbar.php"||$npg_f=="tab.php"||$npg_f=="treeview.php" ||$npg_f=="list.php"||$npg_f=="slider.php"||$npg_f=="tile.php"||$npg_f=="popovers.php"||$npg_f=="progressbar.php"||$npg_f=="preloader.php"||$npg_f=="notifysystem.php"||$npg_f=="dialog.php"||$npg_f=="datepicker.php"||$npg_f=="countdown.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Widgets</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="applicationbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/applicationbar.php">Applicationbar</a></li>
					<li <?php if($npg_f=="tab.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/tab.php">Tab</a></li>
					<li <?php if($npg_f=="treeview.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/treeview.php">Treeview</a></li>
					<li <?php if($npg_f=="list.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/list.php">List</a></li>
					<li <?php if($npg_f=="slider.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/slider.php">Slider</a></li>
					<li <?php if($npg_f=="tile.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/tile.php">Tile</a></li>
					<li <?php if($npg_f=="popovers.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/popovers.php">Popovers</a></li>
					<li <?php if($npg_f=="progressbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/progressbar.php">Progressbar</a></li>
					<li <?php if($npg_f=="preloader.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/preloader.php">Preloader</a></li>
					<li <?php if($npg_f=="notifysystem.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/notifysystem.php">Notify System</a></li>
					<li <?php if($npg_f=="dialog.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/dialog.php">Dialog</a></li>
					<li <?php if($npg_f=="datepicker.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/datepicker.php">Datepicker</a></li>
					<li <?php if($npg_f=="countdown.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/countdown.php">Countdown</a></li>
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="start.php"||$npg_f=="admin.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Templates</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="start.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/start.php">Start Screen</a></li>
					<li <?php if($npg_f=="admin.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>uwp/admin.php">Admin Page</a></li>
				  </ul>				 
				</li>
				
			<?php
				}
			
			?>
			
			<?php
				//HTML/CSS3/JS
				if($npg_d=="/f_school/widget/hcj"){
			?>
				<link href="<?=WEBPATH?>css/hcj_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php"||$npg_f=="3d_transform.php"||$npg_f=="anim.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>hcj/index.php">2D Transforms</a></li>
					<li <?php if($npg_f=="3d_transform.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>hcj/3d_transform.php">3D Transforms</a></li>	
					<li <?php if($npg_f=="anim.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>hcj/anim.php">CSS3 Animations</a></li>						
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="swp.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">iDangerous Swiper</a>				  
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="swp.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>hcj/swp.php">iDangerous Swiper</a></li>
							
				  </ul>
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="Plugin.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">jQuery Plugin</a>				  
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="Plugin.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>hcj/Plugin.php">Comparison Slider</a></li>		
				  </ul>
				</li>
			<?php
				}
			
			?>
			
			<?php
				//Bootstrap
				if($npg_d=="/f_school/widget/btp"){
			?>
				<link href="<?=WEBPATH?>css/btp_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>btp/index.php">Overview</a></li>				
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="progress.php"||$npg_f=="collapse.php"||$npg_f=="popup.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Widgets</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="progress.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>btp/progress.php">Progress</a></li>
					<li <?php if($npg_f=="collapse.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>btp/collapse.php">Collapse</a></li>	
					<li <?php if($npg_f=="popup.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>btp/popup.php">Modal/Popup</a></li>		
				  </ul>				 
				</li>
				
			<?php
				}
			
			?>
			
			<?php
				//Framework7
				if($npg_d=="/f_school/widget/frm7"){
			?>
				<link href="<?=WEBPATH?>css/frm7_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/index.php">Overview</a></li>				
				  </ul>				 
				</li>
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="navbar.php"||$npg_f=="dynamic_navbar.php"||$npg_f=="toolbar.php"||$npg_f=="tabbar.php"||$npg_f=="hide_bars.php"||$npg_f=="side_panels.php"||$npg_f=="modals.php"||$npg_f=="popup.php"||$npg_f=="actionsheet.php"||$npg_f=="picker_modals.php"||$npg_f=="progressbar.php"||$npg_f=="listview.php"||$npg_f=="swipeout.php"||$npg_f=="sortable_listview.php"||$npg_f=="accordian.php"||$npg_f=="cards.php"||$npg_f=="button.php"||$npg_f=="calendar_datepicker.php"||$npg_f=="messages.php"||$npg_f=="notification.php"||$npg_f=="icons.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Widgets</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="navbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/navbar.php">Navbar</a></li>
					<li <?php if($npg_f=="dynamic_navbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/dynamic_navbar.php">Dynamic NavBar</a></li>
					<li <?php if($npg_f=="toolbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/toolbar.php">Toolbar</a></li>
					<li <?php if($npg_f=="tabbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/tabbar.php">Tabbar</a></li>
					<li <?php if($npg_f=="hide_bars.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/hide_bars.php">Hide Bars</a></li>
					<li <?php if($npg_f=="side_panels.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/side_panels.php">Side Panels</a></li>
					<li <?php if($npg_f=="modals.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/modals.php">Modals</a></li>
					<li <?php if($npg_f=="popup.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/popup.php">Popup</a></li>
					<li <?php if($npg_f=="actionsheet.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/actionsheet.php">ActionSheet</a></li>
					<li <?php if($npg_f=="picker_modals.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/picker_modals.php">Picker Modals</a></li>
					<li <?php if($npg_f=="progressbar.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/progressbar.php">ProgressBar</a></li>
					<li <?php if($npg_f=="listview.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/listview.php">ListView</a></li>
					<li <?php if($npg_f=="swipeout.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/swipeout.php">SwipeOut</a></li>
					<li <?php if($npg_f=="sortable_listview.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/sortable_listview.php">Sortable ListView</a></li>
					<li <?php if($npg_f=="accordian.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/accordian.php">Accordian</a></li>
					<li <?php if($npg_f=="cards.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/cards.php">Cards</a></li>
					<li <?php if($npg_f=="button.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/button.php">Button</a></li>
					<li <?php if($npg_f=="calendar_datepicker.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/calendar_datepicker.php">Calendar / Datepicker</a></li>
					<li <?php if($npg_f=="messages.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/messages.php">Messages</a></li>
					<li <?php if($npg_f=="notification.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/notification.php">Notification</a></li>
					<li <?php if($npg_f=="icons.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>frm7/icons.php">Icons</a></li>
				  </ul>				 
				</li>
				
			<?php
				}
			
			?>
			
			
			<?php
				//css3 animation
				if($npg_d=="/f_school/widget/c3a"){
			?>
				<link href="<?=WEBPATH?>css/c3a_common.css" rel="stylesheet">
				<li class="dropdown">
				  <input type="checkbox" <?php if($npg_f=="index.php") {echo ('checked="true""');}?>/>
				  <a href="#" data-toggle="dropdown">Basic</a>
				  <ul class="dropdown-menu">
					<li <?php if($npg_f=="index.php") {echo ('class="active"');}?>><a href="<?=WIGPATH?>c3a/index.php">Overview</a></li>				
				  </ul>				 
				</li>
				
				
			<?php
				}
			
			?>
			
	   </ul>
	</div>
<!--Side Nav Bar End-->