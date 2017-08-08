<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.material.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.material.colors.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=WEBPATH?>css/frm7-icons.css">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Buttons</div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Usual/Flat Buttons</div>
<div class="content-block">
<p><a href="#" class="button">Button</a></p>
<p><a href="#" class="button">Button</a></p>
</div>
<div class="content-block-title">Buttons Row</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button">Button</a><a href="#" class="button">Button</a></p>
</div>
<div class="content-block-title">Raised Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button button-raised">Button</a><a href="#" class="button button-raised">Button</a><a href="#" class="button button-raised">Button</a></p>
</div>
<div class="content-block-title">Raised Fill Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button button-fill button-raised">Button</a><a href="#" class="button button-fill button-raised">Button</a><a href="#" class="button button-fill button-raised">Button</a></p>
</div>
<div class="content-block-title">Color Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button color-red">Red</a><a href="#" class="button color-green">Green</a><a href="#" class="button color-blue">Blue</a></p>
<p class="buttons-row"><a href="#" class="button color-orange">Orange</a><a href="#" class="button color-pink">Pink</a><a href="#" class="button color-purple">Purple</a></p>
<p class="buttons-row"><a href="#" class="button color-cyan">Cyan</a><a href="#" class="button color-teal">Teal</a><a href="#" class="button color-indigo">Indigo</a></p>
</div>
<div class="content-block-title">Color Fill Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button button-fill color-red">Red</a><a href="#" class="button button-fill color-green">Green</a><a href="#" class="button button-fill color-blue">Blue</a></p>
<p class="buttons-row"><a href="#" class="button button-fill color-orange">Orange</a><a href="#" class="button button-fill color-pink">Pink</a><a href="#" class="button button-fill color-purple">Purple</a></p>
<p class="buttons-row"><a href="#" class="button button-fill color-cyan">Cyan</a><a href="#" class="button button-fill color-teal">Teal</a><a href="#" class="button button-fill color-indigo">Indigo</a></p>
</div>
<div class="content-block-title">Color Raised Fill Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button button-raised button-fill color-red">Red</a><a href="#" class="button button-raised button-fill color-green">Green</a><a href="#" class="button button-raised button-fill color-blue">Blue</a></p>
<p class="buttons-row"><a href="#" class="button button-raised button-fill color-orange">Orange</a><a href="#" class="button button-raised button-fill color-pink">Pink</a><a href="#" class="button button-raised button-fill color-purple">Purple</a></p>
<p class="buttons-row"><a href="#" class="button button-raised button-fill color-cyan">Cyan</a><a href="#" class="button button-raised button-fill color-teal">Teal</a><a href="#" class="button button-raised button-fill color-indigo">Indigo</a></p>
</div>
<div class="content-block-title">Color Ripple Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button ripple-blue">Button</a><a href="#" class="button color-green ripple-pink">Button</a><a href="#" class="button color-teal ripple-amber">Button</a></p>
<p class="buttons-row"><a href="#" class="button button-raised button-fill color-orange ripple-green">Button</a><a href="#" class="button button-raised button-fill color-pink ripple-blue">Button</a><a href="#" class="button button-raised button-fill color-purple ripple-yellow">Button</a></p>
</div>
<div class="content-block-title">Big Buttons</div>
<div class="content-block">
<p class="buttons-row"><a href="#" class="button button-big color-green">Button</a><a href="#" class="button button-big color-red">Button</a></p>
<p class="buttons-row"><a href="#" class="button button-big button-fill button-raised color-pink">Button</a><a href="#" class="button button-big button-fill button-raised color-teal">Button</a></p>
</div>
<div class="content-block-title">List Block Buttons</div>
<div class="card">
<div class="list-block">
<ul>
<li><a href="#" class="list-button item-link">List Button 1</a></li>
<li><a href="#" class="list-button item-link">List Button 2</a></li>
<li><a href="#" class="list-button item-link">List Button 2</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
      var myApp = new Framework7({
        material: true
      });
    </script>
</body>
</html>