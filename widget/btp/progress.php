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
				<h1 class="page-header" style="margin:15px;text-align:left;">Animated Progress</h1>
				<iframe src="<?=IFRPATH?>btp/progress.php?is_ifr=1" style="border:none;width:100%;max-width:980px;height:300px;"></iframe>		
				<div class="try_btn_wrapper" style="">
					<button type="button" class="btn btn-success" ><a href="<?=IFRPATH?>btp/progress.php" target="_blank" style="color:white;">Demo</a></button>
				</div>
			</div>
		
		
			<div class="row placeholders" style="padding:0px;background:#fff;overflow-x:scroll;margin-bottom:67px;">
				<table class="browserref notranslate">
				  <tbody><tr>
				   <th style="width:25%;font-size:16px;text-align:left;">Property</th>
					<th style="width:15%;" class="bsChrome" title="Chrome"></th>
					<th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
					<th style="width:15%;" class="bsSafari" title="Safari"></th>
					<th style="width:15%;" class="bsOpera" title="Opera"></th>                
				  </tr>
					<tr>
					<td style="text-align:left;">transform</td>
					<td>supported</td>
					<td>10.0</td>
					<td>supported</td>
					<td>12</td>
					</tr>
				</tbody></table>
			</div>
		
			
        </div>
		
		
		
		<!--Pagination-->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2" style="padding:0px;height:80px;">
			<div class="page_prev_w" style="position:absolute;bottom:0px;left:0px;width:50%;height:80px;background:#8e24aa;">
				<a href="<?=WIGPATH?>btp/index.php" class="page_prev" id="btn_prev" aria-label="이전페이지">
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
			<div class="page_next_w" style="position:absolute;bottom:0px;right:0px;width:50%;height:80px;background:#252831;text-align:right;">
				<a class="page_next" href="<?=WIGPATH?>btp/collapse.php" id="btn_next" aria-label="다음페이지">
					<span class="svg_next">
						<svg xmlns="#" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<span class="page_text" style="right:100px;">
						Collapse
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