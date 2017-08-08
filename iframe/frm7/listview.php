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
<link rel="stylesheet" href="<?=WEBPATH?>css/frm7-icons.css">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">List View</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Full Layout</div>
<div class="list-block">
<ul>
<li class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item title</div>
<div class="item-after">Label</div>
</div>
</li>
<li class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item with badge</div>
<div class="item-after"> <span class="badge">5</span></div>
</div>
</li>
<li class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Another item</div>
<div class="item-after">Another label</div>
</div>
</li>
</ul>
<div class="list-block-label">List block label text goes here</div>
</div>
<div class="content-block-title">Only titles</div>
<div class="list-block">
<ul>
<li class="item-content">
<div class="item-inner">
<div class="item-title">Item title</div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div class="item-title">Item with badge</div>
</div>
</li>
<li class="item-content">
<div class="item-inner">
<div class="item-title">Another item</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
</body>
</html>