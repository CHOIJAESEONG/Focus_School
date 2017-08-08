<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;">
			
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Toolbar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Toolbar는 navigation 요소가 포함 된 화면 하단의 고정 (fixed 및 through layout) 영역입니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">기본적으로 모든 Toolbar 요소(link)는 Toolbar를 따라 균등하게 간격을두고 있습니다. 서로 동일한 간격을 유지합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/toolbar.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/toolbar.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Hide Toolbar Automatically</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Framework7을 사용하면 Toolbar가 필요하지 않은 일부 Ajax로드 페이지에 대해 Toolbar를 자동으로 숨기거나 표시 할 수 있습니다. through-type layout을 사용하는 경우에만 유용합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/toolbar_2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/toolbar_2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Bottom Toolbar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Bottom Toolbar는 Material Theme에서만 지원됩니다. iOS Theme에서는 기본적으로 하단에 있습니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/toolbar_3.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/toolbar_3.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/dynamic_navbar.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Dynamic NavBar
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/tabbar.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Tabbar
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