<?php
	@include_once("./include/header.php");
?>
<style>
.row .placeholders{
	max-width:none;
	width:30%;
	margin:15px;
	float:left;
	background-size:contain !important;
}


@media (max-width: 768px) {
	.row .placeholders{
		width:100%;
		margin:15px auto;
		float:none;
	}

}
</style>
    <div class="container-fluid contents_container" style="position:relative;min-height:1000px;">
      <div class="row">
	    <?php
			@include_once("./include/sideMenu.php");
		?>
		
		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-bottom:220px;">
         
		<div class="row placeholders" style="background:url('./img/responsive.jpg');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">HTML5/CSS3<br>JAVASCRIPT</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>hcj/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		
		<div class="row placeholders" style="background:url('./img/cssanim.jpg');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">CSS3 Animation</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>c3a/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		
		<div class="row placeholders" style="background-image:url('./img/frm.png');background-color:#eb562e;background-repeat:no-repeat;background-position:center;height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">Framework7</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>frm7/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		
		<div class="row placeholders" style="background:url('./img/bootstrap.jpg');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">BootStrap</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>btp/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		
		<div class="row placeholders" style="background:url('./img/googledesign.png');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">Google Material Design</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>gmd/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		<div class="row placeholders" style="background:url('./img/uwp.jpg');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">Universal Windows Platform</h1>
				<button type="button" class="btn btn-warning" ><a href="<?=WIGPATH?>uwp/index.php" style="color:black;">Learn It</a></button>
				</div>
			</div>
		</div>
		<div class="row placeholders" style="background:url('./img/apple.jpg');height:300px;position:relative;margin:border-radius:20px;">
			<!--<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.6);border-radius:20px;">-->
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">iOS Human Interface</h1>
				<!--<button type="button" class="btn btn-warning" ><a href="#" style="color:black;">Learn It</a></button>-->
				<button type="button" class="btn btn-danger" ><a href="#" style="color:black;">Not yet</a></button>
				</div>
			</div>
		</div>
		

		
		<?php
		/*
		<div class="row placeholders" style="background:url('./img/angular.png');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">AngularJS</h1>
				<!--<button type="button" class="btn btn-warning" ><a href="#" style="color:black;">Learn It</a></button>-->
				<button type="button" class="btn btn-danger" ><a href="#" style="color:black;">Not yet</a></button>
				</div>
			</div>
		</div>
		<div class="row placeholders" style="background:url('./img/jquerym.gif');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">jQuery Mobile</h1>
				<!--<button type="button" class="btn btn-warning" ><a href="#" style="color:black;">Learn It</a></button>-->
				<button type="button" class="btn btn-danger" ><a href="#" style="color:black;">Not yet</a></button>
				</div>
			</div>
		</div>
		<div class="row placeholders" style="background:url('./img/jindo.gif');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">JindoJS</h1>
				<!--<button type="button" class="btn btn-warning" ><a href="#" style="color:black;">Learn It</a></button>-->
				<button type="button" class="btn btn-danger" ><a href="#" style="color:black;">Not yet</a></button>
				</div>
			</div>
		</div>
		<div class="row placeholders" style="background:url('./img/ionic.png');height:300px;position:relative;border-radius:20px;">
			<div style="display:table;width:100%;height:100%;margin:0px auto;background: rgba(0,0,0,0.8);border-radius:20px;">
				<div style="display:table-cell;vertical-align:middle;"> 
				<h1 style="color:#fff;">Ionic</h1>
				<!--<button type="button" class="btn btn-warning" ><a href="#" style="color:black;">Learn It</a></button>-->
				<button type="button" class="btn btn-danger" ><a href="#" style="color:black;">Not yet</a></button>
				</div>
			</div>
		</div>
		*/
		?>
				  
				  
	
         
        </div>
      </div>
    </div>
<?php
		@include_once("./include/footer.php");
	?>
</body>
</html>