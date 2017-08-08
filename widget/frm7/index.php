<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;">
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Framework7</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">iOS와 안드로이드 네이티브 앱의 UI와 UX를 HTML 코드로 제공하는 프레임워크 라이브러리</li>
					<li style="margin:15px 0;padding-right:15px;">공식 사이트 : <a href="http://framework7.io/" target="_blank">framework7.io</a></li>

				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<video width="320" height="auto" controls autoplay style="margin:10px auto;max-width:980px;background:#000;">
				  <source src="<?=VIDPATH?>/frm7.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
			</div>
		
		
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<!--<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#00bcd4;">
				<a href="#" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						소개
					</span>	
			   </a>
			</div>-->
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:100% !important;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/navbar.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff;">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Navbar
					</span>	
			   </a>
			</div>
		</div>
      </div>
    </div>

<?php
		@include_once("../../include/footer.php");
	?>
</body>
</html>