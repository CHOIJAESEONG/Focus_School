
<?php
	include_once("../../include/header.php");
	
?>

<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>


	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel="shortcut icon" type="image/x-icon" href="../../img/uwp/favicon.ico">
    <title>Tiles examples :: Start Screen :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>

    <!--<link href="../css/metro-responsive.css" rel="stylesheet">-->

    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
	

<style>
	
	.navbar-brand img {
		max-width:initial !important;
		height:inherit !important;
	} 
	
	.image-button{
		overflow : hidden;
	}
	.tile-area .tile-area-title{
		top : 20px;
	}
	
	
	body{
		overflow-y: hidden;
	}

	.tile-area-controls {
		position: fixed;
		right: 40px;
		top: 40px;
	}

	.tile-group {
		left: 100px;
	}

	.tile, .tile-small, .tile-sqaure, .tile-wide, .tile-large, .tile-big, .tile-super {
		opacity: 0;
		-webkit-transform: scale(.8);
		transform: scale(.8);
	}

	#charmSettings .button {
		margin: 5px;
	}

	.schemeButtons {
		/*width: 300px;*/
	}

	@media screen and (max-width: 640px) {
		.tile-area {
			overflow-y: scroll;
		}
		.tile-area-controls {
			display: none;
		}
	}

	@media screen and (max-width: 320px) {
		.tile-area {
			overflow-y: scroll;
		}

		.tile-area-controls {
			display: none;
		}

	}
	<?php 
		if($is_ifr!=""){
			echo '';
		} 
		else{
			echo 'body{margin-top : 60px;}';
		}
	?>
	
	
</style>



