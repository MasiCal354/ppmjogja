<?php 

$url0 = $_SERVER['PHP_SELF'];
$url1 = explode("/", $url0);
$url2 = explode(".", $url1[2]);

$page = $url2[0];

?>

<!DOCTYPE html>
<html>
<head>
<style>
#heatmapContainerWrapper { width:100%; height:100%; position:absolute; }
#heatmapContainer { width:100%; height:100%;}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fonts.googleapis.com.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace-skins.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace-rtl.min.css">
	<script type="text/javascript" scr="assets/js/ace-extra.min.js"></script>
</head>
	
    <script src="assets/js/heatmap.js"></script>
    <script>
	var dragon=false; var heatmap; var heatmapContainer;
	function uniKeyCode(event) {
		var key = event.keyCode;
		if(key == 72 && dragon==false){dragon=true; enableHeatmap(); }
		else if(key==72 && dragon==true){
			dragon=false;
			disableHeatmap();
		}
	}

	function enableHeatmap() {
        // create a heatmap instanc
        heatmap = h337.create({
          container: document.getElementById('heatmapContainer'),
          maxOpacity: .9,
		  minOpacity: .0,
          radius: 30,
          blur: 1,
          gradient: {0.4: "rgb(0,0,255)", 0.6: "rgb(0,255,0)", 0.8: "yellow", 1: "rgb(255,0,0)"}
        });
        heatmapContainer = document.getElementById('heatmapContainer');

        heatmapContainer.onmousemove = function(e) {
          // we need preventDefault for the touchmove
          e.preventDefault();
          var x = e.layerX;
          var y = e.layerY;
          if (e.touches) {
            x = e.touches[0].pageX;
            y = e.touches[0].pageY;
          }
          
          heatmap.addData({ x: x, y: y, value: 15 });

        };
	}
	
	function disableHeatmap(){
		//find corresponding canvas element
		var canvas = heatmap._renderer.canvas;
		//remove the canvas from DOM
		$(canvas).remove();
		//than unset the variable
		heatmap = undefined;
		//or
		heatmap = null;
		heatmapContainer.onmousemove = undefined;
	}
	
	document.onkeydown = uniKeyCode;
    </script>
<body class="no-skin">
	<div id="heatmapContainerWrapper">
      <div id="heatmapContainer">
	  
<div id="navbar" class="navbar navbar-default ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="navbar-header pull-left">
			<a href="/ppmjogja" class="navbar-brand">
				<small>
					<span style="color: #00FF00;">PPM</span>
					<span style="color: #FFFFFF;" id="id-text2">Yogyakarta</span>
				</small>
			</a>
		</div>
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="assets/img/logo.png" alt="Photo" />
						<span class="user-info">
							<small>Welcome,</small>
							<?php echo $_SESSION['admin']['username']; ?>
						</span>
						<i class="ace-icon fa fa-caret-down"></i>
					</a>
					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="setting">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li>
						<li>
							<a href="profile">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="inc/logout">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>
	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>
				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>
				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>
				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>
			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-warning"></span>
				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->
		<ul class="nav nav-list">
			<li id="index" class="">
				<a href="/ppmjogja">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
				<b class="arrow"></b>
			</li>
			<li id="parent" class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-database"></i>
					<span class="menu-text">
						Databases
					</span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li id="santri" class="">
						<a href="santri">
							<i class="menu-icon fa fa-caret-right"></i>
							Santri
						</a>
						<b class="arrow"></b>
					</li>
					<li id="hapalan" class="">
						<a href="hapalan">
							<i class="menu-icon fa fa-caret-right"></i>
							Hapalan
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>
			<li id="parent" class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-wpforms"></i>
					<span class="menu-text">
						Forms
					</span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li id="add_santri" class="">
						<a href="add_santri">
							<i class="menu-icon fa fa-caret-right"></i>
							Pendataan Santri
						</a>
						<b class="arrow"></b>
					</li>
					<li id="add_hapalan" class="">
						<a href="add_hapalan">
							<i class="menu-icon fa fa-caret-right"></i>
							Tambah Hapalan
						</a>
						<b class="arrow"></b>
					</li>
					<li id="jurnal" class="">
						<a href="jurnal">
							<i class="menu-icon fa fa-caret-right"></i>
							Jurnal
						</a>
						<b class="arrow"></b>
					</li>
					<li id="presensi" class="">
						<a href="presensi">
							<i class="menu-icon fa fa-caret-right"></i>
							Presensi
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>
		</ul><!-- /.nav-list -->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>
	<div class="main-content">
		<div class="main-content-inner">
			
			<div class="page-content">
				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="ace-icon fa fa-cog bigger-130"></i>
					</div>
					<div class="ace-settings-box clearfix" id="ace-settings-box">
						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<div class="pull-left">
									<select id="skin-colorpicker" class="hide">
										<option data-skin="no-skin" value="#438EB9">#438EB9</option>
										<option data-skin="skin-1" value="#222A2D">#222A2D</option>
										<option data-skin="skin-2" value="#C6487E">#C6487E</option>
										<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
									</select>
								</div>
								<span>&nbsp; Choose Skin</span>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
								<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
								<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
								<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
								<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
								<label class="lbl" for="ace-settings-add-container">
									Inside
									<b>.container</b>
								</label>
							</div>
						</div><!-- /.pull-left -->
						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
								<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
								<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
								<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
							</div>
						</div><!-- /.pull-left -->
					</div><!-- /.ace-settings-box -->
				</div><!-- /.ace-settings-container -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="page-header">
							<h1><?php echo $title; ?></h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
