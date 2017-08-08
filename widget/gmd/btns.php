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
				<h1 class="page-header" style="margin:15px;text-align:left;">Buttons</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">용도, 중요도에 따른 3가지 버튼</li>					
					<li style="margin:15px 0;padding-right:15px;">Floating action button이 가장 상위 버튼이고 Flat button이 가장 하위 버튼이다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<img src="<?=IMGPATH?>gmd/material_btnstyle.png" style="width:100%;"/>
			</div>
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Floating action button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">페이지 오른쪽하단, 혹은 중상단에 위치하는 원형 버튼</li>					
					<li style="margin:15px 0;padding-right:15px;">사용자 꼭 필요한 기능, 메뉴를 함축한 버튼으로 클릭시 인스턴트 동작, 리스트 표출 등 다양하게 사용된다.</li>
					<li style="margin:15px 0;padding-right:15px;">모바일 앱에 최적화 되어 있으며 모바일 웹에서는 사용자를 혼동시키지 방지하기위해 반드시 필요한 경우에만 사용한다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;background:#e9e9e9;">
				<img src="<?=IMGPATH?>gmd/material_floatingbtn.png" style="max-width:300px;margin:15px 0px;"/>
				<img src="<?=IMGPATH?>gmd/material_floatingbtn2.png" style="max-width:300px;margin:15px 0px;"/>
			</div>
			
			
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Raised button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">높이값, 그림자가 있는 직사각형 형태의 버튼</li>					
					<li style="margin:15px 0;padding-right:15px;">주로 Contents나, UX input을 받기위해 사용된다.</li>
				</ul>
			</div>
			
			
			<div class="row placeholders" style="padding:0px;background:#e9e9e9;">
				<img src="<?=IMGPATH?>gmd/material_raisebtn.png" style="max-width:300px;margin:15px 0px;"/>
				<img src="<?=IMGPATH?>gmd/material_raisebtn2.png" style="max-width:300px;margin:15px 0px;"/>
			</div>
			
			
			
			<div class="row placeholders" >
				<h1 class="page-header" style="margin:15px;text-align:left;">Flat button</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">높이값, 그림자가 없는 버튼</li>			
					<li style="margin:15px 0;padding-right:15px;">보통 dialog, toolbar, inbox에서 사용된다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;background:#e9e9e9;">
				<img src="<?=IMGPATH?>gmd/material_flatbtn.png" style="max-width:300px;margin:15px 0px;"/>
				<img src="<?=IMGPATH?>gmd/material_flatbtn2.png" style="max-width:300px;margin:15px 0px;"/>
			</div>
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#23527c;">
				<a href="<?=WIGPATH?>gmd/bottom_sheets.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						Bottom Sheets
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#4CAF50;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>gmd/card.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Cards
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