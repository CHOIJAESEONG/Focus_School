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
<div class="center">Sortable</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" data-sortable=".sortable" class="open-sortable">Enable sortable</a></p>
<p><a href="#" data-sortable=".sortable" class="close-sortable">Disable sortable</a></p>
<p><a href="#" data-sortable=".sortable" class="toggle-sortable">Toggle sortable</a></p>
</div>
<div class="list-block sortable">
<ul>
<li>
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item 1</div>
<div class="item-after">$10</div>
</div>
</div>
<div class="sortable-handler"></div>
</li>
<li>
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item 2</div>
<div class="item-after">$20</div>
</div>
</div>
<div class="sortable-handler"></div>
</li>
<li>
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item 3</div>
<div class="item-after">$30</div>
</div>
</div>
<div class="sortable-handler"></div>
</li>
<li>
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item 4</div>
<div class="item-after">$40</div>
</div>
</div>
<div class="sortable-handler"></div>
</li>
<li>
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item 5</div>
<div class="item-after">$50</div>
</div>
</div>
<div class="sortable-handler"></div>
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