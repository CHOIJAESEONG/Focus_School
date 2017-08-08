<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
	.cell {width:100%; float:left; }
@media (min-width: 768px) {
	.whole{
		width:100% ;
		left : inherit;
		right: 0;
	}
}
  
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-schemes.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole" style="margin:0 auto;">
	<div class="cell">
		<h5>.accordion</h5>
		<div class="accordion" data-role="accordion" data-close-any="true">
			<div class="frame active">
				<div class="heading">Item 1</div>
				<div class="content" style="display: block;">
					Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
				</div>
			</div>
			<div class="frame">
				<div class="heading">Item 2</div>
				<div class="content" style="display: none;">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
				</div>
			</div>
			<div class="frame">
				<div class="heading">Item 3</div>
				<div class="content" style="display: none;">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</div>
			</div>
		</div>
	</div>

	<div class="cell">
		<h5>.accordion with icon</h5>
		<div class="accordion" data-role="accordion">
			<div class="frame active">
				<div class="heading">Item 1<span class="mif-home icon"></span></div>
				<div class="content" style="display: block;">
					Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
				</div>
			</div>
			<div class="frame active">
				<div class="heading">Item 2<span class="mif-cog icon"></span></div>
				<div class="content">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
				</div>
			</div>
			<div class="frame">
				<div class="heading">Item 3<span class="mif-database icon"></span></div>
				<div class="content">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</div>
			</div>
		</div>
	</div>
	<div class="cell">
		<h5>.accordion &amp; .large-heading</h5>
		<div class="accordion large-heading" data-role="accordion" data-on-frame-open="return frame.attr('id') !== 'f3'" data-on-frame-opened="alert('You open frame '+frame.find('.heading').text())" data-on-frame-closed="alert('You close frame '+frame.find('.heading').text())">
			<div class="frame">
				<div class="heading">Item 1</div>
				<div class="content" style="display: none;">
					Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
				</div>
			</div>
			<div class="frame active">
				<div class="heading">Item 2</div>
				<div class="content">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
				</div>
			</div>
			<div class="frame active">
				<div class="heading">Item 3</div>
				<div class="content">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
				</div>
			</div>
		</div>
	</div>
</div>