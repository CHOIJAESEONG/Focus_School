<?php
	include_once("../../include/header.php");
	
?>
<style>
body{background:#ccc;}

.button {
  cursor:pointer;
  display:inline-block;
  background-color:#2962FF;
  margin:20px;
  padding:10px;
  font-family:Roboto;
  box-shadow:0px 2px 7px rgba(0,0,0,0.5);
  border-radius:3px;
  color:#fff;
}

#shade {
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  z-index:-1;
  background-color:rgba(0,0,0,0);
}

.center {
  width:100%;
  margin:auto 0;
}

#card, #card_confirm, #card_alert {
  opacity:0;
  background-color:#fff;
  position:fixed;
  z-index:3;
  width:50%;
  min-width:320px;
  height:0;
  -webkit-box-shadow:0px 1px 15px rgba(0,0,0,0.5);
  box-shadow:0px 1px 15px rgba(0,0,0,0.5);
  border-radius:100%;
  font-family:Roboto;
  transition:border-radius .5s, width .5s, height .5s;
  margin:0 auto;
  left:0px;
  right:0px;
  top:80px;
}

#card .maintext, #card_confirm .maintext , #card_alert .maintext{
  display:inline-block;
  margin:20px;
  margin-bottom:10px;
  font-weight:bold;
  font-size:30px;
}

#card .description,#card_confirm .description, #card_alert .description  {
  display:inline-block;
  margin-left:20px;
}

#card .opt,#card_confirm .opt,#card_alert .opt {
  float: right;
  display:inline-block;
  position:relative;
  text-transform:uppercase;
  margin:30px;
  margin-right:0px;
  cursor:pointer;
  padding:10px;
  font-weight:bold;
}

#card .opt:hover,#card_confirm .opt:hover,#card_alert .opt:hover {
  background-color:rgba(0,0,0,0.1);
}

#card .blue,#card_confirm .blue,#card_alert .blue {
  color:#2397f3;
}

#content {
  opacity:0;
  transition:opacity .5s .3s;
}

</style>

<div style="width:100%;position:absolute;top:50%;bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
<button type="button" class="btn btn-primary" onclick="confirm();" style="width:100px;height:50px;margin: 10px 0px;">Confirm</button>
<button type="button" class="btn btn-danger" onclick="alert();" style="width:100px;height:50px;margin: 10px 0px;">Alert</button>


</div>

<div class="center">
  <div id="card_confirm">
    <div id="content">
      <span class="maintext">Confirm Dialog</span>
      <br/>
	  <span class="description">This is Confirm dialog.</span>
	  <br/>
	  <span class="opt" onclick="hide(this);" style="margin-right:15px;margin-left:8px;">no</span>
      <span class="opt blue">yes</span>
      
    </div>  
  </div>
</div>

<div class="center">
  <div id="card_alert">
    <div id="content">
      <span class="maintext">Are you Sure?</span>
      <br/>
	  <span class="description">This is Alert dialog</span>
	  <br/>
	  <span class="opt" onclick="hide(this);" style="margin-right:15px;margin-left:8px;">OK</span>      
    </div>  
  </div>
</div>



<div id="shade"></div>

<script>
function confirm(){
  var s = document.getElementById("shade");
  var p = $("#card_confirm");
  var c = $("#card_confirm").find("#content");
  
  $(p).css("visibility", "visible");
  $(p).css("borderRadius", "3px");
  $(p).css("width", "50%");
  $(p).css("height", "170px");
  $(p).css("z-Index", "3");
  $(p).css("opacity", "1");
  $(c).css("opacity", "1");
  $(s).css("z-Index", "2");
  $(s).css("backgroundColor", "rgba(0,0,0,0.5)");
}

function alert(){
  var s = document.getElementById("shade");
  var p = $("#card_alert");
  var c = $("#card_alert").find("#content");
  
  $(p).css("visibility", "visible");
  $(p).css("borderRadius", "3px");
  $(p).css("width", "50%");
  $(p).css("height", "170px");
  $(p).css("z-Index", "3");
  $(p).css("opacity", "1");
  $(c).css("opacity", "1");
  $(s).css("z-Index", "2");
  $(s).css("backgroundColor", "rgba(0,0,0,0.5)");
}

function hide(obj){
  var s = document.getElementById("shade");
  var p = $(obj).parent().parent();
  var c = $(obj).parent();
  $(p).css("opacity", "0");
  $(p).css("borderRadius", "100%");
  $(p).css("width", "0");
  $(p).css("height", "0");
  $(p).css("z-Index", "-1");
  $(c).css("opacity", "0");
  $(s).css("z-Index", "-1");
  $(s).css("backgroundColor", "rgba(0,0,0,0)");
}
</script>

</body>
</html>