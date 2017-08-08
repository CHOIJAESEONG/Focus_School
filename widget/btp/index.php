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
				<h1 class="page-header" style="margin:15px;text-align:left;">Bootstrap</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">트위터의 Mark Otto와 Jacob Thornton에 의해 개발된 responsive front-end Framework</li>
					<li style="margin:15px 0;padding-right:15px;">모바일 웹에 최적화 되어있으며 반응형 Framework</li>
					<li style="margin:15px 0;padding-right:15px;">Full-page 컨텐츠에 적합</li>
					<li style="margin:15px 0;padding-right:15px;">아이콘/CSS 같은 디자인이 템플릿, JS 모듈이 플러그인 형식으로 제공됨 (안정화를 위한 Customizing 필요)</li>
					<li style="margin:15px 0;padding-right:15px;">공식 사이트 : <a href="https://v4-alpha.getbootstrap.com/" target="_blank">getbootstrap.com</a></li>
					<li style="margin:15px 0;padding-right:15px;">지원기기/버전: <a href="http://v4-alpha.getbootstrap.com/getting-started/browsers-devices/" target="_blank">Browsers and devices</a></li>

				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>btp/index.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;margin-bottom:67px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>btp/index.php" target="_blank" style="color:white;">Template Demo</a></button>
				</div>
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
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:100% !important;height:80px;background:#252831;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>btp/progress.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Progress
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