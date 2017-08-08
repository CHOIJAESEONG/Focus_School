<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
	.cell {width:100%; float:left;  }
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-schemes.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="listview" data-role="listview" style=" margin:0 auto;">
	<div class="list-group" style="width:50%; float:left;">
		<span class="list-group-toggle">My Resources</span>
		<div class="list-group-content">
			<div class="list">
				<span class = "mif-file-video">
				<span class="list-title">Video</span>
			</div>
			<div class="list">
				<span class = "mif-file-pdf">
				<span class="list-title">Documents</span>
			</div>
			<div class="list">
				<span class = "mif-folder-download">
				<span class="list-file-download">Downloads</span>
			</div>
			<div class="list">
				<span class = "mif-file-image">
				<span class="list-title">Images</span>
			</div>
			<div class="list">
				<span class = "mif-file-music">
				<span class="list-music">Music</span>
			</div>
		</div>
	</div>

	<div class="list-group" style="width:50%; float:left;">
		<span class="list-group-toggle">My Computer</span>
		<div class="list-group-content">
			<div class="list">
				<span class = "mif-drive">
				<span class="list-title">Local Drive (C:)</span>
				<div class="list-data">
					<div class="progress" data-role="progressBar" data-value="75"></div>
				</div>
			</div>
			<div class="list">
				<span class = "mif-drive">
				<span class="list-title">Local Drive (D:)</span>
				<div class="list-data">
					<div class="progress" data-role="progressBar" data-value="35"></div>
				</div>
			</div>
			<div class="list">
				<span class = "mif-drive">
				<span class="list-title">Removable Drive (E:)</span>
				<div class="list-data">
					<div class="progress" data-role="progressBar" data-value="45"></div>
				</div>
			</div>
			<div class="list">
				<span class = "mif-floppy-disk">
				<span class="list-title">BD-ROM (J:)</span>
				<div class="list-data">
					disk not found
				</div>
			</div>
		</div>
	</div>
</div>