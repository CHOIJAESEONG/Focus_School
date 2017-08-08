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
<div class="center">Confirm</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="confirm-ok">Confirm with text and Ok callback</a></p>
<p><a href="#" class="confirm-ok-cancel">Confirm with text, Ok and Cancel callbacks</a></p>
<p><a href="#" class="confirm-title-ok">Confirm with text, title and Ok callback</a></p>
<p><a href="#" class="confirm-title-ok-cancel">Confirm with text, title, Ok and Cancel callback</a></p>
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
      
      $$('.confirm-ok').on('click', function () {
          myApp.confirm('Are you sure?', function () {
              myApp.alert('You clicked Ok button');
          });
      });
      
      $$('.confirm-ok-cancel').on('click', function () {
          myApp.confirm('Are you sure?', 
            function () {
              myApp.alert('You clicked Ok button');
            },
            function () {
              myApp.alert('You clicked Cancel button');
            }
          );
      });
      $$('.confirm-title-ok').on('click', function () {
          myApp.confirm('Are you sure?', 'Custom Title', function () {
              myApp.alert('You clicked Ok button');
          });
      });
      $$('.confirm-title-ok-cancel').on('click', function () {
          myApp.confirm('Are you sure?', 'Custom Title', 
            function () {
              myApp.alert('You clicked Ok button');
            },
            function () {
              myApp.alert('You clicked Cancel button');
            }
          );
      });
</script>
</body>
</html>