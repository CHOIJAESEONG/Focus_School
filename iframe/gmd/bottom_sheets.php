<?php
	include_once("../../include/header.php");
	
?>
<style>
body{background:#ccc;}
#btn_next_article_tit h3 { position:relative; height:17px; line-height:17px; margin-left:10px;padding-left:14px; text-align:left; background:url(http://www.focus.kr/images/av_re-article_tit-deco.gif) no-repeat 0 2px; font-size:16px; color:#333; margin-bottom:9px; }
#btn_next_article_tit 
{
	box-shadow: 5px 5px 5px #888888;          /* Firefox 4.0+, Opera, IE 9 */
  -webkit-box-shadow: 5px 5px 5px #888888;    /* Chrome and Safari         */
  -moz-box-shadow: 5px 5px 5px #888888;       /* Firefox 3.6               */
}
.fixed_next_article span
{
	//color:#217bc3;
	color:#d0112b;
	font-weight:bold;
	
}



.fixed_next_article.show {
    visibility: visible; /* Show the snackbar */

    -webkit-animation: fadein 0.5s;
    animation: fadein 0.5s;
}

.fixed_next_article.noshow {
    visibility: hidden !important; /* Show the snackbar */

   -webkit-animation: fadeout 0.5s;
    animation: fadeout 0.5s;

	
}

.fixed_next_article.expand {
   
	
}


/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: -50%; opacity: 0;} 
    to {bottom: 0; opacity: 1;}
}

@keyframes fadein {
    from {bottom: -50%; opacity: 0;} 
    to {bottom: 0; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 0; opacity: 1;} 
    to {bottom: -50%; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 0; opacity: 1;}
    to {bottom: -50%; opacity: 0;}
}

.fixed_next_article{
	  width:100% ;
	  left:0 ;
  } 
  
  
@media (min-width: 768px) {
  .fixed_next_article{
	  width:25% ;
	  left : inherit;
	  right: 0;
  } 
  

}


</style>

<div style="width:100%;height:100%;">
<button type="button" class="btn btn-primary" onclick="snackbar_show();" style="position:absolute;top:50%;bottom:0px;right:0px;left:0px;margin:0px auto;text-align:center;width:100px;height:50px;">Click</button>
</div>



<div class="fixed_next_article" style="position:fixed;bottom:0px; z-index: 100000;padding:3px 0px 0px 0px;text-align:center;visibility:hidden;height:50%;transition:0.6s cubic-bezier(0.4, 0, 0.2, 1);">
	
	<div id="btn_next_article_tit"  style="left:1px;padding:10px 2px;background-color:white;height:100%;">
	<h3>Modal Bottom Sheets</h3>
	<ul style="display:table;list-style:none;width:100%;align-items:center;height:100%;padding:0px;">
		
					
			<li  style="width:100%;height:100%;padding:30px;"><div style="color:#212121; font-size:13px; line-height:18px;padding:5px 2px 8px 5px; text-align:left; display;block;overflow:hidden;background:#d0112b ;width:100%;height:100%;"></div></li>
	
			
		
		</ul>
	
	<div style="text-align:right;margin:5px;position:absolute;bottom:10px;right:0px;"><span class="more" onclick="snackbar_more();">더보기</span><span class="nomore" onclick="snackbar_nomore();" style="display:none;">내리기</span><span style="margin:10px;" onclick="snackbar_cancel();">취소</span></div>
	</div>
</div>

<script>
var snackbar_flag=true;
function snackbar_show(){

		$('.fixed_next_article').css('visibility', 'visible');
		$('.fixed_next_article').removeClass('noshow'); 
		$('.fixed_next_article').addClass('show'); 	
}

function snackbar_cancel(){
	$('.fixed_next_article').css('height','50%'); 
	$('.fixed_next_article').removeClass('show'); 
	$('.fixed_next_article').addClass('noshow'); 
	$('.more').css('display','-webkit-inline-box'); 
	$('.nomore').css('display','none'); 
		
	setTimeout(function(){ $('.fixed_next_article').css('display', 'none'); }, 480);
}
function snackbar_more(){
	$('.fixed_next_article').css('height','100%');  
	$('.nomore').css('display','-webkit-inline-box'); 
	$('.more').css('display','none'); 
	
}
function snackbar_nomore(){
	$('.fixed_next_article').css('height','50%');  
	$('.more').css('display','-webkit-inline-box'); 
	$('.nomore').css('display','none'); 
	
}
</script>

</body>
</html>