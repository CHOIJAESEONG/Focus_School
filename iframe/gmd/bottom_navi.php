<?php
	include_once("../../include/header.php");
	
?>
<style>
body{
	margin: 0 auto;
	color:#373737;
	background:#f2f2f2;
	font-family: sans-serif;
	max-width: 480px;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

input[name="menu"]{display:none}

.list{
	width:100%;
	height: 100px;
	overflow:hidden;
	background:#444;
	position:relative;
}
.list .link-wrap{
	width:100%;
	height:100%;
	display:table;
}

.list .link-wrap>label{
	color:#fff;
	z-index:999;
	min-width: 80px;
	max-width: 168px;
	width: 25%;
	cursor:pointer;
	padding:4px 12px;
	text-align:center;
	position:relative;
	display:table-cell;
	vertical-align:middle;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.list .link-wrap>label>i,
.list .link-wrap>label>span{
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.list .link-wrap>label>span{
	height:0;
	display:block;
	font-weight:500;
	-webkit-transform:translateY(45px);
	        transform:translateY(45px);
}
.list .overlay{
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height: 56px;
	display:table;
	position:absolute;
}
.list .overlay>span{
	width:1%;
	position:relative;
	display:table-cell;
}
.list .overlay>span:after{
	top:50%;
	left:50%;
	content:'';
	width: 20%;
	height: 24px;
	margin-top:-10px;
	margin-left:-10px;
	border-radius:50%;
	position:absolute;
	background-color:#fff;
	-webkit-transform:scale(0);
	transform:scale(0);
	-webkit-transition:all .4s ease-in-out 0s;
	transition:all .4s ease-in-out 0s;
}
#recent:checked ~ .list label[for="recent"]>span,
#music:checked ~ .list label[for="music"]>span,
#games:checked ~ .list label[for="games"]>span,
#books:checked ~ .list label[for="books"]>span{-webkit-transform:translateY(0);transform:translateY(0);height:auto;}

#recent:checked + input + input + input + .list .overlay .overlay-recent:after,
#music:checked + input + input + .list .overlay .overlay-music:after,
#books:checked + input + .list .overlay .overlay-books:after,
#games:checked + .list .overlay .overlay-games:after{
	z-index:1;
	-webkit-animation:active .4s linear forwards;
	        animation:active .4s linear forwards;
}
.list .overlay .overlay-recent:after,
#recent:checked ~ .list .overlay .overlay-recent:after{
	background-color:#546e7a;
}
.list .overlay .overlay-music:after,
#music:checked ~ .list .overlay .overlay-music:after{
	background-color:#00796b;
}
.list .overlay .overlay-books:after,
#books:checked ~ .list .overlay .overlay-books:after{
	background-color:#8d6e63;
}
.list .overlay .overlay-games:after,
#games:checked ~ .list .overlay .overlay-games:after{
	background-color:#6d4c41;
}
@-webkit-keyframes active{
	from{-webkit-transform:scale(0);transform:scale(0)}
	to{-webkit-transform:scale(40);transform:scale(40)}
}
@keyframes active{
	from{-webkit-transform:scale(0);transform:scale(0)}
	to{-webkit-transform:scale(40);transform:scale(40)}
}
</style>

<nav class="menu" style="position:absolute;bottom:0px;left:0px;right:0px;">
		<input type="radio" name="menu" id="recent">
		<input type="radio" name="menu" id="music" checked>
		<input type="radio" name="menu" id="books">
		<input type="radio" name="menu" id="games">
		<div class="list">
			<div class="overlay">
				<span class="overlay-recent"></span>
				<span class="overlay-music"></span>
				<span class="overlay-books"></span>
				<span class="overlay-games"></span>
			</div>
			<div class="link-wrap">
				<label for="recent">
					<i class="material-icons">Item 1</i>
					<span>연예</span>
				</label>
				<label for="music">
					<i class="material-icons">Item 2</i>
					<span>스포츠</span>
				</label>
				<label for="books">
					<i class="material-icons">Item 3</i>
					<span>포토</span>
				</label>
				<label for="games">
					<i class="material-icons">Item 4</i>
					<span>영상</span>
				</label>
			</div>
		</div>
	</nav>
	
</body>
</html>