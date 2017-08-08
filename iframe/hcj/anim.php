<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
?>
<style>
body{background:#ccc;}

#css_obj{width:150px;height:150px;background:#8e24aa;margin:15px auto;padding:65px 0px;color:white;transition:1s;-webkit-transition:1s;moz-transition:1s;}



.translate{
    background-color: #8e24aa;
    position: relative;
    -webkit-animation-name: anim; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: 100; /* Safari 4.0 - 8.0 */
    animation-name: anim;
    animation-duration: 4s;
    animation-iteration-count: 100;
}
.translate_back{
	background-color: #8e24aa;
    position: relative;
}


/* Safari 4.0 - 8.0 */
@-webkit-keyframes anim {
    0%   {background-color:#8e24aa;; left:0px; top:0px;}
    25%  {background-color:yellow; left:-200px; top:0px;}
    50%  {background-color:blue; left:-100; top:200px;}
    75%  {background-color:green; left:200px; top:200px;}
    100% {background-color:#8e24aa;; left:0px; top:0px;}
}

/* Standard syntax */
@keyframes anim {
    0%   {background-color:#8e24aa;; left:0px; top:0px;}
    25%  {background-color:yellow; left:-200px; top:0px;}
    50%  {background-color:blue; left:-200px; top:200px;}
    75%  {background-color:green; left:200px; top:200px;}
    100% {background-color:#8e24aa;; left:0px; top:0px;}
}
</style>

<div style="width:100%;position:absolute;<?php if($is_ifr=="1") {echo "top:0px;";} else {echo "top:80px;";}?>bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;">
	<button type="button" class="btn btn-primary" onclick="translate_3d();" style="width:100px;height:50px;margin: 10px 0px;">Animation</button>

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