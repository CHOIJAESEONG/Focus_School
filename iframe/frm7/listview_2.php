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
<div class="center">List View Groups</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="list-block">
 
<div class="list-group">
<ul>
<li class="list-group-title">First group</li>
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
</div>
 
<div class="list-group">
<ul>
<li class="list-group-title">Second Group</li>
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
</div>
</div>
<div class="content-block">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum molestie diam eu rhoncus. Aliquam a accumsan felis. Morbi magna ipsum, pellentesque vitae diam mattis, cursus pellentesque lorem. Curabitur orci tortor, feugiat nec erat non, iaculis iaculis nisi. Nam interdum sem eget ullamcorper accumsan. Vivamus tempor metus at fermentum ultricies. Duis tristique magna velit, id vehicula odio vehicula a. Ut fermentum, est viverra bibendum volutpat, tellus mauris egestas nunc, et venenatis nisl libero at tellus. Nullam eu lorem at turpis luctus rutrum id sit amet neque.</p>
<p>Vestibulum congue, lacus quis ornare euismod, risus enim rhoncus sem, vulputate aliquet ipsum mi sed nulla. Nulla sed sodales massa. Quisque et mi in orci commodo suscipit. Fusce et tincidunt ipsum, sit amet feugiat quam. Phasellus congue molestie pellentesque. Ut quam purus, porttitor dictum odio sed, varius pellentesque libero. Pellentesque id euismod urna.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
</body>
</html>