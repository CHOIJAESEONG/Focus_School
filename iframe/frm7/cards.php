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
<style>.demo-card-header-pic .card-header{height:40vw;background-size:cover;background-position:center;}.facebook-card .card-header{display:block;padding:10px;}.facebook-card .facebook-avatar{float:left;}.facebook-card .facebook-name{margin-left:44px;font-size:14px;font-weight:500;}.facebook-card .facebook-date{margin-left:44px;font-size:13px;color:#8e8e93;}.facebook-card .card-footer{background:#fafafa;}.facebook-card .card-footer a{color:#81848b;font-weight:500;}.facebook-card .card-content img{display:block;}.facebook-card .card-content-inner{padding:15px 10px;}</style>
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Cards</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block-title">Simple Cards</div>
<div class="card">
<div class="card-content">
<div class="card-content-inner">This is simple card with plain text. But card could contain its own header, footer, list view, image, and any elements inside.</div>
</div>
</div>
<div class="card">
<div class="card-header">Card header</div>
<div class="card-content">
<div class="card-content-inner">Card with header and footer. Card header is used to display card title and footer for some additional information or for custom actions.</div>
</div>
<div class="card-footer">Card Footer</div>
</div>
<div class="card">
<div class="card-content">
<div class="card-content-inner">Another card. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat sem est, non tincidunt ligula volutpat sit amet. Mauris aliquet magna justo. </div>
</div>
</div>
<div class="content-block-title">Styled Cards</div>
<div class="card demo-card-header-pic">
<div style="background-image:url(http://lorempixel.com/1000/600/nature/3/)" valign="bottom" class="card-header color-white no-border">Journey To Mountains</div>
<div class="card-content">
<div class="card-content-inner">
<p class="color-gray">Posted on January 21, 2015</p>
<p>Quisque eget vestibulum nulla. Quisque quis dui quis ex ultricies efficitur vitae non felis. Phasellus quis nibh hendrerit...</p>
</div>
</div>
<div class="card-footer"><a href="#" class="link">Like</a><a href="#" class="link">Read more</a></div>
</div>
<div class="card demo-card-header-pic">
<div style="background-image:url(http://lorempixel.com/1000/600/people/6/)" valign="bottom" class="card-header color-white no-border">Lorem Ipsum</div>
<div class="card-content">
<div class="card-content-inner">
<p class="color-gray">Posted on January 21, 2015</p>
<p>Quisque eget vestibulum nulla. Quisque quis dui quis ex ultricies efficitur vitae non felis. Phasellus quis nibh hendrerit...</p>
</div>
</div>
<div class="card-footer"><a href="#" class="link">Like</a><a href="#" class="link">Read more</a></div>
</div>
<div class="content-block-title">Facebook Cards</div>
<div class="card facebook-card">
<div class="card-header no-border">
<div class="facebook-avatar"><img src="http://lorempixel.com/68/68/people/1/" width="34" height="34"></div>
<div class="facebook-name">John Doe</div>
<div class="facebook-date">Monday at 3:47 PM</div>
</div>
<div class="card-content"> <img src="http://lorempixel.com/1000/700/nature/8/" width="100%"></div>
<div class="card-footer no-border"><a href="#" class="link">Like</a><a href="#" class="link">Comment</a><a href="#" class="link">Share</a></div>
</div>
<div class="card facebook-card">
<div class="card-header">
<div class="facebook-avatar"><img src="http://lorempixel.com/68/68/people/1/" width="34" height="34"></div>
<div class="facebook-name">John Doe</div>
<div class="facebook-date">Monday at 2:15 PM</div>
</div>
<div class="card-content">
<div class="card-content-inner">
<p>What a nice photo i took yesterday!</p><img src="http://lorempixel.com/1000/700/nature/8/" width="100%">
<p class="color-gray">Likes: 112 &nbsp;&nbsp; Comments: 43</p>
</div>
</div>
<div class="card-footer"><a href="#" class="link">Like</a><a href="#" class="link">Comment</a><a href="#" class="link">Share</a></div>
</div>
<div class="content-block-title">Cards With List View</div>
<div class="card">
<div class="card-content">
<div class="list-block">
<ul>
<li><a href="#" class="item-link item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Link 1</div>
</div></a></li>
<li><a href="#" class="item-link item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Link 2</div>
</div></a></li>
<li><a href="#" class="item-link item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Link 3</div>
</div></a></li>
<li><a href="#" class="item-link item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Link 4</div>
</div></a></li>
<li><a href="#" class="item-link item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Link 5</div>
</div></a></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-header">New Releases:</div>
<div class="card-content">
<div class="list-block media-list">
<ul>
<li class="item-content">
<div class="item-media"><img src="http://lorempixel.com/88/88/fashion/4" width="44"></div>
<div class="item-inner">
<div class="item-title-row">
<div class="item-title">Yellow Submarine</div>
</div>
<div class="item-subtitle">Beatles</div>
</div>
</li>
<li class="item-content">
<div class="item-media"><img src="http://lorempixel.com/88/88/fashion/5" width="44"></div>
<div class="item-inner">
<div class="item-title-row">
<div class="item-title">Don't Stop Me Now</div>
</div>
<div class="item-subtitle">Queen</div>
</div>
</li>
<li class="item-content">
<div class="item-media"><img src="http://lorempixel.com/88/88/fashion/6" width="44"></div>
<div class="item-inner">
<div class="item-title-row">
<div class="item-title">Billie Jean</div>
</div>
<div class="item-subtitle">Michael Jackson</div>
</div>
</li>
</ul>
</div>
</div>
<div class="card-footer"> <span>January 20, 2015</span><span>5 comments</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>

</body>
</html>