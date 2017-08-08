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
<div class="center">Accordion</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">List View Accordion</div>
<div class="list-block accordion-list">
<ul>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 1</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 1 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 2</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 2 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 3</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 3 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 4</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 4 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
</ul>
</div>
 
<div class="content-block-title">Separate Collapsibles</div>
<div class="list-block">
<ul>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 1</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 1 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 2</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 2 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 3</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 3 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
<li class="accordion-item"><a href="#" class="item-content item-link">
<div class="item-inner">
<div class="item-title">Item 4</div>
</div></a>
<div class="accordion-item-content">
<div class="content-block">
<p>Item 4 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</li>
</ul>
</div>
<div class="content-block-title">Custom Accordion</div>
<div class="content-block accordion-list custom-accordion">
<div class="accordion-item">
<div class="accordion-item-toggle"><i class="icon icon-plus">+</i><i class="icon icon-minus">-</i><span>Item 1</span></div>
<div class="accordion-item-content">
<p>Item 1 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
<div class="accordion-item">
<div class="accordion-item-toggle"><i class="icon icon-plus">+</i><i class="icon icon-minus">-</i><span>Item 2</span></div>
<div class="accordion-item-content">
<p>Item 2 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
<div class="accordion-item">
<div class="accordion-item-toggle"><i class="icon icon-plus">+</i><i class="icon icon-minus">-</i><span>Item 3</span></div>
<div class="accordion-item-content">
<p>Item 3 content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim viverra velit sed euismod. Mauris sed quam vehicula, dapibus ante a, aliquet augue.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<style>.custom-accordion{padding-left:0;padding-right:0;}.custom-accordion .accordion-item-toggle{padding:0px 15px;height:44px;line-height:44px;font-size:17px;color:#000;border-bottom:1px solid rgba(0,0,0,0.15);cursor:pointer;}.custom-accordion .accordion-item-toggle:active{background:rgba(0,0,0,0.15);}.custom-accordion .accordion-item-toggle span{display:inline-block;margin-left:15px;}.custom-accordion .accordion-item:last-child .accordion-item-toggle{border-bottom:none;}.custom-accordion .icon-plus,.custom-accordion .icon-minus{display:inline-block;width:22px;height:22px;border:1px solid #000;border-radius:100%;line-height:20px;text-align:center;}.custom-accordion .icon-minus{display:none;}.custom-accordion .accordion-item-expanded .icon-minus{display:inline-block;}.custom-accordion .accordion-item-expanded .icon-plus{display:none;}.custom-accordion .accordion-item-content{padding:0px 15px;}</style>
</body>
</html>