<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.ios.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.ios.colors.min.css" rel="stylesheet">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
 
<div class="left"> </div>
<div class="center">Picker Modal</div>
<div class="right"> <a href="#" data-picker=".picker-1" class="link open-picker">Picker</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
 
<p><a href="#" data-picker=".picker-1" class="open-picker">Open Picker </a></p>
 
<p><a href="#" data-picker=".picker-1" class="close-picker">Close Picker </a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="picker-modal picker-1">
<div class="toolbar">
<div class="toolbar-inner">
<div class="left"></div>
<div class="right"><a href="#" class="close-picker">Done</a></div>
</div>
</div>
<div class="picker-modal-inner">
<div class="content-block">
<h4>Info 1</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac diam ac quam euismod porta vel a nunc. Quisque sodales scelerisque est, at porta justo cursus ac.</p>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
</body>
</html>