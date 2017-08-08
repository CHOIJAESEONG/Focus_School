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
				<h1 class="page-header" style="margin:15px;text-align:left;">Tabs</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Contents를 상위 카테고리별로 선택/이동하는 UX를 제공하는 위젯</li>	
					<li style="margin:15px 0;padding-right:15px;">Horizontal을 권장한다.</li>	
					<li style="margin:15px 0;padding-right:15px;">1 depth를 권장한다. (2 dpeth 이상은 산만함)</li>	
					<li style="margin:15px 0;padding-right:15px;">주로 Contents 상위 카테고리, 서비스별로 아이템을 분류한다.</li>	
					<li style="margin:15px 0;padding-right:15px;">Tab은 Horizontal Scroll이 가능하다.</li>
					<li style="margin:15px 0;padding-right:15px;">Tab은 페이지 이동이 아닌 페이지 슬라이드에서 권장한다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>gmd/tab.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>gmd/tab.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>

			<div class="row placeholders" style="padding:0px;background:#fff;">
				<img src="<?=IMGPATH?>gmd/material_tab.png" style="max-width:300px;margin:15px 0px;"/>
				<img src="<?=IMGPATH?>gmd/material_tab2.png" style="max-width:300px;margin:15px 0px;"/>
			</div>
			
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/expanel.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						Expansion Panels
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/navi_drawer.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Patterns
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