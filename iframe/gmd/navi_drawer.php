<?php
	include_once("../../include/header.php");
?>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic,300,300italic);
@import url(https://fonts.googleapis.com/icon?family=Material+Icons);
<?php
	if (isset($_REQUEST['is_ifr'])){$is_ifr = $_REQUEST['is_ifr'];}else{$is_ifr = '';}
	if($is_ifr==1) {echo ("body{padding-top:0px;}.nav{margin-top:0px !important;}");}
?>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  position: relative;
  font-family: 'Roboto';
  list-style-type: none;
  -webkit-tap-highlight-color: transparent;
}

/* THEME */
/* TYPOGRAPHY */
h1,
h2,
h3,
h4,
h5,
h6,
p {
  color: #3c3c3c;
  margin: 17px 30px;
  line-height: 1.5em;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Roboto Condensed";
}

/* NAVIGATION */
.nav {
  padding: 8.5px 7.5px;
  background: #E53935;
  margin-bottom: 30px;
  box-shadow: 0 0 10px 1px silver;
  margin-top:10px;
}

.nav_icon,
.nav_title {
  display: inline-block !important;
  padding: 10px;
  vertical-align: top;
  color: #fff;
}

.nav_icon {
  font-family: 'Material Icons';
  font-size: 21px;
  cursor: pointer;
  text-rendering: optimizeLegibility;
}

.nav_icon:not(.nav_main) {
  float: right;
}

.nav_down {
  color: #3c3c3c;
  width: 100%;
  font-size: 15px;
  padding: 15px;
  font-family: "Roboto";
}

.nav_drop {
  position: absolute;
  display: block;
  background: #fff;
  right: 12px;
  top: 15px;
  box-shadow: 0 1px 10px -1px gray;
  width: 200px;
  transition: all .1s;
  max-width: 80%;
  z-index: 90;
  -webkit-transform: scale(0);
  -webkit-transform-origin: 100% 0%;
}

.nav_drop.nav_dropDown {
  -webkit-transform: scale(1);
}

/* NAVIGATION DRAWER */
.drawer,
.drawer_cover {
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
}

.drawer {
  width: 300px;
  max-width: 90%;
  z-index: 100;
  background: white;
  padding: 15px 0px;
  left: -300px;
  transition: all 0.5s;
}

.drawer.drawer_in {
  left: 0;
  box-shadow: 0 0 30px -10px #000;
}

.drawer_cover {
  width: 100vw;
  z-index: 99;
  background: rgba(0, 0, 0, 0.4);
  cursor: pointer;
  display: none;
}

.drawer_item {
  padding: 14px 0;
  color: #3c3c3c;
  font-size: 15px;
  font-weight: 500;
  cursor: pointer;
  margin: 0;
  transition: color 0.8s;
}

.drawer_item:before {
  content: attr(data-icon);
  font-family: 'Material Icons';
  font-size: 22px;
  margin: -2px 23px 0 20px;
  display: inline-block;
  vertical-align: top;
  color: #6f6f6f;
  text-rendering: optimizeLegibility;
}

.drawer_item.drawer_itemActive,
.drawer_item.drawer_itemActive:before {
  color: #cd1e1a;
}

.drawer_title {
  color: #8c8c8c;
  margin: 25px 16px 25px;
  font-size: 16px;
}

.drawer_title:before {
  border-top: 1px solid silver;
  content: "";
  display: block;
  margin: 0 -16px 12px;
}

/* TABS */
.tab {
  background: #E53935;
  margin: -30px 0 30px;
  padding-left: 40px;
}

.tab_item {
  display: inline-block;
  padding: 15px 0 14px;
  margin-left: 12px;
  color: rgba(255, 255, 255, 0.7);
  font-size: 13px;
  text-transform: uppercase;
  cursor: pointer;
  width: 110px;
  text-align: center;
}

.tab_item.tab_itemActive {
  border-bottom: 2px solid rgba(255, 235, 226, 0.9);
  padding-bottom: 12px;
}

.ripple_effect {
  position: relative;
  overflow: hidden;
}

.ripple_effect .ripple_effector {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(-50%);
  background: grey;
  border-radius: 100%;
  z-index: 0;
  opacity: .5;
  width: 0;
  height: 0;
  min-width: 0;
  min-height: 0;
}

.ripple_effect .ripple_effector.ripple_effectOut {
  -webkit-animation: RippleEffect 1s;
}

@-webkit-keyframes RippleEffect {
  100% {
    width: 50vw;
    height: 50vw;
    min-width: 600px;
    min-height: 600px;
    opacity: 0;
  }
}
.ripple_effect .ripple_effectHolder {
  z-index: 1;
  position: relative;
}

</style>

<ul class="nav">
  <li class="nav_icon nav_main" data-icon="menu"></li>
  <li class="nav_title" style="margin-top:5px;">Home</li>
  <li class="nav_icon nav_down" data-nav="Settings" data-icon="settings"></li>
  <li class="nav_icon nav_downIfRoom" data-nav="Refresh" data-icon="refresh"></li>
  <li class="nav_icon" data-nav="Search" data-icon="search"></li>
</ul>

<ul class="tab">
  <li class="tab_item tab_itemActive">Item One</li>
  <li class="tab_item">Item Two</li>
  <li class="tab_item">Item Three</li>
</ul>

