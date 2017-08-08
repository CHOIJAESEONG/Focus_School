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
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal">
<div class="content-block">
<p>Left Panel content here</p>
<p><a href="#" class="close-panel">Close me</a></p>
<p><a href="#" data-panel="right" class="open-panel">Open Right Panel</a></p>
</div>
</div>
<div class="panel panel-right panel-cover">
<div class="content-block">
<p>Right Panel content here</p>
<p><a href="#" class="close-panel">Close me</a></p>
<p><a href="#" data-panel="left" class="open-panel">Open Left Panel</a></p>
</div>
</div>
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Panels</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p> <a href="#" class="open-panel">Open Left Panel</a></p>
<p> <a href="#" data-panel="right" class="open-panel">Open Right Panel</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>

</body>
</html>