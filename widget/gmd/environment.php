<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:980px;">
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Environment</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">z-index 	: Material의 모든 컴포넌트에 높이값을 설정하여 3D UX 환경 구성</li>					
					<li style="margin:15px 0;padding-right:15px;">shadow : 설정된 높이값으로 그림자 구성</li>
					<li style="margin:15px 0;padding-right:15px;">thickness : 단, 각 컴포넌트 굵기는 1px</li>
				</ul>
			</div>
			
			<div style="width:100%;text-align:center;">
				<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
				  <source src="<?=VIDPATH?>/material_zindex.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>		
			</div>
			
			
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/index.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						개념
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/motion.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						모션
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