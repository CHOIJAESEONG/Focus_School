<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>


  
  
<style>
body{background:#ccc;}



</style>


<div style="width:100%;position:absolute;<?php if($is_ifr=="1") {echo "top:0px;";} else {echo "top:80px;";}?>bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="display:block;margin:10px auto;">Default Collpase</button>
	<div id="demo" class="collapse">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>

	
	<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapse1" style="display:block;margin:10px auto;">Panel Collpase</button>
	<div id="collapse1" class="panel-collapse collapse">
		<div class="panel-body" style="background:#3c3c3c;color:white;">Panel Body</div>
		<div class="panel-footer">Panel Footer</div>
    </div>
	
	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#collapse2" style="display:block;margin:10px auto;">List Collpase</button>
	<div id="collapse2" class="panel-collapse collapse">
		<ul class="list-group">
		  <li class="list-group-item">One</li>
		  <li class="list-group-item">Two</li>
		  <li class="list-group-item">Three</li>
		</ul>
	  </div>
	
	<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Accordion Collpase1</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Accordion Collpase2</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Accordion Collpase3</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
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