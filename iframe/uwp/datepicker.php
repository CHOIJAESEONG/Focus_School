<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
	.cell {width:250px; float:left; margin:10px; }
		@media (min-width: 768px) {
		.whole {
			width:25% ;
			left : inherit;
			right: 0;
		}
	} 
	.whole {
		width: 80%;
		margin: 0 auto;
	}
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="grid responsive">
		<div class="row cells4">
			<div class="cell">
				<h5>Default</h5>
				<div class="input-control text" data-role="datepicker">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Jan 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Preset day</h5>
				<div class="input-control text" data-role="datepicker" data-preset="2015-05-01">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">May 2015</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell align-center day selected"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day"><div><a href="#">16</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Any date formats</h5>
				<div class="input-control text" data-role="datepicker" data-date="1972-12-21" data-format="mmmm d, yyyy">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Jan 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Calendar controllable</h5>
				<div class="input-control text" data-role="datepicker" data-other-days="true" data-week-start="1" data-locale="ru">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Янв 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Пн</div></div><div class="calendar-cell align-center day-of-week"><div>Вт</div></div><div class="calendar-cell align-center day-of-week"><div>Ср</div></div><div class="calendar-cell align-center day-of-week"><div>Чт</div></div><div class="calendar-cell align-center day-of-week"><div>Пт</div></div><div class="calendar-cell align-center day-of-week"><div>Сб</div></div><div class="calendar-cell align-center day-of-week"><div>Вс</div></div></div><div class="calendar-row"><div class="calendar-cell empty"><div class="other-day">26</div></div><div class="calendar-cell empty"><div class="other-day">27</div></div><div class="calendar-cell empty"><div class="other-day">28</div></div><div class="calendar-cell empty"><div class="other-day">29</div></div><div class="calendar-cell empty"><div class="other-day">30</div></div><div class="calendar-cell empty"><div class="other-day">31</div></div><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day">1</div></div><div class="calendar-cell empty"><div class="other-day">2</div></div><div class="calendar-cell empty"><div class="other-day">3</div></div><div class="calendar-cell empty"><div class="other-day">4</div></div><div class="calendar-cell empty"><div class="other-day">5</div></div></div></div></div></div>
			</div>
		</div>
		<h4>Event binding</h4>
		<div class="row cells4">
			<div class="cell">
				<h5>Default</h5>
				<div class="input-control text" data-role="datepicker" data-on-select="alert(d +'\n'+ d0)">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Jan 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Preset day</h5>
				<div class="input-control text" data-role="datepicker" data-preset="2015-05-01">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">May 2015</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell align-center day selected"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day"><div><a href="#">16</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Any date formats</h5>
				<div class="input-control text" data-role="datepicker" data-date="1972-12-21" data-format="mmmm d, yyyy">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Jan 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Su</div></div><div class="calendar-cell align-center day-of-week"><div>Mo</div></div><div class="calendar-cell align-center day-of-week"><div>Tu</div></div><div class="calendar-cell align-center day-of-week"><div>We</div></div><div class="calendar-cell align-center day-of-week"><div>Th</div></div><div class="calendar-cell align-center day-of-week"><div>Fr</div></div><div class="calendar-cell align-center day-of-week"><div>Sa</div></div></div><div class="calendar-row"></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div><div class="calendar-cell empty"><div class="other-day" style="visibility: hidden;"></div></div></div></div></div></div>
			</div>
			<div class="cell">
				<h5>Calendar controllable</h5>
				<div class="input-control text" data-role="datepicker" data-scheme="darcula" data-other-days="true" data-week-start="1" data-locale="ru">
					<input type="text" readonly="readonly">
					<button class="button" type="button"><span class="mif-calendar"></span></button>
				<div class="calendar calendar-dropdown darcula" style="position: absolute; display: none; max-width: 220px; z-index: 1000; top: 100%; left: 0px;"><div class="calendar-grid"><div class="calendar-row no-margin calendar-header"><div class="calendar-cell align-center"><a class="btn-previous-year" href="#">-</a></div><div class="calendar-cell align-center"><a class="btn-previous-month" href="#">〈</a></div><div class="calendar-cell sel-month align-center"><a class="btn-select-month" href="#">Янв 2017</a></div><div class="calendar-cell align-center"><a class="btn-next-month" href="#">〉</a></div><div class="calendar-cell align-center"><a class="btn-next-year" href="#">+</a></div></div><div class="calendar-row week-days calendar-subheader"><div class="calendar-cell align-center day-of-week"><div>Пн</div></div><div class="calendar-cell align-center day-of-week"><div>Вт</div></div><div class="calendar-cell align-center day-of-week"><div>Ср</div></div><div class="calendar-cell align-center day-of-week"><div>Чт</div></div><div class="calendar-cell align-center day-of-week"><div>Пт</div></div><div class="calendar-cell align-center day-of-week"><div>Сб</div></div><div class="calendar-cell align-center day-of-week"><div>Вс</div></div></div><div class="calendar-row"><div class="calendar-cell empty"><div class="other-day">26</div></div><div class="calendar-cell empty"><div class="other-day">27</div></div><div class="calendar-cell empty"><div class="other-day">28</div></div><div class="calendar-cell empty"><div class="other-day">29</div></div><div class="calendar-cell empty"><div class="other-day">30</div></div><div class="calendar-cell empty"><div class="other-day">31</div></div><div class="calendar-cell align-center day"><div><a href="#">1</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">2</a></div></div><div class="calendar-cell align-center day"><div><a href="#">3</a></div></div><div class="calendar-cell align-center day"><div><a href="#">4</a></div></div><div class="calendar-cell align-center day"><div><a href="#">5</a></div></div><div class="calendar-cell align-center day"><div><a href="#">6</a></div></div><div class="calendar-cell align-center day"><div><a href="#">7</a></div></div><div class="calendar-cell align-center day"><div><a href="#">8</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">9</a></div></div><div class="calendar-cell align-center day"><div><a href="#">10</a></div></div><div class="calendar-cell align-center day"><div><a href="#">11</a></div></div><div class="calendar-cell align-center day"><div><a href="#">12</a></div></div><div class="calendar-cell align-center day"><div><a href="#">13</a></div></div><div class="calendar-cell align-center day"><div><a href="#">14</a></div></div><div class="calendar-cell align-center day"><div><a href="#">15</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day today"><div><a href="#">16</a></div></div><div class="calendar-cell align-center day"><div><a href="#">17</a></div></div><div class="calendar-cell align-center day"><div><a href="#">18</a></div></div><div class="calendar-cell align-center day"><div><a href="#">19</a></div></div><div class="calendar-cell align-center day"><div><a href="#">20</a></div></div><div class="calendar-cell align-center day"><div><a href="#">21</a></div></div><div class="calendar-cell align-center day"><div><a href="#">22</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">23</a></div></div><div class="calendar-cell align-center day"><div><a href="#">24</a></div></div><div class="calendar-cell align-center day"><div><a href="#">25</a></div></div><div class="calendar-cell align-center day"><div><a href="#">26</a></div></div><div class="calendar-cell align-center day"><div><a href="#">27</a></div></div><div class="calendar-cell align-center day"><div><a href="#">28</a></div></div><div class="calendar-cell align-center day"><div><a href="#">29</a></div></div></div><div class="calendar-row"><div class="calendar-cell align-center day"><div><a href="#">30</a></div></div><div class="calendar-cell align-center day"><div><a href="#">31</a></div></div><div class="calendar-cell empty"><div class="other-day">1</div></div><div class="calendar-cell empty"><div class="other-day">2</div></div><div class="calendar-cell empty"><div class="other-day">3</div></div><div class="calendar-cell empty"><div class="other-day">4</div></div><div class="calendar-cell empty"><div class="other-day">5</div></div></div></div></div></div>
			</div>
		</div>
	</div>
</div>