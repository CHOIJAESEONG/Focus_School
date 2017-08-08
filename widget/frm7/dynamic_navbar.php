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
				<h1 class="page-header" style="margin:15px;text-align:left;">Dynamic Navbar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">
iOS의 멋진 기능 중 하나는 동적 navigation bar (navbar)입니다. Navbar의 요소는 페이지가 전환되는 동안 slide 및 fade되고 동적 탐색 모음이 활성화되면 다시 swipe됩니다.</li>
				</ul>
				<iframe src="<?=IFRPATH?>frm7/dynamic_navbar.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/dynamic_navbar.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Sliding transition</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Sliding transition은 앱의 탐색 체인을 반영해야하기 때문에 현명하게 사용해야합니다.</li>
				</ul>
				<iframe src="<?=IFRPATH?>frm7/dynamic_navbar_2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/dynamic_navbar_2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">animateNavBackIcon</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">기본 back link (icon + "back"text)를 사용하면이 링크에서 iOS 7이 더 많이 보이도록 추가 애니메이션을 활성화 할 수 있습니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">작동 시키려면 앱 초기화에 animateNavBackIcon : true 매개 변수를 추가하고 왼쪽 네비게이션 부분에 "back"클래스 및 아이콘과 링크가 있어야합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/dynamic_navbar_3.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/dynamic_navbar_3.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/navbar.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Navbar
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/toolbar.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						ToolBar
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