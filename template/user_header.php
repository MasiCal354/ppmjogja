<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/ace.min.css">
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/fonts.googleapis.com.css">
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/ace-skins.min.css">
	<link rel="stylesheet" type="text/css" href="/ppmjogja/assets/css/ace-rtl.min.css">
	<script type="text/javascript" scr="/ppmjogja/assets/js/ace-extra.min.js"></script>
</head>
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="index.php" class="navbar-brand">
					<small>
						<i class="fa fa-institution"></i>
						PPM Yogyakarta
					</small>
				</a>
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button"data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
					<span class="sr-only">Toggle user menu</span>
					<img src="/ppmjogja/assets/img/iCal.jpg" alt="Profile Picture" />
				</button>
					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse"data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-buttons navbar-header pull-right collapse navbar-collapse" role="navigation">
				<ul class="nav ace-nav">
					<li class="transparent dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						</a>
							<div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caretdropdown-close">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#navbar-tasks">
											Tasks
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#navbar-messages">
											Messages
											<span class="badge badge-danger">5</span>
										</a>
									</li>
								</ul><!-- .nav-tabs -->
								<div class="tab-content">
									<div id="navbar-tasks" class="tab-pane in active">
										<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
											<li class="dropdown-content">
												<ul class="dropdown-menu dropdown-navbar">
													<li>
														<a href="#">
															<div class="clearfix">
																	<span class="pull-left">Software Update</spa>
																<span class="pull-right">65%</span>
															</div>
															<div class="progress progress-mini">
																	<div style="width:65%" class="progress-bar"</div>
															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="clearfix">
																	<span class="pull-left">Hardware Upgrade<span>
																<span class="pull-right">35%</span>
															</div>
															<div class="progress progress-mini">
																	<div style="width:35%" class="progress-barprogress-bar-danger"></div>
															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Unit Testing</span>
																<span class="pull-right">15%</span>
															</div>
															<div class="progress progress-mini">
																	<div style="width:15%" class="progress-barprogress-bar-warning"></div>
															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Bug Fixes</span>
																<span class="pull-right">90%</span>
															</div>
																<div class="progress progress-miniprogress-striped active">
																	<div style="width:90%" class="progress-barprogress-bar-success"></div>
															</div>
														</a>
													</li>
												</ul>
											</li>
											<li class="dropdown-footer">
												<a href="#">
													See tasks with details
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.tab-pane -->
									<div id="navbar-messages" class="tab-pane">
										<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
											<li class="dropdown-content">
												<ul class="dropdown-menu dropdown-navbar">
													<li>
														<a href="#">
																<img src="assets/images/avatars/avatar.png" clas="msg-photo" alt="Alex's Avatar" />
															<span class="msg-body">
																<span class="msg-title">
																	<span class="blue">Alex:</span>
																		Ciao sociis natoque penatibus et auctor...
																</span>
																<span class="msg-time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span>a moment ago</span>
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
																<img src="assets/images/avatars/avatar3.png"class="msg-photo" alt="Susan's Avatar" />
															<span class="msg-body">
																<span class="msg-title">
																	<span class="blue">Susan:</span>
																		Vestibulum id ligula porta felis euismod...
																</span>
																<span class="msg-time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span>20 minutes ago</span>
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
																<img src="assets/images/avatars/avatar4.png"class="msg-photo" alt="Bob's Avatar" />
															<span class="msg-body">
																<span class="msg-title">
																	<span class="blue">Bob:</span>
																		Nullam quis risus eget urna mollisornare ...
																</span>
																<span class="msg-time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span>3:15 pm</span>
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
																<img src="assets/images/avatars/avatar2.png"class="msg-photo" alt="Kate's Avatar" />
															<span class="msg-body">
																<span class="msg-title">
																	<span class="blue">Kate:</span>
																		Ciao sociis natoque eget urna mollisornare ...
																</span>
																<span class="msg-time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span>1:33 pm</span>
																</span>
															</span>
														</a>
													</li>
													<li>
														<a href="#">
																<img src="assets/images/avatars/avatar5.png"class="msg-photo" alt="Fred's Avatar" />
															<span class="msg-body">
																<span class="msg-title">
																	<span class="blue">Fred:</span>
																	Vestibulum id penatibus et auctor ...
																</span>
																<span class="msg-time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span>10:09 am</span>
																</span>
															</span>
														</a>
													</li>
												</ul>
											</li>
											<li class="dropdown-footer">
												<a href="inbox.php">
													See all messages
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.tab-pane -->
								</div><!-- /.tab-content -->
							</div><!-- /.tabbable -->
						</div><!-- /.dropdown-menu -->
					</li>
					<li class="light-blue dropdown-modal user-min">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="/ppmjogja/assets/img/iCal.jpg" alt="Profile Picture" />
							<span class="user-info">
								<small>Welcome,</small>
								<?php echo $_SESSION['user']['username']; ?>
							</span>
							<i class="ace-icon fa fa-caret-down"></i>
						</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellowdropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="profile.php">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="inc/logout.php">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Overview
	 	&nbsp;
							<i class="ace-icon fa fa-angle-down bigger-110"></i>
						</a>
						<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-eye bigger-110 blue"></i>
									Monthly Visitors
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ace-icon fa fa-user bigger-110 blue"></i>
									Active Users
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog bigger-110 blue"></i>
									Settings
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="ace-icon fa fa-envelope"></i>
							Messages
							<span class="badge badge-warning">5</span>
						</a>
					</li>
				</ul>
				<form class="navbar-form navbar-left form-search" role="search">
					<div class="form-group">
						<input type="text" placeholder="search" />
					</div>
					<button type="button" class="btn btn-mini btn-info2">
						<i class="ace-icon fa fa-search icon-only bigger-110"></i>
					</button>
				</form>
			</nav>
		</div><!-- /.navbar-container -->
	</div>
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>
			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
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
				<li class="hover">
					<a href="index.php">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="active open hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text">
							UI &amp; Elements
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="active open hover">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-caret-right"></i>
								Layouts
								<b class="arrow fa fa-angle-down"></b>
							</a>
							<b class="arrow"></b>
							<ul class="submenu">
								<li class="active hover">
									<a href="top-menu.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Top Menu
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="two-menu-1.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Two Menus 1
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="two-menu-2.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Two Menus 2
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="mobile-menu-1.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Default Mobile Menu
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="mobile-menu-2.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Mobile Menu 2
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="mobile-menu-3.php">
										<i class="menu-icon fa fa-caret-right"></i>
										Mobile Menu 3
									</a>
									<b class="arrow"></b>
								</li>
							</ul>
						</li>
						<li class="hover">
							<a href="typography.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Typography
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="elements.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Elements
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="buttons.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Buttons &amp; Icons
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="content-slider.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Content Sliders
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="treeview.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Treeview
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="jquery-ui.php">
								<i class="menu-icon fa fa-caret-right"></i>
								jQuery UI
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="nestable-list.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Nestable Lists
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-caret-right"></i>
								Three Level Menu
								<b class="arrow fa fa-angle-down"></b>
							</a>
							<b class="arrow"></b>
							<ul class="submenu">
								<li class="hover">
									<a href="#">
										<i class="menu-icon fa fa-leaf green"></i>
										Item #1
									</a>
									<b class="arrow"></b>
								</li>
								<li class="hover">
									<a href="#" class="dropdown-toggle">
										<i class="menu-icon fa fa-pencil orange"></i>
										4th level
										<b class="arrow fa fa-angle-down"></b>
									</a>
									<b class="arrow"></b>
									<ul class="submenu">
										<li class="hover">
											<a href="#">
												<i class="menu-icon fa fa-plus purple"></i>
												Add Product
											</a>
											<b class="arrow"></b>
										</li>
										<li class="hover">
											<a href="#">
												<i class="menu-icon fa fa-eye pink"></i>
												View Products
											</a>
											<b class="arrow"></b>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text"> Tables </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="hover">
							<a href="tables.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Simple &amp; Dynamic
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="jqgrid.php">
								<i class="menu-icon fa fa-caret-right"></i>
								jqGrid plugin
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-pencil-square-o"></i>
						<span class="menu-text"> Forms </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="hover">
							<a href="form-elements.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Form Elements
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="form-elements-2.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Form Elements 2
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="form-wizard.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Wizard &amp; Validation
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="wysiwyg.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Wysiwyg &amp; Markdown
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="dropzone.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Dropzone File Upload
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="hover">
					<a href="widgets.php">
						<i class="menu-icon fa fa-list-alt"></i>
						<span class="menu-text"> Widgets </span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="hover">
					<a href="calendar.php">
						<i class="menu-icon fa fa-calendar"></i>
						<span class="menu-text">
							Calendar
							<span class="badge badge-transparent tooltip-error" title="2 Important Events">
								<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
							</span>
						</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="hover">
					<a href="gallery.php">
						<i class="menu-icon fa fa-picture-o"></i>
						<span class="menu-text"> Gallery </span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-tag"></i>
						<span class="menu-text"> More Pages </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="hover">
							<a href="profile.php">
								<i class="menu-icon fa fa-caret-right"></i>
								User Profile
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="inbox.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Inbox
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="pricing.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Pricing Tables
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="invoice.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Invoice
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="timeline.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Timeline
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="search.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Search Results
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="email.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Email Templates
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="login.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Login &amp; Register
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-file-o"></i>
						<span class="menu-text">
							Other Pages
							<span class="badge badge-primary">5</span>
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="hover">
							<a href="faq.php">
								<i class="menu-icon fa fa-caret-right"></i>
								FAQ
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="error-404.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Error 404
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="error-500.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Error 500
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="grid.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Grid
							</a>
							<b class="arrow"></b>
						</li>
						<li class="hover">
							<a href="blank.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Blank Page
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul><!-- /.nav-list -->
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
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id=ace-settings-navbar" autocomplete="off" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id=ace-settings-sidebar" autocomplete="off" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id=ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs<label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"autocomplete="off" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id=ace-settings-add-container" autocomplete="off" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->
							<div class="pull-left width-50">
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover autocomplete="off" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id=ace-settings-compact" autocomplete="off" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>
								<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id=ace-settings-highlight" autocomplete="off" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->
					<!--CONTENT START HERE-->