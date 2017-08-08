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
<div class="pages navbar-fixed">
<div data-page="home" class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center sliding">Notifications</div>
<div class="right"> </div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p><a href="#" class="button notification-default">Default notification</a></p>
<p><a href="#" class="button notification-full">Full-layout notification</a></p>
<p><a href="#" class="button notification-custom">With custom image</a></p>
<p><a href="#" class="button notification-callback">With callback on close</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<style>#picker-date-container .picker-item{color:#999;}#picker-date-container .picker-selected{color:#000;}@media (max-width: 767px) {#picker-date-container .picker-items{font-size:21px;}#picker-date-container .picker-item{height:36px;line-height:36px;padding:0 6px;}}</style>
<script>
      var myApp = new Framework7(); 
      var mainView = myApp.addView('.view-main');
      
      var $$ = Dom7;
      
      $$('.notification-default').on('click', function () {
          myApp.addNotification({
              title: 'Framework7',
              message: 'This is a simple notification message with title and message'
          });
      });
      $$('.notification-full').on('click', function () {
          myApp.addNotification({
              title: 'Framework7',
              subtitle: 'Notification subtitle',
              message: 'This is a simple notification message with custom icon and subtitle',
              media: '<i class="icon icon-f7"></i>'
          });
      });
      $$('.notification-custom').on('click', function () {
          myApp.addNotification({
              title: 'My Awesome App',
              subtitle: 'New message from John Doe',
              message: 'Hello, how are you? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut posuere erat. Pellentesque id elementum urna, a aliquam ante. Donec vitae volutpat orci. Aliquam sed molestie risus, quis tincidunt dui.',
              media: '<img width="44" height="44" style="border-radius:100%" src="http://lorempixel.com/output/people-q-c-100-100-9.jpg">'
          });
      });
      $$('.notification-callback').on('click', function () {
          myApp.addNotification({
              title: 'My Awesome App',
              subtitle: 'New message from John Doe',
              message: 'Hello, how are you? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut posuere erat. Pellentesque id elementum urna, a aliquam ante. Donec vitae volutpat orci. Aliquam sed molestie risus, quis tincidunt dui.',
              media: '<img width="44" height="44" style="border-radius:100%" src="http://lorempixel.com/output/people-q-c-100-100-9.jpg">',
              onClose: function () {
                  myApp.alert('Notification closed');
              }
          });
      });
</script>
</body>
</html>