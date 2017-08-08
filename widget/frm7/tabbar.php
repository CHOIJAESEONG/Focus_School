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
				<h1 class="page-header" style="margin:15px;text-align:left;">Tabbar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Tabbar는 Tool bar의 특별한 경우이지만 일반 링크 대신 아이콘 (또는 레이블이있는 아이콘)을 포함하며 탭과 함께 사용하도록 돼있습니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">기본적으로 모든 Tabbar 요소(link)는 Tool bar를 따라 균등하게 간격을두고 있습니다. 서로 탭 간격이 동일합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/tabbar.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/tabbar.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Add badges to icons and Label</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Tabbar 아이콘에 배지를 추가해야하는 경우 아이콘 안에 &lt;span class = "badge"&gt; 넣기만 하면 됩니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">레이블이있는 Tabbar 아이콘을 사용해야하는 경우 Tabbar에 "tabbar-labels"클래스가 하나 더 있어야하며 링크 내부에 &lt;span class = "tabbar-label"&gt;를 넣어야합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/tabbar_2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/tabbar_2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Scrollable Tab Bar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Scrollable Tab Bar는 Material Theme에서만 사용할 수 있습니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">많은 링크가 있고 한눈에 보기 맞지 않으면 scroll 가능한 Tab Bar를 사용하는 것이 유용 할 수 있습니다. 탭 링크를 swipe / scroll 할 수 있습니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/tabbar_3.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/tabbar_3.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>

		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/toolbar.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Toolbar
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/hide_bars.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Hide Bars
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