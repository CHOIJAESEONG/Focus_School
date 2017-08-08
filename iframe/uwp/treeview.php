<?php
	include_once("../../include/header.php");
?>
<style>
	.navbar-brand img {max-width:initial !important; height:inherit !important;}
	@media (min-width: 768px) {
		.whole {
			width:25% ;
			left : inherit;
			right: 0;
		}
	} 
	.whole {
		width: 80% !important;
		margin: 0 auto;
	}
	.cell {
		float:left;
		margin:20px;
	}
</style>
<link href="http://cdn.metroui.org.ua/css/metro.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-icons.min.css" rel="stylesheet">
<link href="http://cdn.metroui.org.ua/css/metro-responsive.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>
<div style="<?php if($is_ifr!="") {echo 'margin-top:0px;';} else{ echo 'margin-top:60px;';} ?>"></div>
<div class="whole">
	<div class="cell">
		<h5>TreeView</h5>
		<div class="treeview" data-role="treeview">
			<ul>
				<li class="node">
					<span class="leaf">Favorites</span>
					<span class="node-toggle"></span>
					<ul>
						<li><span class="leaf">Projects</span></li>
						<li><span class="leaf">Downloads</span></li>
						<li><span class="leaf">Desktop</span></li>
					</ul>
				</li>
				<li class="node collapsed">
					<span class="leaf">OneDrive</span>
					<span class="node-toggle"></span>
					<ul style="display: none;">
						<li><span class="leaf">Documents</span></li>
						<li class="node collapsed">
							<span class="leaf">Projects</span>
							<span class="node-toggle"></span>
							<ul style="display: none;">
								<li><span class="leaf">Metro UI CSS</span></li>
								<li><span class="leaf">Restyle</span></li>
								<li><a href="http://dnmarket.com" class="leaf">DNMarket</a></li>
								<li><span class="leaf">Test Project</span></li>
							</ul>
						</li>
						<li><span class="leaf">Photos</span></li>
						<li><span class="leaf">Videos</span></li>
						<li><span class="leaf">Music</span></li>
					</ul>
				</li>
				<li><span class="leaf">Location</span></li>
				<li><span class="leaf">Computers</span></li>
				<li class="node collapsed">
					<span class="node-toggle"></span>
					<span class="leaf">Phones</span>
				</li>
				<li class="node">
					<span class="leaf"><span class="mif-tree"></span> Network</span>
					<span class="node-toggle"></span>
					<ul>
						<li><span class="leaf"><span class="icon mif-tablet"></span> ASUS</span></li>
						<li><span class="leaf"><span class="icon mif-laptop"></span> BARACUDA</span></li>
						<li><span class="leaf"><span class="icon mif-printer"></span> EPSON</span></li>
						<li><span class="leaf"><span class="icon mif-database"></span> VUSOLO</span></li>
						<li><span class="leaf"><span class="icon mif-phone"></span> GALAXY S4</span></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="cell">
		<h5>Checkbox &amp; Radio</h5>
		<div class="treeview" data-role="treeview">
			<ul>
				<li class="node">
					<span class="node-toggle"></span>
					<span class="leaf">Checkboxes</span>
					<ul>
						<li data-mode="checkbox" data-name="c1">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1"><span class="check"></span></label><span class="leaf">Play animations</span>
						</li>
						<li data-mode="checkbox" data-name="c2" data-checked="true">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2"><span class="check"></span></label><span class="leaf">Play sounds</span>
						</li>
						<li data-mode="checkbox" data-name="c3" data-disabled="true" class="disabled">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c3" disabled=""><span class="check"></span></label><span class="leaf">Disabled leaf</span>
						</li>
						<li data-mode="checkbox" data-name="c4" data-readonly="true" data-checked="true" data-value="1">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c4" disabled="" value="1"><span class="check"></span></label><span class="leaf">Read only</span>
						</li>
					</ul>
				</li>
				<li class="node">
					<span class="node-toggle"></span>
					<span class="leaf">Radio buttons</span>
					<ul>
						<li data-mode="radio" data-name="r1" data-checked="true">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r1"><span class="check"></span></label><span class="leaf">Play animations</span>
						</li>
						<li data-mode="radio" data-name="r1">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r1"><span class="check"></span></label><span class="leaf">Play sounds</span>
						</li>
						<li data-mode="radio" data-name="r1" data-disabled="true" class="disabled">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r1" disabled=""><span class="check"></span></label><span class="leaf">Disabled leaf</span>
						</li>
						<li data-mode="radio" data-name="r1">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r1"><span class="check"></span></label><span class="leaf">Show pictures</span>
						</li>
					</ul>
				</li>
				<li class="node">
					<span class="node-toggle"></span>
					<span class="leaf">Mixed</span>
					<ul>
						<li data-mode="checkbox" data-name="c1">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1"><span class="check"></span></label><span class="leaf">Play animations</span>
						</li>
						<li data-mode="radio" data-name="r2" data-checked="true">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r2"><span class="check"></span></label><span class="leaf">Play animations</span>
						</li>
						<li data-mode="radio" data-name="r2">
							<label class="input-control radio small-check" style="display:none;"><input type="radio" name="r2"><span class="check"></span></label><span class="leaf">Play sounds</span>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="cell">
		<h5>Indeterminate</h5>
		<div class="treeview" data-role="treeview">
			<ul>
				<li class="node" data-mode="checkbox" data-name="c0">
					<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c0"><span class="check"></span></label><span class="leaf">Indeterminate</span>
					<span class="node-toggle"></span>
					<ul>
						<li data-mode="checkbox" data-name="c1" class="node">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1"><span class="check"></span></label><span class="leaf">Play video</span>
							<span class="node-toggle"></span>
							<ul>
								<li data-mode="checkbox" data-name="c1_1">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1_1"><span class="check"></span></label><span class="leaf">AVI</span>
								</li>
								<li data-mode="checkbox" data-name="c1_2">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1_2"><span class="check"></span></label><span class="leaf">MPEG</span>
								</li>
								<li data-mode="checkbox" data-name="c1_3">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1_3"><span class="check"></span></label><span class="leaf">VIDX</span>
								</li>
								<li data-mode="checkbox" data-name="c1_3">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c1_3"><span class="check"></span></label><span class="leaf">XVID</span>
								</li>
							</ul>
						</li>
						<li data-mode="checkbox" data-name="c2" class="node">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2"><span class="check"></span></label><span class="leaf">Options</span>
							<span class="node-toggle"></span>
							<ul>
								<li data-mode="checkbox" data-name="c2_1">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_1"><span class="check"></span></label><span class="leaf">Option 1</span>
								</li>
								<li data-mode="checkbox" data-name="c2_2">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_2"><span class="check"></span></label><span class="leaf">Option 2</span>
								</li>
								<li data-mode="checkbox" data-name="c2_3" class="node">
									<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_3"><span class="check"></span></label><span class="leaf">Sub Options</span>
									<span class="node-toggle"></span>
									<ul>
										<li data-mode="checkbox" data-name="c2_3_1">
											<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_3_1"><span class="check"></span></label><span class="leaf">Sub Option 1</span>
										</li>
										<li data-mode="checkbox" data-name="c2_3_2">
											<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_3_2"><span class="check"></span></label><span class="leaf">Sub Option 2</span>
										</li>
										<li data-mode="checkbox" data-name="c2_3_3">
											<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c2_3_3"><span class="check"></span></label><span class="leaf">Sub Option 3</span>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li data-mode="checkbox" data-name="c3_1_1">
							<label class="input-control checkbox small-check" style="display:none;"><input type="checkbox" name="c3_1_1"><span class="check"></span></label><span class="leaf">Other</span>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>