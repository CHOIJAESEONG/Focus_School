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
<div class="center">Login and Password</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="login-modal">Login Modal</a></p>
<p><a href="#" class="password-modal">Password Modal</a></p>
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
      
      $$('.login-modal').on('click', function () {
          myApp.modalLogin('Authentication required', function (username, password) {
              myApp.alert('Thank you! Username: ' + username + ', Password: ' + password);
          });
      });
      
      $$('.password-modal').on('click', function () {
          myApp.modalPassword('You password please:', function (password) {
              myApp.alert('Thank you! Your password is: ' + password);
          });
      });
</script>
</body>
</html>