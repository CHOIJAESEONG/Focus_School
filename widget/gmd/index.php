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
				<!--<video width="100%" height="300" controls style="margin:10px auto;max-width:980px;background:#000;" poster="<?=IMGPATH?>/material_poster.png">
				  <source src="<?=VIDPATH?>/material.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>-->				
				<iframe width="100%" height="360" src="https://www.youtube.com/embed/cvnPiEOOZGc" frameborder="0" allowfullscreen style="margin:10px auto;max-width:980px;background:#000;"></iframe>
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Material Design</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">PC, 모바일, 테블릿 등 모든 플랫폼에 반응하는 시각적 UI/UX를 위해 구글이 개발한 디자인 패턴</li>
					<li style="margin:15px 0;padding-right:15px;">본래 App 환경에 기반한 UX 환경 이후, Web 환경에서도 최적화된 가이드 Material Design Light(MDL) 제시</li>
					<li style="margin:15px 0;padding-right:15px;">공식 사이트 : <a href="https://material.google.com/" target="_blank">material.google.com</a></li>
				</ul>
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
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:100% !important;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/environment.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						환경
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