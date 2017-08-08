<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>


  
  
<style>
body{background:#ccc;}



</style>

<div style="width:100%;position:absolute;<?php if($is_ifr=="1") {echo "top:0px;";} else {echo "top:80px;";}?>bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
	<button type="button" class="btn btn-primary" onclick="prg(20);" style="width:100px;height:50px;margin: 10px 0px;">20%</button>
	<button type="button" class="btn btn-success" onclick="prg(40);" style="width:100px;height:50px;margin: 10px 0px;">40%</button>
	<button type="button" class="btn btn-info" onclick="prg(60);" style="width:100px;height:50px;margin: 10px 0px;">60%</button>
	<button type="button" class="btn btn-warning" onclick="prg(100);" style="width:100px;height:50px;margin: 10px 0px;">100%</button>

	
</div>

<div class="container" style="<?php if($is_ifr=="1") {echo "margin-top:90px;";} else {echo "margin-top:200px;";}?>">
  <div class="progress">
    <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
      40%
    </div>	
  </div>
  
  <div class="progress">
	<div class="progress-bar progress-bar-warning active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
      40%
    </div>		
  </div>
  
  <div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
      40%
    </div>
  </div>
  
  <div class="progress">
	<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
      40%
    </div>
  </div>
  
  
</div>



<script>
function prg(cnt){
	$(".progress-bar").css("width",cnt+"%");
	$(".progress-bar").html(cnt+"%");
}
</script>
</body>
</html>