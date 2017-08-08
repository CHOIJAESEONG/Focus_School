<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.ios.min.css" rel="stylesheet">
	
<div class="views">
<div class="view view-main navbar-through toolbar-through">
<div class="navbar">
<div class="navbar-inner">
<div class="left"></div>
<div class="center sliding">Center</div>
<div class="right"> </div>
</div>
</div>
<div class="toolbar">
<div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a><a href="#" class="link">Link 3</a></div>
</div>
<div class="pages">
<div data-page="home" class="page">
<div class="page-content">
<div class="content-block">

<p>아이에게 책을 읽어주는 것은 언어의 세계에 첫발을 내딛게 해주는 것과 같다. 언어는 사람에게 있어 세상으로 통하는 길이므로, 일찍부터 그 길을 활짝 열어주면 아이의 미래는 달라진다.</p>
						<p>아이가 말 배우는 과정을 살펴보면 언어 훈련에서 듣기가 얼마나 중요한 역할을 하는지 분명히 알 수 있다. 아이들은 말을 전혀 하지 못하는 상태에 머물러 있다가 어느 순간 말문이 트이면 곧바로 놀라울 만큼 정확하게 자신의 의사를 표현한다. 말을 시작하기 전 이미 수많은 단어를 듣고 이해하며 외우고 있음을 보여주는 증거다. 일찍부터 좋은 이야기를 들으며 자란 아이는 풍부한 어휘와 세련된 표현을 알고 있기 때문에 언어 구사 능력이 한 차원 높아진다.</p>
						<p>아이에게 책을 읽어주는 것이 중요한 또 다른 이유는 일찍부터 책 읽는 습관을 길러줄 수 있기 때문이다. 재미있고 유익한 책 이야기를 꾸준히 들은 아이는 책을 ‘재미있는 것’이라고 생각하기 때문에 글을 익힌 뒤 스스로 찾아 읽게 된다.
							아이가 글씨를 익힌 뒤에도 책은 꾸준히 읽어주는 게 좋다. 희곡을 읽는 것과 연극을 보는 것이 전혀 다른 감동을 주는 것처럼, 자신이 직접 책을 읽는 것과 부모가 들려주는 이야기를 듣는 것은 완전히 다른 인상을 남기기 때문이다. 전문가들에 따르면 아이들은 중학생이 될 무렵까지 읽기보다 듣기에 편안함을 느낀다. 듣기를 통해서는 충분히 이해할 수 있는 내용도 읽기로는 이해하지 못할 수 있다는 뜻이다. 아이에게 책을 읽어주는 것은 언어능력과 상상력, 창의력, 이해력을 높여주고 독서의 즐거움까지 배우게 하는 가장 좋은 방법이다.</p>
						<p>시중에는 아이를 위한 연령대별 필독도서 목록이 많이 나와 있다. 그러나 이 목록이 모든 아이에게 딱 들어맞는 것은 아니다. 같은 나이라 해도 가정이나 학교에서의 경험, 친구 관계, 지적·정서적 훈련의 차이 등에 따라 개인차가 크기 때문이다. 필독도서 목록은 기준으로만 참고하고, 아이의 수준·흥미·기호 등을 종합적으로 고려해 적당한 책을 골라줘야 한다. 가장 좋은 방법은 어린이도서관에 가서 사서와 의논하는 것이다. 사서는 다양한 어린이책을 접할 뿐 아니라 전문적인 훈련을 받은 사람이므로, 아이의 상황을 정확히 설명한 뒤 책을 추천받으면 거의 실패하지 않는다.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>var myApp = new Framework7();</script>
<script>
      var myApp = new Framework7();
      var mainView = myApp.addView('.view-main', {
          dynamicNavbar: true
      });
</script>
</body>
</html>