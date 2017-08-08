<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>
<style>
body{background:#ccc;}

#css_obj{width:150px;height:150px;background:#8e24aa;margin:15px auto;padding:65px 0px;color:white;transition:1s;-webkit-transition:1s;moz-transition:1s;}



.translate{
	-ms-transform: rotateX(90deg) translate3d(-178px, 0px, 0px) rotate3d(0, 1, 0, 180deg);
    -webkit-transform: rotateX(90deg) translate3d(-178px, 0px, 0px) rotate3d(0, 1, 0, 180deg);
    transform: rotateX(90deg) translate3d(-178px, 0px, 0px) rotate3d(0, 1, 0, 180deg);
	-webkit-animation-name: rightwingani;
	-webkit-animation-duration: 0.2s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	-moz-animation-name: rightwingani;
	-moz-animation-duration: 0.2s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: linear;
	-ms-animation-name: rightwingani;
	-ms-animation-duration: 0.2s;
	-ms-animation-iteration-count: infinite;
	-ms-animation-timing-function: linear;
	animation-name: rightwingani;
	animation-duration: 0.2s;
	animation-timing-function: linear;
}
.translate_back{
	-ms-transform: rotateX(0) translate3d(0px, 0px, 0px) rotate3d(0, 1, 0, 0);
    -webkit-transform: rotateX(0) translate3d(0px, 0px, 0px) rotate3d(0, 1, 0, 0);
    transform: rotateX(0) translate3d(0px, 0px, 0px) rotate3d(0, 1, 0, 0);
	-webkit-animation-name: rightwingani;
	-webkit-animation-duration: 0.2s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	-moz-animation-name: rightwingani;
	-moz-animation-duration: 0.2s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: linear;
	-ms-animation-name: rightwingani;
	-ms-animation-duration: 0.2s;
	-ms-animation-iteration-count: infinite;
	-ms-animation-timing-function: linear;
	animation-name: rightwingani;
	animation-duration: 0.2s;
	animation-timing-function: linear;
}


</style>

<div style="width:100%;position:absolute;<?php if($is_ifr=="1") {echo "top:0px;";} else {echo "top:80px;";}?>bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
	<button type="button" class="btn btn-primary" onclick="translate_3d();" style="width:100px;height:50px;margin: 10px 0px;">3D</button>

	<div id="css_obj" style="">
	Please Click Button
	</div>
</div>


<script>
var tra_flag = false;

function translate_3d(){
	$("#css_obj").removeAttr('class');
	if(tra_flag){
		$("#css_obj").addClass('translate_back');
		tra_flag = false;
	}else{
		$("#css_obj").addClass('translate');
		tra_flag = true;
	}
	
}

</script>


</body>
</html>