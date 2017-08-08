<?php
	include_once("../../include/header.php");
	
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://i.icomoon.io/public/temp/a876d150d5/UntitledProject/style.css">	  
<style>
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}
.card {
  width: 425px;
  margin: 0 auto;
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  margin-top: 5em;
  margin-bottom: 3em;
}

@media (max-width: 768px) {
  .card{
	   width: 80%;
  }
}


.card .cardContent {
  position: relative;
  padding: 5%;
  padding-top: 15%;
  margin-top: -10%;
  padding-bottom: 8%;
  overflow: hidden;
}
.card .cardContent .titleSocial {
  opacity: 0;
  z-index: 1;
  position: absolute;
  top: 30%;
  color: white;
  width: 70%;
  right: 0;
  left: 0;
  text-align: center;
  margin: 0 auto;
  margin-top: 0.5em;
  -webkit-transition: z-index 0s 0.3s, opacity 0 0.3s;
  -moz-transition: z-index 0s 0.3s, opacity 0 0.3s;
  -ms-transition: z-index 0s 0.3s, opacity 0 0.3s;
  -o-transition: z-index 0s 0.3s, opacity 0 0.3s;
  transition: z-index 0s 0.3s, opacity 0 0.3s;
}
.card .cardContent .titleSocial.is-active {
  opacity: 1;
  z-index: 4;
}
.card .cardContent .menuSocial {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  width: 75%;
  left: 0%;
  top: 60%;
  z-index: 1;
  right: 0;
  margin: 0 auto;
  -webkit-transition: z-index 0s 0.3s;
  -moz-transition: z-index 0s 0.3s;
  -ms-transition: z-index 0s 0.3s;
  -o-transition: z-index 0s 0.3s;
  transition: z-index 0s 0.3s;
}
.card .cardContent .menuSocial .menuSocialItem {
  display: inline-block;
  font-size: 30px;
  width: 25%;
  text-align: center;
  opacity: 0;
  z-index: 1;
  color: white;
  -webkit-transition: opacity 0.25s 0.3s;
  -moz-transition: opacity 0.25s 0.3s;
  -ms-transition: opacity 0.25s 0.3s;
  -o-transition: opacity 0.25s 0.3s;
  transition: opacity 0.25s 0.3s;
}
.card .cardContent .menuSocial .menuSocialItem .menuSocialItemLink {
  color: white;
  text-decoration: none;
  text-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}
.card .cardContent .menuSocial .menuSocialItem.is-active {
  opacity: 1;
}
.card .cardContent .menuSocial.is-active {
  z-index: 4;
}
.card .cardContent .cardContentButton {
  cursor: pointer;
  border: none;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  color: white;
  background-color: #673ab7;
  position: absolute;
  right: 4%;
  top: 5px;
  z-index: 3;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  -ms-transition-duration: 0.2s;
  transition-duration: 0.2s;
}
.card .cardContent .cardContentButton i {
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  -ms-transition-duration: 0.2s;
  transition-duration: 0.2s;
}
.card .cardContent .cardContentButton i.is-active {
  display: none;
}
.card .cardContent .cardContentButton.is-active {
  right: 30%;
  top: 40px;
  -webkit-animation: ejemplo 0.5s 0.2s forwards;
  -moz-animation: ejemplo 0.5s 0.2s forwards;
  -o-animation: ejemplo 0.5s 0.2s forwards;
  -ms-animation: ejemplo 0.5s 0.2s forwards;
  animation: ejemplo 0.5s 0.2s forwards;
}
.card .cardContent .cardContentName {
  color: #673ab7;
  font-size: 25px;
}
.card .cardContent .cardContentJob {
  color: #9575cd;
  font-size: 15px;
}
.card .cardContent p {
  margin: 0;
  z-index: 2;
}
.card .cardContent .cardContentButton:focus {
  outline: none;
}
.card .card_image {
  width: 100%;
  position: relative;
  margin-bottom: -1%;
  z-index: 2;
  -webkit-transition: z-index 0s 0.2s;
  -moz-transition: z-index 0s 0.2s;
  -ms-transition: z-index 0s 0.2s;
  -o-transition: z-index 0s 0.2s;
  transition: z-index 0s 0.2s;
}
.card .card_image i {
  position: absolute;
  top: 5%;
  left: 5%;
  color: white;
  font-size: 30px;
  cursor: pointer;
}
.card .card_image img {
  width: 100%;
}
.card .card_image.is-active {
  z-index: 4;
}
@-webkit-keyframes ejemplo {
  100% {
    -webkit-transform: scale(12);
    -moz-transform: scale(12);
    -ms-transform: scale(12);
    -o-transform: scale(12);
    transform: scale(12);
  }
}
@keyframes ejemplo {
  100% {
    -webkit-transform: scale(12);
    -moz-transform: scale(12);
    -ms-transform: scale(12);
    -o-transform: scale(12);
    transform: scale(12);
  }
}



</style>


