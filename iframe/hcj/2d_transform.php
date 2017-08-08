<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>
<style>
body{background:#ccc;}

#css_obj{width:150px;height:150px;background:#8e24aa;margin:15px auto;padding:65px 0px;color:white;transition:1s;-webkit-transition:1s;moz-transition:1s;}



.translate{
	-ms-transform: translate(100px, 100px); /* IE 9 */
    -webkit-transform: translate(100px, 100px); /* Safari */
    transform: translate(100px, 100px);
}
.translate_back{
	-ms-transform: translate(0, 0); /* IE 9 */
    -webkit-transform: translate(0, 0); /* Safari */
    transform: translate(0, 0);
}

.rotate{
	-ms-transform: rotate(360deg); /* IE 9 */
    -webkit-transform: rotate(360deg); /* Safari */
    transform: rotate(360deg);
}
.ratate_back{
	-ms-transform: rotate(0); /* IE 9 */
    -webkit-transform: rotate(0); /* Safari */
    transform: rotate(0);
}

.scale{
	-ms-transform: scale(0.5, 0.5); /* IE 9 */
    -webkit-transform: scale(0.5, 0.5); /* Safari */
    transform: scale(0.5, 0.5);
}
.scale_back{
	-ms-transform: scale(1, 1); /* IE 9 */
    -webkit-transform: scale(1, 1); /* Safari */
    transform: scale(1, 1);
}
.scew{
	-ms-transform: skew(20deg, 10deg); /* IE 9 */
    -webkit-transform: skew(20deg, 10deg); /* Safari */
    transform: skew(20deg, 10deg);
}
.scew_back{
	-ms-transform: skew(0, 0); /* IE 9 */
    -webkit-transform: skew(0, 0); /* Safari */
    transform: skew(0, 0);
}
.mat{
	-ms-transform: matrix(2, 1, 1, 2, 0, 200); /* IE 9 */
    -webkit-transform:  matrix(2,1, 1, 2, 0, 200); /* Safari */
    transform:  matrix(2, 1,1, 2, 0, 200);
}
.mat_back{
	-ms-transform: matrix(1, 0, 0, 1, 0, 0); /* IE 9 */
    -webkit-transform: matrix(1, 0, 1, 0, 0, 0); /* Safari */
    transform: matrix(1, 0, 0, 1, 0, 0);
}

</style>

<div style="width:100%;position:absolute;<?php if($is_ifr=="1") {echo "top:0px;";} else {echo "top:80px;";}?>bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
	<button type="button" class="btn btn-primary" onclick="translate_2d();" style="width:100px;height:50px;margin: 10px 0px;">Translate</button>
	<button type="button" class="btn btn-success" onclick="rotate_2d();" style="width:100px;height:50px;margin: 10px 0px;">Rotate</button>
	<button type="button" class="btn btn-info" onclick="scale_2d();" style="width:100px;height:50px;margin: 10px 0px;">Scale</button>
	<button type="button" class="btn btn-warning" onclick="skew_2d();" style="width:100px;height:50px;margin: 10px 0px;">Skew</button>
	<button type="button" class="btn btn-danger" onclick="metrix_2d();" style="width:100px;height:50px;margin: 10px 0px;">Metrix</button>

	<div id="css_obj" style="">
	Please Click Button
	</div>
</div>


<script>
var tra_flag = false;
var rot_flag = false;
var sca_flag = false;
var sce_flag = false;
var mat_flag = false;
function translate_2d(){
	$("#css_obj").removeAttr('class');
	if(tra_flag){
		$("#css_obj").addClass('translate_back');
		tra_flag = false;
	}else{
		$("#css_obj").addClass('translate');
		tra_flag = true;
	}
	
}

function rotate_2d(){
	$("#css_obj").removeAttr('class');
	if(rot_flag){
		$("#css_obj").addClass('rotate_back');
		rot_flag = false;
	}else{
		$("#css_obj").addClass('rotate');
		rot_flag = true;
	}
	
}
function scale_2d(){
	$("#css_obj").removeAttr('class');
	if(sca_flag){
		$("#css_obj").addClass('scale_back');
		sca_flag = false;
	}else{
		$("#css_obj").addClass('scale');
		sca_flag = true;
	}
	
}
function skew_2d(){
	$("#css_obj").removeAttr('class');
	if(sce_flag){
		$("#css_obj").addClass('scew_back');
		sce_flag = false;
	}else{
		$("#css_obj").addClass('scew');
		sce_flag = true;
	}
	
}

function metrix_2d(){
	$("#css_obj").removeAttr('class');
	if(mat_flag){
		$("#css_obj").addClass('mat_back');
		mat_flag = false;
	}else{
		$("#css_obj").addClass('mat');
		mat_flag = true;
	}
	
}
</script>


</body>
</html>