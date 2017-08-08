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
<div class="center">Prompt</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="prompt-ok">Prompt with text and Ok callback</a></p>
<p><a href="#" class="prompt-ok-cancel">Prompt with text, Ok and Cancel callbacks</a></p>
<p><a href="#" class="prompt-title-ok">Prompt with text, title and Ok callback</a></p>
<p><a href="#" class="prompt-title-ok-cancel">Prompt with text, title, Ok and Cancel callback</a></p>
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
      
      $$('.prompt-ok').on('click', function () {
          myApp.prompt('What is your name?', function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Ok button');
          });
      });
      
      $$('.prompt-ok-cancel').on('click', function () {
          myApp.prompt('What is your name?', 
            function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Ok button');
            },
            function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Cancel button');
            }
          );
      });
      $$('.prompt-title-ok').on('click', function () {
          myApp.prompt('What is your name?', 'Custom Title', function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Ok button');
          });
      });
      $$('.prompt-title-ok-cancel').on('click', function () {
          myApp.prompt('What is your name?', 'Custom Title', 
            function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Ok button');
            },
            function (value) {
              myApp.alert('Your name is "' + value + '". You clicked Cancel button');
            }
          );
      });
</script>
</body>
</html>