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
<div class="center">Action Sheet</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="ac-1">One group, three buttons</a></p>
<p><a href="#" class="ac-2">One group, title, three buttons</a></p>
<p><a href="#" class="ac-3">Two groups</a></p>
<p><a href="#" class="ac-4">Three groups</a></p>
<p><a href="#" class="ac-5">With callbacks on click</a></p>
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
      
      //- One group, three buttons
      $$('.ac-1').on('click', function () {
          var buttons = [
              {
                  text: 'Button1',
                  bold: true
              },
              {
                  text: 'Button2'
              },
              {
                  text: 'Cancel',
                  color: 'red'
              },
          ];
          myApp.actions(buttons);
      });
      
      //- One group, title, three buttons
      $$('.ac-2').on('click', function () {
          var buttons = [
              {
                  text: 'Do something',
                  label: true
              },
              {
                  text: 'Button1',
                  bold: true
              },
              {
                  text: 'Button2',
              },
              {
                  text: 'Cancel',
                  color: 'red'
              },
          ];
          myApp.actions(buttons);
      });
      
      //- Two groups
      $$('.ac-3').on('click', function () {
          var buttons1 = [
              {
                  text: 'Do something',
                  label: true
              },
              {
                  text: 'Button1',
                  bold: true
              },
              {
                  text: 'Button2',
              }
          ];
          var buttons2 = [
              {
                  text: 'Cancel',
                  color: 'red'
              }
          ];
          var groups = [buttons1, buttons2];
          myApp.actions(groups);
      });
      
      //- Three groups
      $$('.ac-4').on('click', function () {
          var buttons1 = [
              {
                  text: 'Share',
                  label: true
              },
              {
                  text: 'Mail',
              },
              {
                  text: 'Messages',
              }
          ];
          var buttons2 = [
              {
                  text: 'Social share',
                  label: true
              },
              {
                  text: 'Facebook',
              },
              {
                  text: 'Twitter',
              }
          ];
          var buttons3 = [
              {
                  text: 'Cancel',
                  color: 'red'
              }
          ];
          var groups = [buttons1, buttons2, buttons3];
          myApp.actions(groups);
      });
      
      //- With callbacks on click
      $$('.ac-5').on('click', function () {
          var buttons = [
              {
                  text: 'Button1',
                  onClick: function () {
                      myApp.alert('Button1 clicked')
                  }
              },
              {
                  text: 'Button2',
                  onClick: function () {
                      myApp.alert('Button2 clicked')
                  }
              },
              {
                  text: 'Cancel',
                  color: 'red',
                  onClick: function () {
                      myApp.alert('Cancel clicked')
                  }
              },
          ];
          myApp.actions(buttons);
      });
</script>
</body>
</html>