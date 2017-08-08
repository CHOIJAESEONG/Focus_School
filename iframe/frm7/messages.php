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
<div data-page="home" class="page navbar-fixed toolbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="left"> </div>
<div class="center">Messages</div>
<div class="right"> </div>
</div>
</div>
<div class="toolbar messagebar">
<div class="toolbar-inner">
<textarea placeholder="Message"></textarea><a href="#" class="link">Send</a>
</div>
</div>
<div class="page-content messages-content">
<div class="messages">
<div class="messages-date">Sunday, Feb 9 <span>12:58</span></div>
<div class="message message-sent">
<div class="message-text">Hello</div>
</div>
<div class="message message-sent">
<div class="message-text">How are you?</div>
</div>
<div class="message message-received">
<div class="message-name">Kate</div>
<div class="message-text">I am fine, thanks</div>
<div style="background-image:url(http://lorempixel.com/output/people-q-c-100-100-9.jpg)" class="message-avatar"></div>
</div>
<div class="messages-date">Sunday, Feb 3 <span>11:58</span></div>
<div class="message message-sent">
<div class="message-text">Nice photo?</div>
</div>
<div class="message message-sent">
<div class="message-text"><img src="http://lorempixel.com/300/300/"></div>
<div class="message-label">Delivered</div>
</div>
<div class="message message-received">
<div class="message-name">Kate</div>
<div class="message-text">Wow, awesome!</div>
<div style="background-image:url(http://lorempixel.com/output/people-q-c-100-100-9.jpg)" class="message-avatar"></div>
</div>
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
      
      var $$ = Dom7;
      
      // Conversation flag
      var conversationStarted = false;
      
      // Init Messages
      var myMessages = myApp.messages('.messages', {
        autoLayout:true
      });
      
      // Init Messagebar
      var myMessagebar = myApp.messagebar('.messagebar');
      
      // Handle message
      $$('.messagebar .link').on('click', function () {
        // Message text
        var messageText = myMessagebar.value().trim();
        // Exit if empy message
        if (messageText.length === 0) return;
        
        // Empty messagebar
        myMessagebar.clear()
        
        // Random message type
        var messageType = (['sent', 'received'])[Math.round(Math.random())];
      
        // Avatar and name for received message
        var avatar, name;
        if(messageType === 'received') {
          avatar = 'http://lorempixel.com/output/people-q-c-100-100-9.jpg';
          name = 'Kate';
        }
        // Add message
        myMessages.addMessage({
          // Message text
          text: messageText,
          // Random message type
          type: messageType,
          // Avatar and name:
          avatar: avatar,
          name: name,
          // Day
          day: !conversationStarted ? 'Today' : false,
          time: !conversationStarted ? (new Date()).getHours() + ':' + (new Date()).getMinutes() : false
        })
        
        // Update conversation flag
        conversationStarted = true;
      });    
    </script>
</body>
</html>