<?php
	include_once("../../include/header.php");
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	
	
	echo "
		<style>.views{padding-bottom:50px;}</style>
	";
?>

<script src="<?=WEBPATH?>js/frm7.min.js"></script>
<link href="<?=WEBPATH?>css/frm7.material.min.css" rel="stylesheet">
<link href="<?=WEBPATH?>css/frm7.material.colors.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=WEBPATH?>css/frm7-icons.css">
<style>i.demo-icon-email{width:24px;height:24px;background-image:url("data:image/svg+xml;charset=utf-8,<svg fill='#fff' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");}i.demo-icon-calendar{width:24px;height:24px;background-image:url("data:image/svg+xml;charset=utf-8,<svg fill='#fff' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");}i.demo-icon-upload{width:24px;height:24px;background-image:url("data:image/svg+xml;charset=utf-8,<svg fill='#FFFFFF' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'/><path d='M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z'/></svg>");}</style>
<div class="views">
<div class="view view-main">
<div class="pages">
<div class="page navbar-fixed">
<div class="navbar">
<div class="navbar-inner">
<div class="center">FAB Speed Dial</div>
</div>
</div>
<div class="speed-dial"><a href="#" class="floating-button"><i class="icon icon-plus"></i><i class="icon icon-close"></i></a>
<div class="speed-dial-buttons"><a href="#"><i class="icon demo-icon-email"></i></a><a href="#"><i class="icon demo-icon-calendar"></i></a><a href="#"><i class="icon demo-icon-upload"></i></a></div>
</div>
<div class="page-content">
<div class="content-block">
<p>톨킨은 1937년 발간된 소설 <호빗>[5]이 영국에서 큰 흥행을 거두면서, 출판사로부터 후속편에 대한 압박을 받게 된다. 특히 소설 호빗이 베스트셀러가 될 것이 분명해진 앨런 앤 언윈 사의 대표 스탠리 언윈은 호빗 출판 몇 주 뒤(같은 해 10월 11일)에 호빗의 후속작에 대해 톨킨과 의논하기까지 했다. 그러나 톨킨은 사실 호빗은 지나가는 동화에 가깝다고 생각했다. 실제로 <호빗>의 문체는 무척 가벼우며, 대상 연령대도 더 낮다. 당시에 톨킨은 그보다는 자신의 평생의 소망인 실마릴리온의 출판을 고대하고 있었다. 톨킨은, <호빗> 후속작을 바라는 출판사에게 이전에 만들어놓은 동화들, 예컨대 블리스씨나 로버랜덤 같은 것을 미끼로 던져주고 후속작은 신경쓰지 않을 심산이었다.[6]후속작을 고대하던 언윈이 받은 것은 매우 길고 어렵기 짝이 없는 <실마릴리온> 원고였다. 사실 이 원고는 언윈도 잘 알고 있는 원고였지만, 언윈 측에서나 톨킨 측에서나 <호빗>의 후속작으로는 어림없는 것이란 걸 잘 알고 있었다. 어머니들이 실마릴리온을 잠자리에서 아이들에게 읽어줄 거라 기대할 수는 없기 때문이다. 결국 톨킨은 (별 생각 없이) 후속작의 첫 장을 써내려가기 시작했다.</p>
<p>결말도, 과정도, 주인공에 대한 세밀한 검토 없이 후속작에 대한 첫 문단이 써내려져가기 시작했다. 그때 정해진 첫 단원의 제목이 '오랫동안 기다려온 파티(A long expected party)'였는데, 이는 호빗의 첫 단원 제목인 '뜻밖의 파티(An unexpected party)'와 의도된 대조였다. 이미 소설 호빗에서 빌보는 죽을 때까지 행복해야 하며 오래 살았어야 하므로, 새로운 모험을 떠날 수 없었으며 이 때문에 새롭게 출격시킨 호빗이 소설에 등장하게 된다. 빌보에서 파생된 주인공이었기에 이름은 '빙고(Bingo)'였고, 우리가 잘 아는 바로 그 녀석이었다. 그리고는 소설 내용은 별다른 게 아니라 '반지 돌려주기'였다</p>
<p>그리고 구상한 게 "왜 돌려줘야 하고, 그 반지의 부작용은 왜 나타날 것이며, 왜 그냥 가지면 안 되는 걸까?" 같은 것들이었다. 그러다 호빗에 슬며시 언급되었던 강령술사가 떠오르기 시작하면서 이야기는 톨킨의 머리 속에서 차차 장대해져갔다. 톨킨 스스로 '통제 불가능'한 이야기 흐름이 있었던 것이다. 실제로 <반지의 제왕> 제 1권(Book 1)의 초반부는 상당히 가벼운 문체인 반면에, 뒤로 가면 갈수록 급격하게 어두워져 가며 나중에는 동화 같은 느낌을 거의 받을 수 없게 된다. 일례로, 톨킨이 초반에 구상했던 반지악령은 요술반지를 너무 많이 써서 보이지 않게 되어버린 어떤 것들에 불과했다. 반지의 제왕 초반부에 나즈굴은 바닥을 기어다니며 킁킁거리는 다소 경박스러운 이미지로 묘사되는데 이때만 해도 <호빗>의 후속작으로서 가볍고 동화적인 느낌이 남아 있었던 셈이다. 이런 경박한 이미지는 후에 왕의 귀환에서 묘사되는 나즈굴의 위협적이고 고압적인 모습과는 상당한 차이를 보여주고 있다. 톨킨의 소설이 본격적으로 어둡고 진지해진 것은 톨킨의 머릿속에서 요술 반지의 의미가 제대로 잡혀가면서 원대한 프로도의 숙명이 그려질 때쯤이었고, 그때는 호빗들이 트로터라는 인물을 만났을 때쯤이었다. 그리고 그때에 이르러 톨킨은 <호빗>과 <반지의 제왕>을 온전히 그의 신화 속으로 던져넣고 싶어졌다. 그렇게 우여곡절 속에서 소설 <반지의 제왕>은 1954년 세상에 모습을 드러내게 되었다.</p>
<p>사실, 반지의 제왕이 출판되는 과정을 연대순으로 보면 부산하기 짝이 없다. 반지의 제왕 원고(초고) 완성은 1949년에 이미 끝나 있었다. 하지만 출판사와 톨킨의 <실마릴리온>을 걸고 만들어진 줄다리기와, 출판사(언윈)에서 <반지의 제왕>의 흥행을 의심하는 것이 겹치면서 1952년까지도 출판 관련으로 입씨름이 왔다갔다했다. 심지어 각 권(Book 1~6)의 제목이 무엇일지를 정하는 문제는 수 년 동안 해결되지 않았을 뿐만 아니라 출판이 목전에 있었던 1953년 7월까지 정해진 게 없었다. 심지어 '반지의 제왕'이라는 제목은 원래 첫 권(Book 1)의 제목으로 생각되었다가 1953년 8월이 되어서야 전체 제목이 되는 걸로 수정됐다. 그러다가 8월에는 출판사 측(언윈)에서 각 권의 제목은 쓰지 않고, 3권의 제목(Book 1~2/3~4/5~6)만 정하자고 제안했다. 그러나 출판사가 제안한 제목 중 톨킨의 마음에 드는 건 단 한 개도 없었다. 당시 제안된 제목은 '그림자의 귀환(The Return of the Shadow)', '그림자의 확장(The Shadow Lengthens)', '왕의 귀환(!)'이었다. 첫 권의 제목과 톨킨이 제안한 세 번 째 권 제목(반지전쟁) 모두 훗날 크리스토퍼 톨킨의 HoME 시리즈의 제목이 된다.</p>
<p>톨킨은 마지막 권(지금의 왕의 귀환) 제목은 반지전쟁(The War of the Ring)이 어떻겠냐고 제안했었지만, 왕의 귀환도 가능하다는 입장이었다. 다만 앞의 두 제목은 대안을 제시했는데 그것이 지금의 '반지 원정대'와 '두 개의 탑'이었다. '반지 원정대'는 해당 권의 마지막 챕터(The Breakup of the Fellowship)와 잘 맞기 때문이었고, 애초에 톨킨은 '두 개의 탑'에서 말하는 '두 탑'이 무슨 탑인지는 모호하게 놔두길 바랐다. 젠장 마지막 왕의 귀환은 의견 차이가 좀 있었지만 결국 모두 알 수 있듯이 왕의 귀환이 최종 낙찰됐다. 그러고도 그림 수정은 수도 없이 진행됐으며, 1954년 7월 29일이 되어서야 마침내 <반지 원정대>가 출판됐다.[7] 두 개의 탑은 같은 해 11월 11일에 출판됐다. 문제는 1955년 1월에도 톨킨은 왕의 귀환의 부록을 완성하지 못했다는 것이다. 그러다가 우여곡절 끝에 마침내 1955년 10월 20일 <왕의 귀환>이 세상에 알려지게 되었다.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
      var myApp = new Framework7({
        material: true
      });
    </script>
</body>
</html>