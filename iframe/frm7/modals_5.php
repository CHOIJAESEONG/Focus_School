<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.ios.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.ios.colors.min.css" rel="stylesheet">
<div class="views">
<div class="view view-main">
<div class="pages">
<div data-page="home" class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Preloader Modal</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="open-preloader">Open Preloader</a></p>
<p><a href="#" class="open-preloader-title">Open Preloader with custom title</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<script>
      var myApp = new Framework7();
      
      var $$ = Dom7;
      
      $$('.open-preloader').on('click', function () {
          myApp.showPreloader();
          setTimeout(function () {
              myApp.hidePreloader();
          }, 2000);
      });
      $$('.open-preloader-title').on('click', function () {
          myApp.showPreloader('Custom Title')
          setTimeout(function () {
              myApp.hidePreloader();
          }, 2000);
      });
</script>
</body>
</html>