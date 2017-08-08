<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:2200px;">
			<!--Cool Buttons & Command Button & Shortcut Button-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Cool Buttons / Command Button / Shortcut Button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">버튼의 색/그림자/이미지 설정 가능</li>
					<li style="margin:15px 0;padding-right:15px;">로딩 애니매이션 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/button.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:450px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/button.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--Dropdown Button-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Dropdown Button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">버튼 클릭 시 하위 목록이 버튼 아래로 나타남</li>
					<li style="margin:15px 0;padding-right:15px;">초기 하위 목록이 보이는 상태로 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/drop_button.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/drop_button.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--Breadcrubs-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Breadcrubs</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">사이트 이동 경로를 보여줌(카테고리 사이트맵)</li>
					<li style="margin:15px 0;padding-right:15px;">이동 경로를 클릭하여 해당 페이지로 이동 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/breadcrub.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:400px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/breadcrub.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>	
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#13c35f;">
				<a href="<?=WIGPATH?>uwp/form.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						Forms / Inputs
					</span>	
			   </a>
			</div>			
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#303f9f;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>uwp/img.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Images
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