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
<div class="center">Swipe To Delete</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="list-block">
<ul>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item with badge</div>
<div class="item-after"> <span class="badge bg-blue">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Another item</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item with badge</div>
<div class="item-after"> <span class="badge bg-green">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">You can't delete me</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action</a></div>
</li>
</ul>
</div>
<div class="content-block-title">Delete only when confirmed</div>
<div class="list-block">
<ul>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">With confirm title</div>
<div class="item-after"> <span class="badge bg-red">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-confirm-title="Delete?" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Another item</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">With confirm title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-confirm-title="Delete?" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item with badge</div>
<div class="item-after"> <span class="badge bg-yellow">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">You can't delete me</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action</a></div>
</li>
</ul>
</div>
<div class="content-block-title">With auto close on dismiss</div>
<div class="list-block">
<ul>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-close-on-cancel="true" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">With confirm title</div>
<div class="item-after"> <span class="badge bg-red">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-confirm-title="Delete?" data-close-on-cancel="true" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Another item</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-close-on-cancel="true" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">With confirm title</div>
<div class="item-after">Label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-confirm-title="Delete?" data-close-on-cancel="true" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Item with badge</div>
<div class="item-after"> <span class="badge bg-yellow">5</span></div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action 1</a><a href="#" data-confirm="Are you sure want to delete this item?" data-close-on-cancel="true" class="swipeout-delete">Delete</a></div>
</li>
<li class="swipeout">
<div class="swipeout-content item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">You can't delete me</div>
<div class="item-after">Another label</div>
</div>
</div>
<div class="swipeout-actions-right"><a href="#" class="action1">Action</a></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
      var myApp = new Framework7();
      
      var $$ = Dom7;
      
      $$('.action1').on('click', function () {
        myApp.alert('Action 1');
      });
    </script>

</body>
</html>