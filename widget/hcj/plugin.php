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
				<h1 class="page-header" style="margin:15px;text-align:left;">jQuery Plugin</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">개발 작업을 간단하게 처리하거나 자동화하는 jQuery는 자바스크립트의 핵심 라이브러리입니다.</li>
					<li style="margin:15px 0;padding-right:15px;">플러그-인을 사용하여 jQuery를 확장하여 사용하기도 합니다.</li>
					<li style="margin:15px 0;padding-right:15px;">이미 배포된 플러그-인을 적용해서 사용할 수 있지만 직접 플러그-인을 개발하여 프로젝트에서 활용한다면 개발팀의 기술 수준 뿐만 아니라 개발 생산성을 더 높일 수 있습니다.</li>
				</ul>
			</div>
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Comparison Slider</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">jQuery Image Comparison Slider를 사용하면 두 이미지를 서로 겹쳐서 두 이미지(보통 전후 종류)를 비교할 수 있습니다.</li>
					<li style="margin:15px 0;padding-right:15px;">원본 이미지에 대한 기법이나 접근 방식의 변화량을 반영하는 훌륭한 방법이기도 합니다.</li>
				</ul>
				<iframe src="<?=IFRPATH?>hcj/plugin_cs.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:800px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>hcj/plugin_cs.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#4E342E;">
				<a href="<?=WIGPATH?>hcj/swp.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						iDangerous Swiper
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#EF6C00;text-align:right;">
				<a class="page_next" href="<?=WEBPATH?>index.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Home
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