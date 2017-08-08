<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;">
			<div style="width:100%;text-align:center;">
				<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
				  <source src="<?=VIDPATH?>/material_motion.mp4" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>		
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Material Motion</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">모션은 각 위젯들을 그룹화 시키고 상호작용화 하기위해 사용</li>					
					<li style="margin:15px 0;padding-right:15px;">Trnaforming(이동), Expand(확장), Collapse(붕괴) 효과 등 모두 모션의 범주</li>
					<li style="margin:15px 0;padding-right:15px;">모션의 규칙
						<ul style="text-align:left;font-size:18px;">
							<li style="margin:15px 0;padding-right:15px;">신속(Quick)</li>
							<li style="margin:15px 0;padding-right:15px;">명확(Clear)</li>
							<li style="margin:15px 0;padding-right:15px;">통일화(Unified)</li>
						</ul>
					</li>
				</ul>
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Motion은 신속해야한다</h1>
				<div class="info_video_wrapper" style="width:100%;text-align:center;">
					<div class="figure" style="width:100%;max-width:360px;display:-webkit-inline-box;margin-right:0;">
						<figure class="s-tag-media">
							<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
							  <source src="<?=VIDPATH?>/material_motion2.mp4" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>	
							<figcaption><p class="s-tag-caption do" style="border-top:15px solid #4caf50;font-weight:bold;">허용</p></figcaption>
						</figure>
					</div>
					<div class="figure" style="width:100%;max-width:360px;display:-webkit-inline-box;margin-left:0;">
						<figure class="s-tag-media">
							<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
							  <source src="<?=VIDPATH?>/material_motion3.mp4" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>	
							<figcaption><p class="s-tag-caption do" style="border-top:15px solid #d32F2f;font-weight:bold;">금지</p></figcaption>
						</figure>
					</div>					
				</div>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">애니메이션은 사용자에게 지연시간이 없도록 빠르게 완료되야한다</li>										
				</ul>
			</div>
			
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Motion은 명확해야한다</h1>
				<div class="info_video_wrapper" style="width:100%;text-align:center;">
					<div class="figure" style="width:100%;max-width:360px;display:-webkit-inline-box;margin-right:0;">
						<figure class="s-tag-media">
							<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
							  <source src="<?=VIDPATH?>/material_motion4.mp4" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>	
							<figcaption><p class="s-tag-caption do" style="border-top:15px solid #4caf50;font-weight:bold;">허용</p></figcaption>
						</figure>
					</div>
					<div class="figure" style="width:100%;max-width:360px;display:-webkit-inline-box;margin-left:0;">
						<figure class="s-tag-media">
							<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
							  <source src="<?=VIDPATH?>/material_motion5.mp4" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>	
							<figcaption><p class="s-tag-caption do" style="border-top:15px solid #d32F2f;font-weight:bold;">금지</p></figcaption>
						</figure>
					</div>					
				</div>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">이동은 간결하고 단순하게 되야한다. 단, 한순간에 너무 많은것을 이동시키는것은 좋지않다</li>										
				</ul>
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Motion은 통일화되야한다</h1>
				<div class="info_video_wrapper" style="width:100%;text-align:center;">
					<div class="figure" style="width:100%;max-width:720px;display:-webkit-inline-box;margin-right:0;">
						<figure class="s-tag-media">
							<video width="100%" height="300" autoplay loop style="margin:10px auto;max-width:980px;background:#eeedef;">
							  <source src="<?=VIDPATH?>/material_motion6.mp4" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>	
						</figure>
					</div>
							
				</div>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">각 위젯의 모션에서 속도, 포커스 등 요소들이 통일화되서 비슷하게 진행되야한다</li>										
				</ul>
			</div>
			
			
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/environment.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						환경
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/bottom_navi.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						요소/위젯
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