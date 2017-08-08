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
				<h1 class="page-header" style="margin:15px;text-align:left;">Navbar</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Navbar는 페이지 제목과 navigation 요소가 포함 된 화면 상단의 고정 (fixed 및 through layout 유형) 영역입니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">왼쪽 부분은 "back link", icon 또는 단일 텍스트 link와 함께 사용하도록 설계되었습니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">가운데 부분은 페이지 제목 또는 tab link (buttons row/segmented controller)를 표시하는 데 사용됩니다.</li>	
					<li style="margin:15px 0;padding-right:15px;">오른쪽 부분은 왼쪽 부분과 동일합니다.</li>		
				</ul>
				<iframe src="<?=IFRPATH?>frm7/navbar.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/navbar.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Navbar with links</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">링크가 필요하다면 Left와 Right 부분에 &#60;a&#62;태그를 사용하여 link 클래스를 추가하면 된다. </li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/navbar_2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/navbar_2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Links with icons only</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">text없이 icon만으로 버튼을 구성하고 싶다면 icon-only 클래스를 선언해주면 다음과 같은 형태의 navbar가 된다. </li>
				</ul>
				<iframe src="<?=IFRPATH?>frm7/navbar_3.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/navbar_3.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/index.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Overview
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/dynamic_navbar.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Dynamic NavBar
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