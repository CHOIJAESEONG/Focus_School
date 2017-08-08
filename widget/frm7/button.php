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
				<h1 class="page-header" style="margin:15px;text-align:left;">Button - iOS</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Framework7에는 버튼을 사용할 수 있습니다. 필요한 것은 링크에 적절한 클래스를 추가하거나 버튼 입력을 제출하는 것입니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/button.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/button.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Button - Android</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Framework7에는 버튼을 사용할 수 있습니다. 필요한 것은 링크에 적절한 클래스를 추가하거나 버튼 입력을 제출하는 것입니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/button_2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/button_2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<h1 class="page-header" style="margin:15px;text-align:left;">Floating Action Button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">플로팅 액션 버튼은 프로모션 액션에 사용됩니다. 그것들은 UI 위를 떠 다니는 동그라미 모양의 아이콘으로 구별되며 모핑, 실행, 앵커 포인트 전송과 같은 동작 동작을 포함합니다.</li>	
				</ul>
				<iframe src="<?=IFRPATH?>frm7/button_3.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>frm7/button_3.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#fff;">
				<a href="<?=WIGPATH?>frm7/cards.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text" style="color:#007aff;">
						Cards
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#fff;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>frm7/calendar_datepicker.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next" style="color:#007aff">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;color:#007aff;">
						Calendar / Datepicker
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