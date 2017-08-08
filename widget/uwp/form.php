<?php
	@include_once("../../include/header.php");
	
?>

    <div class="container-fluid contents_container" style="position:relative;">
      <div class="row">
	    <?php
			include_once("../../include/sideMenu.php");
		?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:15px;text-align:center;height:3200px;">
			<!--Checkbox & Radiobutton-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Checkbox / Radio Button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Checkbox : 여러 항목 중 원하는 항목을 한 개 이상 선택하게 할 때 사용</li>
					<li style="margin:15px 0;padding-right:15px;">Radio Button : 일련의 선택 사항 중 한 번에 하나씩만 선택</li>
					<li style="margin:15px 0;padding-right:15px;">각각 사이즈 조절 가능</li>
					<li style="margin:15px 0;padding-right:15px;">초기 체크/선택 여부 설정 가능</li>
					
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/checkbox.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/checkbox.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--Switchers-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Switchers</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">ON/OFF 를 선택할 때 사용</li>
					<li style="margin:15px 0;padding-right:15px;">초기 ON/OFF 여부 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/switcher.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/switcher.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--TextArea-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">TextArea</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">Text를 작성할 수 있는 공간</li>
					<li style="margin:15px 0;padding-right:15px;">자동으로 Text의 줄 수에 맞게 높이 설정 가능</li>
					<li style="margin:15px 0;padding-right:15px;">최대 작성 가능한 높이 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/textarea.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/textarea.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--Input File -->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Input File </h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">파일을 업로드 하기위한 기능</li>
					<li style="margin:15px 0;padding-right:15px;">버튼 이미지 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/input_file.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/input_file.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<!--Modern Inputs-->
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Modern Inputs</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">입력창 위아래로 설명 문구 설정 가능</li>
					<li style="margin:15px 0;padding-right:15px;">좌측에 이미지 설정 가능</li>
					<li style="margin:15px 0;padding-right:15px;">우측에 제출 버튼 설정가능</li>
					<li style="margin:15px 0;padding-right:15px;">입력을 Password 형태로 설정 가능</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>uwp/modern_input.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>uwp/modern_input.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>

	
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#13c35f;">
				<a href="<?=WIGPATH?>uwp/index.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						Overview
					</span>	
			   </a>
			</div>			
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#303f9f;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>uwp/btn.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Buttons
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