<ul class="drawer">
  <li class="drawer_item drawer_itemActive" data-icon="home">Home</li>
  <li class="drawer_item" data-icon="code">Examples</li>
  <li class="drawer_title">Subheader</li>
  <li class="drawer_item" data-icon="person">My Account</li>
  <li class="drawer_item" data-icon="question_answer">Help and Feedback</li>
</ul>

<h1>Lorem Ipsum</h1>
<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
	
	
<script>
function el(el) {
  return document.querySelectorAll(el);
}

function cl(el) {
  return document.getElementsByClassName(el);
}

// NAVIGATION DRAWER

function Drawer() {
  var drawers = cl('drawer');
  if (drawers.length > 0) {
    var drawerCover = document.createElement("div");
    drawerCover.className = 'drawer_cover';
    document.body.appendChild(drawerCover);
    cl('nav_main')[0].onclick = function() {
      drawers[0].classList.toggle('drawer_in');
      cl('drawer_cover')[0].style.display = 'block';
    };
    cl('drawer_cover')[0].onclick = function() {
      drawers[0].classList.toggle('drawer_in');
      cl('drawer_cover')[0].style.display = 'none';
    };
    var draweri = cl('drawer_item');
    for (var i = 0; i < draweri.length; i++) {
      draweri[i].classList.add('ripple_effect');
      draweri[i].addEventListener("click", function() {
        var drawerI = this;
        for (var i = 0; i < cl('drawer_item').length; i++) {
          cl('drawer_item')[i].classList.remove('drawer_itemActive')
        }
        drawerI.classList.add('drawer_itemActive');
        setTimeout(function() {
          drawerI.parentNode.classList.toggle('drawer_in');
          cl('drawer_cover')[0].style.display = 'none';
        }, 800);
      });
    }
  }
}

Drawer();

//NAVIGAION

function Navigation() {
  var navIcons = el('.nav_icon');
  for (var i = 0; i < navIcons.length; i++) {
    navIcons[i].innerHTML = navIcons[i].getAttribute("data-icon");
  }

  var navDowns = el('.nav_down, .nav_downIfRoom');
  if (navDowns.length !== 0) {
    var navDrop = document.createElement('div');
    navDrop.className = "nav_drop";
    var navMore = document.createElement('li');
    navMore.className = "nav_icon nav_more";
    navMore.innerHTML = "more_vert";
    for (i = 0; i < navDowns.length; i++) {
      var j = navDowns.length - i - 1;
      var navDown = navDowns[j].cloneNode(true);
      navDown.innerHTML = navDowns[j].getAttribute("data-nav");
      if (navDowns[j].classList.contains('nav_downIfRoom') === true) {
        navDown.classList.add('nav_down');
        navDowns[j].className = 'nav_icon nav_downIfRoomU';
      } else {
        navDowns[j].remove();
      }
      navDown.classList.add('ripple_effect');
      navDown.addEventListener("click", function() {
        setTimeout(function() {
          navDown.parentNode.classList.remove('nav_dropDown');
        }, 800)
      })
      navDrop.appendChild(navDown);
    }
    navDrop.onmouseleave = function() {
      this.classList.remove('nav_dropDown');
    };
    navMore.onclick = function() {
      navDrop.classList.add('nav_dropDown');
    };
    el('.nav')[0].appendChild(navDrop);
    el('.nav')[0].insertBefore(navMore, el('.nav')[0].childNodes[0]);
  }
}

Navigation();

window.onresize = document.body.onload = function() {
  var navIconsL = Number(el('.nav_icon:not(.nav_down)').length) * 40 + Number(el('.nav_title')[0].offsetWidth) + 15;
  var navDownIfRoomsU = el('.nav_downIfRoomU');
  if (navIconsL > document.body.offsetWidth - 50) {
    for (var i = 0; i < navDownIfRoomsU.length; i++) {
      navDownIfRoomsU[i].style.display = 'none';
      el('.nav_downIfRoom')[i].style.display = 'block';
    }
  } else {
    for (i = 0; i < navDownIfRoomsU.length; i++) {
      navDownIfRoomsU[i].style.display = 'inline-block';
      el('.nav_downIfRoom')[i].style.display = 'none';
    }
  }
  if (el('.nav_drop > :not([style*="display: none"])').length == 0) {
    el('.nav_more')[0].style.display = 'none';
  } else {
    el('.nav_more')[0].style.display = 'block';
  }
};

// EXTRAS

var ripple_effect = document.getElementsByClassName("ripple_effect");
for (var i = 0; i < ripple_effect.length; i++) {
  ripple_effect[i].innerHTML = '<div class="ripple_effector"></div><span class="ripple_effectHolder">' + ripple_effect[i].innerHTML + '</span>';
  ripple_effect[i].onclick = function(e) {
    var ripple = e.currentTarget.getElementsByClassName('ripple_effector')[0];
    ripple.style.top = (e.clientY - ripple.parentNode.getBoundingClientRect().top + document.documentElement.scrollTop) + 'px';
    ripple.style.left = (e.clientX - ripple.parentNode.getBoundingClientRect().left + document.documentElement.scrollLeft) + 'px';
    ripple.classList.add('ripple_effectOut');
    setTimeout(function() {
      ripple.classList.remove('ripple_effectOut');
      ripple.style.opacity = "0.5"
    }, 1000)
  }
}
var ripple_effector = document.getElementsByClassName("ripple_effector");
for (var i = 0; i < ripple_effector.length; i++) {
  ripple_effector[i].style.background = ripple_effector[i].parentNode.getAttribute('data-ripple-effect')
}
</script>
</body>
</html>