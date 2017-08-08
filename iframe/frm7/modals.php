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
<div class="center">Alert</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="alert-text">Alert With Text</a></p>
<p><a href="#" class="alert-text-title">Alert With Text and Title</a></p>
<p><a href="#" class="alert-text-title-callback">Alert With Text and Title and Callback</a></p>
<p><a href="#" class="alert-text-callback">Alert With Text and Callback</a></p>
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
      
      $$('.alert-text').on('click', function () {
          myApp.alert('Here goes alert text');
      });
      
      $$('.alert-text-title').on('click', function () {
          myApp.alert('Here goes alert text', 'Custom Title!');
      });
      
      $$('.alert-text-title-callback').on('click', function () {
          myApp.alert('Here goes alert text', 'Custom Title!', function () {
              myApp.alert('Button clicked!')
          });
      });
      
      $$('.alert-text-callback').on('click', function () {
          myApp.alert('Here goes alert text', function () {
              myApp.alert('Button clicked!')
          });
      });
</script>
</body>
</html>