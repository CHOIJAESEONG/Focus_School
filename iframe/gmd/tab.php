<?php
	include_once("../../include/header.php");
	
?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  
<style>
body{background:#ccc;}
.tab {
  background-color: #2196f3;
  display: inline-block;
  position: relative;
  width:100%;
}
.tab__header {
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block;
  padding: 1em 0;
  text-align: center;
  transition: border-bottom .4s;
  width: 25%;
}
.tab__title, .tab__title--active {
  color: #bbdefb;
  font-family: 'Roboto';
  transition: color .4s;
}
.tab__title--active {
  color: #fff;
}
.tab__underline {
  background-color: #b2ff59;
  bottom: 0;
  height: 5px;
  left: 0;
  position: absolute;
  right: 0;
  transform: translateX(0%) scaleX(0.25);
  transform-origin: left center;
  transition: transform .4s;
  width: 100%;
  z-index: 10000;
}


</style>


<div class="tab">
	<div class="tab__header"><span class="tab__title">Address</span></div><!--
	--><div class="tab__header"><span class="tab__title">Contacts</span></div><!--
	--><div class="tab__header"><span class="tab__title">Notes</span></div><!--
	--><div class="tab__header"><span class="tab__title">Orders</span></div>
	<div class="tab__underline"></div>
</div>

<script>
$(document).ready(function() {
	$('.tab__header:first-child').find('.tab__title').attr('class', 'tab__title--active');	
});

var previousIndex = 0;

$('.tab__header').on('click', function(){
	var tabIndex = $(this).index('.tab__header');
	
	var tabLength = $('.tab .tab__header').length;
	var tabFinalIndex = tabLength - 1;
	var translateString = 'translateX('
	var scaleString = 'scaleX('

	var translateMathStart;
	
	if (previousIndex !== tabIndex) {
		
		if (tabIndex > previousIndex) {
			if (previousIndex === 0) {
				translateMathStart = 0;
				console.log('Translate Start: ' + translateMathStart);
			} else {
				translateMathStart = trimDecimal(previousIndex / tabLength);
				console.log('Translate Start: ' + translateMathStart);
			}
		} else if (tabIndex < previousIndex) {
			translateMathStart = trimDecimal(tabIndex / tabLength);
			console.log('Translate Start: ' + translateMathStart);
		} else if (tabIndex === 0) {
			translateMathStart = trimDecimal(tabIndex / tabLength);
			console.log('Translate Start: ' + translateMathStart);
		}
		
		var translateMathEnd = trimDecimal(tabIndex / tabLength);
		console.log('Translate End: ' + translateMathEnd);
		
		var scaleMathStart = (1 / tabLength) * (Math.abs((tabIndex - previousIndex)) + 1);
		console.log('Scale Start:' + scaleMathStart);

		var scaleMathEnd = 1 / tabLength;
		console.log('Scale End:' + scaleMathEnd);
		
		var styleStringStart = 'transform: ' + translateString + translateMathStart + '%) ' + scaleString + scaleMathStart + ')';
		var styleStringEnd = 'transform: ' + translateString + translateMathEnd + '%) ' + scaleString + scaleMathEnd + ')';
		
		$('.tab__underline').attr('style', styleStringStart);
		//$('.tab__underline').attr('style', styleStringEnd);
		
		window.setTimeout(function() {
			$('.tab__underline').attr('style', styleStringEnd);
		}, 100);
		
		$('.tab__title--active').attr('class', 'tab__title');
		$(this).find('.tab__title').attr('class', 'tab__title--active');
		
		previousIndex = tabIndex;
	}
	
});

function trimDecimal(number) {
	number = +number.toFixed(2);
	
	if(number.toString().length > 2) {
		number = number.toString().slice(2, 4);
	}
	
	if(number.toString().length === 1 && number.toString() !== "0") {
		number = number.toString().concat("0");
	}
	
	return number;
}

</script>


</body>
</html>