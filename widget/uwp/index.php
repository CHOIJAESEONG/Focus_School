<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:980px;">
			<div style="width:100%;text-align:center;">
				<video width="100%" height="300" controls style="margin:10px auto;max-width:980px;background:#000;" poster="" autoplay>
				  <source src="<?=VIDPATH?>/uwp.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>				
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Universal Window Platform</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">UWP(유니버설 Windows 플랫폼) 앱은 Windows 8에서 Windows 런타임으로 처음 도입된 UWP를 기반으로 하는 Windows 환경</li>
					<li style="margin:15px 0;padding-right:15px;">본 페이지에서는 UWP 디자인중 대표적인 디자인 패턴중 하나인 Metro UI에 대해 서술</li>
					<li style="margin:15px 0;padding-right:15px;">UWP 공식 사이트 : <a href="https://developer.microsoft.com/ko-kr/windows/apps/getstarted" target="_blank">developer.microsoft.com</a></li>
					<li style="margin:15px 0;padding-right:15px;">Metro UI 라이브러리 사이트 : <a href="http://metroui.org.ua/" target="_blank">metroui.org.ua</a></li>
				</ul>
			</div>
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<!--<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#ff005b;">
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
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:100% !important;height:80px;background:#303f9f;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>uwp/form.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Forms/Inputs
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