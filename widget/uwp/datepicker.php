<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:912px;">
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Datepicker</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">날짜 기입 시 달력에서 고를 수 있게 하는 기능</li>	
					<li style="margin:15px 0;padding-right:15px;">날짜를 미리 선택해 둘 수 있음</li>	
					<li style="margin:15px 0;padding-right:15px;">달력 스타일 변경 가능</li>	
					<li style="margin:15px 0;padding-right:15px;">특정 날짜 선택시 발생하는 이벤트 설정 가능</li>	
				</ul>
			</div>
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/datepicker.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:500px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/datepicker.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
        </div>
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#13c35f;">
				<a href="<?=WIGPATH?>uwp/dialog.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
						</svg>
					</span>	
					<span class="page_text">
						Dialog
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#303f9f;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>uwp/countdown.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Countdown
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