<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/27/8/intl/ko_ALL/common.js"></script>
<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/27/8/intl/ko_ALL/util.js"></script>
<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/27/8/intl/ko_ALL/stats.js"></script>
<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttp%3A%2F%2Fmetroui.org.ua%2Ftemplates%2Fstart-screen.html&amp;callback=_xdc_._9kdabg&amp;token=52067"></script>





	<div data-role="charm" id="charmSearch" class="charm right-side" style="opacity: 1; display: none;">
		<h1 class="text-light">Search</h1>
		<hr class="thin">
		<br>
		<div class="input-control text full-size">
			<label>
				<span class="dropdown-toggle drop-marker-light">Anywhere</span>
				<ul class="d-menu" data-role="dropdown">
					<li><a onclick="setSearchPlace(this)">Anywhere</a></li>
					<li><a onclick="setSearchPlace(this)">Options</a></li>
					<li><a onclick="setSearchPlace(this)">Files</a></li>
					<li><a onclick="setSearchPlace(this)">Internet</a></li>
				</ul>
			</label>
			<input type="text">
			<button class="button"><span class="mif-search"></span></button>
		</div>
	<span class="charm-closer"></span></div>

	<div data-role="charm" id="charmSettings" data-position="top" class="charm top-side" style="opacity: 1; display: none;">
		<h1 class="text-light">Settings</h1>
		<hr class="thin">
		<br>
		<div class="schemeButtons">
			<div class="button square-button tile-area-scheme-dark" data-scheme="dark"></div>
			<div class="button square-button tile-area-scheme-darkBrown" data-scheme="darkBrown"></div>
			<div class="button square-button tile-area-scheme-darkCrimson" data-scheme="darkCrimson"></div>
			<div class="button square-button tile-area-scheme-darkViolet" data-scheme="darkViolet"></div>
			<div class="button square-button tile-area-scheme-darkMagenta" data-scheme="darkMagenta"></div>
			<div class="button square-button tile-area-scheme-darkCyan" data-scheme="darkCyan"></div>
			<div class="button square-button tile-area-scheme-darkCobalt" data-scheme="darkCobalt"></div>
			<div class="button square-button tile-area-scheme-darkTeal" data-scheme="darkTeal"></div>
			<div class="button square-button tile-area-scheme-darkEmerald" data-scheme="darkEmerald"></div>
			<div class="button square-button tile-area-scheme-darkGreen" data-scheme="darkGreen"></div>
			<div class="button square-button tile-area-scheme-darkOrange" data-scheme="darkOrange"></div>
			<div class="button square-button tile-area-scheme-darkRed" data-scheme="darkRed"></div>
			<div class="button square-button tile-area-scheme-darkPink" data-scheme="darkPink"></div>
			<div class="button square-button tile-area-scheme-darkIndigo" data-scheme="darkIndigo"></div>
			<div class="button square-button tile-area-scheme-darkBlue" data-scheme="darkBlue"></div>
			<div class="button square-button tile-area-scheme-lightBlue" data-scheme="lightBlue"></div>
			<div class="button square-button tile-area-scheme-lightTeal" data-scheme="lightTeal"></div>
			<div class="button square-button tile-area-scheme-lightOlive" data-scheme="lightOlive"></div>
			<div class="button square-button tile-area-scheme-lightOrange" data-scheme="lightOrange"></div>
			<div class="button square-button tile-area-scheme-lightPink" data-scheme="lightPink"></div>
			<div class="button square-button tile-area-scheme-grayed" data-scheme="grayed"></div>
		</div>
	<span class="charm-closer"></span></div>

	<div class="tile-area fg-white tile-area-scheme-dark" style="height: 100%; max-height: 100% !important; width: 1920px;">
		<div ></div>
		
		<h1 class="tile-area-title" style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'top:80px;';} ?>">Start</h1>
		<div class="tile-area-controls" style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'top:100px;';} ?>">
			<button class="image-button icon-right bg-transparent fg-white bg-hover-dark no-border"><span class="sub-header no-margin text-light">Sergey Pimenov</span> <span class="icon mif-user"></span></button>
			<button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showCharms('#charmSearch')"><span class="mif-search"></span></button>
			<button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showCharms('#charmSettings')"><span class="mif-cog"></span></button>
			<a href="../tiles.html" class="square-button bg-transparent fg-white bg-hover-dark no-border"><span class="mif-switch"></span></a>
		</div>

		<div class="tile-group double" style="left: 0px;">
			<span class="tile-group-title">General</span>

			<div class="tile-container">

				<a href="http://calendar.google.com" class="tile bg-indigo fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-calendar"></span>
					</div>
					<span class="tile-label">Calendar</span>
				</a>

				<div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='http://gmail.com'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-envelop"></span>
					</div>
					<span class="tile-label">Inbox</span>
				</div>

				<div class="tile-large bg-steel fg-white" data-role="tile" data-on-click="document.location.href='http://forecast.io'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content" id="weather_bg" style="background: top left no-repeat; background-size: cover">
						<div class="padding10">
							<h1 id="weather_icon" style="font-size: 6em;position: absolute; top: 10px; right: 10px;"></h1>
							<h1 id="city_temp"></h1>
							<h2 id="city_name" class="text-light"></h2>
							<h4 id="city_weather"></h4>
							<p id="city_weather_daily"></p>

							<p class="no-margin text-shadow">Pressure: <span class="text-bold" id="pressure"></span> mm</p>
							<p class="no-margin text-shadow">Ozone: <span class="text-bold" id="ozone"></span></p>
							<p class="no-margin text-shadow">Wind bearing: <span class="text-bold" id="wind_bearing"></span></p>
							<p class="no-margin text-shadow">Wind speed: <span class="text-bold" id="wind_speed">0</span> m/s</p>
						</div>
					</div>
					<span class="tile-label">Weather</span>
				</div>
			</div>
		</div>

		<div class="tile-group double" style="left: 0px;">
			<span class="tile-group-title">Images</span>
			<div class="tile-container">
				<div class="tile-wide" data-role="tile" data-effect="slideLeft" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						<a href="http://google.com/search?q=bear" class="live-slide" style="left: -310px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/1.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></a>
						<a href="http://google.com/search?q=cat" class="live-slide" style="left: -310px; display: inline;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></a>
						<a href="http://google.com/search?q=dog" class="live-slide" style="left: 0px; display: inline;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/3.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></a>
						<a href="http://google.com/search?q=eagle" class="live-slide"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/4.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></a>
						<a href="http://google.com/search?q=fox" class="live-slide"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/5.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></a>
					</div>
					<div class="tile-label">Gallery</div>
				</div>
				<div class="tile" data-role="tile" data-effect="slideUpDown" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						<div class="live-slide" style="top: 0px;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/me.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
						<div class="live-slide" style="top: -150px; display: block;"><div class="image-container image-format-fill" style="width: 100%; height: 100%;"><div class="frame"><div style="width: 100%; height: 100%; background-image: url(&quot;../../img/uwp/spface.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
					</div>
					<div class="tile-label">Photos</div>
				</div>
				<div class="tile-small bg-amber fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-video-camera"></span>
					</div>
				</div>
				<div class="tile-small bg-green fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-gamepad"></span>
					</div>
				</div>
				<div class="tile-small bg-pink fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-headphones"></span>
					</div>
				</div>
				<div class="tile-small bg-yellow fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-lock"></span>
					</div>
				</div>

				<div class="tile-wide bg-orange fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content image-set">
						<img src="../../img/uwp/jeki_chan.jpg">
						<img src="../../img/uwp/shvarcenegger.jpg">
						<img src="../../img/uwp/vin_d.jpg">
						<img src="../../img/uwp/jolie.jpg">
						<img src="../../img/uwp/jek_vorobey.jpg">
					</div>
				</div>

			</div>
		</div>

		<div class="tile-group one" style="left: 0px;">
			<span class="tile-group-title">Office</span>

			<div class="tile-small bg-blue" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
				<div class="tile-content iconic">
					<img src="../../img/uwp/outlook.png" class="icon">
				</div>
			</div>
			<div class="tile-small bg-darkBlue" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
				<div class="tile-content iconic">
					<img src="../../img/uwp/word.png" class="icon">
				</div>
			</div>
			<div class="tile-small bg-green" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
				<div class="tile-content iconic">
					<img src="../../img/uwp/excel.png" class="icon">
				</div>
			</div>
			<div class="tile-small bg-red" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
				<div class="tile-content iconic">
					<img src="../../img/uwp/access.png" class="icon">
				</div>
			</div>
			<div class="tile-small bg-orange" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
				<div class="tile-content iconic">
					<img src="../../img/uwp/powerpoint.png" class="icon">
				</div>
			</div>
		</div>

		<div class="tile-group double" style="left: 0px;">
			<span class="tile-group-title">Games</span>
			<div class="tile-container">
				<div class="tile" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						
					<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 150px; background-image: url(&quot;../../img/uwp/grid2.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				</div>
				<div class="tile-small" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						
					<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 70px; background-image: url(&quot;../../img/uwp/Battlefield_4_Icon.png&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				</div>
				<div class="tile-small" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						
					<div class="image-container image-format-square" style="width: 100%;"><div class="frame bg-steel"><div style="width: 100%; height: 70px; background-image: url(&quot;../../img/uwp/Crysis-2-icon.png&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				</div>
				<div class="tile-small" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						
					<div class="image-container image-format-square" style="width: 100%;"><div class="frame bg-dark"><div style="width: 100%; height: 70px; background-image: url(&quot;../../img/uwp/WorldofTanks.png&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				</div>
				<div class="tile-small" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content">
						
					<div class="image-container image-format-square" style="width: 100%;"><div class="frame"><div style="width: 100%; height: 70px; background-image: url(&quot;../../img/uwp/halo.jpg&quot;); background-size: cover; background-repeat: no-repeat; border-radius: 0px;"></div></div></div></div>
				</div>
				<div class="tile-wide bg-green fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<img src="../../img/uwp/x-box.png" class="icon">
					</div>
					<div class="tile-label">X-Box Live</div>
				</div>
			</div>
		</div>

		<div class="tile-group double" style="left: 0px;">
			<span class="tile-group-title">Other</span>
			<div class="tile-container">
				<div class="tile bg-teal fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-pencil"></span>
					</div>
					<span class="tile-label">Editor</span>
				</div>
				<div class="tile bg-darkGreen fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-shopping-basket"></span>
					</div>
					<span class="tile-label">Store</span>
				</div>
				<div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-skype"></span>
					</div>
					<div class="tile-label">Skype</div>
				</div>
				<div class="tile bg-darkBlue fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
					<div class="tile-content iconic">
						<span class="icon mif-cloud"></span>
					</div>
					<span class="tile-label">OneDrive</span>
				</div>
			</div>
		</div>
	</div>

</body>
</html>