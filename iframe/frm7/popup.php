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
<div class="center">Popup</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" data-popup=".popup-about" class="open-popup">Open About Popup </a></p>
<p><a href="#" data-popup=".popup-services" class="open-popup">Open Services Popup </a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="popup popup-about">
<div class="content-block">
<p>About</p>
<p> <a href="#" class="close-popup">Close popup</a></p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac diam ac quam euismod porta vel a nunc. Quisque sodales scelerisque est, at porta justo cursus ac. Integer vitae quam a ante lobortis lobortis. Nam vehicula sagittis quam, sit amet congue purus consequat sed. Maecenas eget mattis lectus. Aliquam luctus luctus leo ac fringilla. Sed nec eros vel purus tincidunt tincidunt in in orci. Sed tellus neque, pellentesque nec metus id, congue elementum odio. Donec turpis tellus, mollis ac leo eget, accumsan fermentum lorem. Aliquam et elementum neque. Vestibulum sed egestas ipsum.</p>
</div>
</div>
<div class="popup popup-services">
<div class="content-block">
<p>Services</p>
<p> <a href="#" class="close-popup">Close popup</a></p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac diam ac quam euismod porta vel a nunc. Quisque sodales scelerisque est, at porta justo cursus ac. Integer vitae quam a ante lobortis lobortis. Nam vehicula sagittis quam, sit amet congue purus consequat sed. Maecenas eget mattis lectus. Aliquam luctus luctus leo ac fringilla. Sed nec eros vel purus tincidunt tincidunt in in orci. Sed tellus neque, pellentesque nec metus id, congue elementum odio. Donec turpis tellus, mollis ac leo eget, accumsan fermentum lorem. Aliquam et elementum neque. Vestibulum sed egestas ipsum.</p>
</div>
</div>
<script>var myApp = new Framework7();</script>

</body>
</html>