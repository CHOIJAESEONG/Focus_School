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
				<h1 class="page-header" style="margin:15px;text-align:left;">CSS3 Animation</h1>
				<ul style="text-align:left;font-size:18px;">
					<li style="margin:15px 0;padding-right:15px;">CSS3 Animation은 타겟 오브젝트의 스타일에 서서히 변화를 주는것을 의미한다.</li>
					<li style="margin:15px 0;padding-right:15px;">@keyframes : Animation 속성을 변수 형태로 정의 할 수 있는 CSS3 규칙</li>
					<li style="margin:15px 0;padding-right:15px;">CSS3에서 제공하는 4가지 Transoform method와 CSS 속성을 조합아여 Animation을 만든다.</li>
				</ul>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>hcj/anim.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>hcj/anim.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
			
			<div class="row placeholders" style="padding:0px;">
				<iframe src="<?=IFRPATH?>hcj/anim2.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>hcj/anim2.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
		
		
			<div class="row placeholders" style="padding:0px;background:#fff;overflow-x:scroll;">
				<table class="browserref notranslate">
				  <tbody><tr>
				   <th style="width:25%;font-size:16px;text-align:left;">Property</th>
					<th style="width:15%;" class="bsChrome" title="Chrome"></th>
					<th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
					<th style="width:15%;" class="bsFirefox" title="Firefox"></th>
					<th style="width:15%;" class="bsSafari" title="Safari"></th>
					<th style="width:15%;" class="bsOpera" title="Opera"></th>                
				  <tr>
					<td style="text-align:left;">@keyframes</td>
					<td>43.0<br>4.0&nbsp;-webkit-</td>
					<td>10.0</td>
					<td>16.0<br>5.0&nbsp;-moz-</td>
					<td>9.0<br>4.0&nbsp;-webkit-</td>
					<td>30.0<br>15.0&nbsp;-webkit-<br>12.0 -o-</td>
				  </tr>
				  <tr>
					<td style="text-align:left;">animation</td>
					<td>43.0<br>4.0&nbsp;-webkit-</td>
					<td>10.0</td>
					<td>16.0<br>5.0&nbsp;-moz-</td>
					<td>9.0<br>4.0&nbsp;-webkit-</td>
					<td>30.0<br>15.0&nbsp;-webkit-<br>12.0&nbsp;-o-</td>
				  </tr>
				</tbody></table>
			</div>

			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#4E342E;">
				<a href="<?=WIGPATH?>hcj/3d_transform.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
					<span class="svg_prev">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
							
						</svg>
					</span>	
					<span class="page_text">
						3D Transforms
					</span>	
			   </a>
			</div>
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#EF6C00;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>hcj/swp.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						iDangerous Swiper
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