<div class="card">
	<div class="card_image">
		<img src="https://images.unsplash.com/photo-1434493651957-4ec11beae249?q=80&fm=jpg&s=2a7fe1a34895ea3ef01079b58482287f" alt="" class="image">
		<i class="material-icons" onClick="favorite(this);">
		favorite_border</i>
	</div><div class="cardContent">
		<button class="cardContentButton" onClick="efect(this);"><i class="material-icons">share</i></button>
		<p class="cardContentName">An example of a blog title</p>
		<p class="cardContentJob">Juan Antonio Beato Quiñones</p>
		<div class="titleSocial">Follow me</div>
		<ul class="menuSocial">
			<li class="menuSocialItem"><a href="https://twitter.com/JuanBeatoPR" class="menuSocialItemLink icon-twitter"></a></li><li class="menuSocialItem"><a href="https://www.facebook.com/juanantonio.beatoquinones" class="menuSocialItemLink icon-facebook2"></a></li><li class="menuSocialItem"><a href="https://plus.google.com/u/0/+JuanAntonioBeatoQui%C3%B1ones/posts" class="menuSocialItemLink icon-google-plus2"></a></li><li class="menuSocialItem"><a href="https://es.linkedin.com/in/juanbeato" class="menuSocialItemLink icon-linkedin2"></a></li>
		</ul>
	</div>
</div>


<div class="card">
	<div class="card_image">
		<img src="https://images.unsplash.com/photo-1434493651957-4ec11beae249?q=80&fm=jpg&s=2a7fe1a34895ea3ef01079b58482287f" alt="" class="image">
		<i class="material-icons" onClick="favorite(this);">
		favorite_border</i>
	</div><div class="cardContent">
		<button class="cardContentButton" onClick="efect(this);"><i class="material-icons">share</i></button>
		<p class="cardContentName">An example of a blog title</p>
		<p class="cardContentJob">Juan Antonio Beato Quiñones</p>
		<div class="titleSocial">Follow me</div>
		<ul class="menuSocial">
			<li class="menuSocialItem"><a href="https://twitter.com/JuanBeatoPR" class="menuSocialItemLink icon-twitter"></a></li><li class="menuSocialItem"><a href="https://www.facebook.com/juanantonio.beatoquinones" class="menuSocialItemLink icon-facebook2"></a></li><li class="menuSocialItem"><a href="https://plus.google.com/u/0/+JuanAntonioBeatoQui%C3%B1ones/posts" class="menuSocialItemLink icon-google-plus2"></a></li><li class="menuSocialItem"><a href="https://es.linkedin.com/in/juanbeato" class="menuSocialItemLink icon-linkedin2"></a></li>
		</ul>
	</div>
</div>

<div class="card">
	<div class="card_image">
		<img src="https://images.unsplash.com/photo-1434493651957-4ec11beae249?q=80&fm=jpg&s=2a7fe1a34895ea3ef01079b58482287f" alt="" class="image">
		<i class="material-icons" onClick="favorite(this);">
		favorite_border</i>
	</div><div class="cardContent">
		<button class="cardContentButton" onClick="efect(this);"><i class="material-icons">share</i></button>
		<p class="cardContentName">An example of a blog title</p>
		<p class="cardContentJob">Juan Antonio Beato Quiñones</p>
		<div class="titleSocial">Follow me</div>
		<ul class="menuSocial">
			<li class="menuSocialItem"><a href="https://twitter.com/JuanBeatoPR" class="menuSocialItemLink icon-twitter"></a></li><li class="menuSocialItem"><a href="https://www.facebook.com/juanantonio.beatoquinones" class="menuSocialItemLink icon-facebook2"></a></li><li class="menuSocialItem"><a href="https://plus.google.com/u/0/+JuanAntonioBeatoQui%C3%B1ones/posts" class="menuSocialItemLink icon-google-plus2"></a></li><li class="menuSocialItem"><a href="https://es.linkedin.com/in/juanbeato" class="menuSocialItemLink icon-linkedin2"></a></li>
		</ul>
	</div>
</div>

<div class="card">
	<div class="card_image">
		<img src="https://images.unsplash.com/photo-1434493651957-4ec11beae249?q=80&fm=jpg&s=2a7fe1a34895ea3ef01079b58482287f" alt="" class="image">
		<i class="material-icons" onClick="favorite(this);">
		favorite_border</i>
	</div><div class="cardContent">
		<button class="cardContentButton" onClick="efect(this);"><i class="material-icons">share</i></button>
		<p class="cardContentName">An example of a blog title</p>
		<p class="cardContentJob">Juan Antonio Beato Quiñones</p>
		<div class="titleSocial">Follow me</div>
		<ul class="menuSocial">
			<li class="menuSocialItem"><a href="https://twitter.com/JuanBeatoPR" class="menuSocialItemLink icon-twitter"></a></li><li class="menuSocialItem"><a href="https://www.facebook.com/juanantonio.beatoquinones" class="menuSocialItemLink icon-facebook2"></a></li><li class="menuSocialItem"><a href="https://plus.google.com/u/0/+JuanAntonioBeatoQui%C3%B1ones/posts" class="menuSocialItemLink icon-google-plus2"></a></li><li class="menuSocialItem"><a href="https://es.linkedin.com/in/juanbeato" class="menuSocialItemLink icon-linkedin2"></a></li>
		</ul>
	</div>
</div>

<script>

change = false;

function favorite(objeto){
	if(!change){
		$(objeto).text("favorite");
		$(objeto).css({"color":"yellow"});
		change = true;
	}else{
		$(objeto).text("favorite_border");
		$(objeto).css({"color":"white"});
		change = false;
	}
	
}

function efect(objeto){
	$(objeto).addClass('is-active');
	$(objeto).parent().find('.card_image').addClass('is-active');
	$(objeto).find('i').addClass('is-active');
	$(objeto).parent().find('.menuSocial').addClass('is-active');
	$(objeto).parent().find('.menuSocialItem').addClass('is-active');
	$(objeto).parent().find('.titleSocial').addClass('is-active');
}

</script>


</body>
</html>