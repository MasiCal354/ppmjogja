<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fonts.googleapis.com.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace-skins.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ace-rtl.min.css">
	<script type="text/javascript" scr="assets/js/ace-extra.min.css"></script>
</head>
<body class="login-layout light-login">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>
								<i class="ace-icon"><img style="width: 80px;" src="assets/img/logo.png"></img></i>
								<span class="red">PPM</span>
								<span class="grey" id="id-text2">Yogyakarta</span>
							</h1>
							<h4 class="blue" id="id-company-text">&copy; PPM Yogyakarta 2016</h4>
						</div>
						<div class="space-6"></div>
						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-key green"></i>
											Login as Santri
										</h4>
										<div class="space-6"></div>
										<form method="POST" action="inc/user_login">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="username" class="form-control" placeholder="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="password" class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
												<div class="space"></div>
												<div class="clearfix">
													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>
												<div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->
									<div class="toolbar clearfix">
										<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Login as Admin
											</a>
										</div>
										<div>
											<a href="#" data-target="#signup-box" class="user-signup-link">
												Register a new Santri
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Login as Admin
										</h4>
										<div class="space-6"></div>
										<form method="POST" action="inc/admin_login">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="username" class="form-control" placeholder="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="password" class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
												<div class="space"></div>
												<div class="clearfix">
													<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>
												<div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->
									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Login as Santri
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->
							<div id="signup-box" class="signup-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="ace-icon fa fa-users blue"></i>
											Register a New Santri
										</h4>
										<div class="space-6"></div>
										<p> Enter your details to begin: </p>
										<form method="POST" action="inc/register">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="vc" class="form-control" placeholder="Verification Code" />
														<i class="ace-icon fa fa-code"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="id" class="form-control" placeholder="Nomor Induk Santri" />
														<i class="ace-icon fa fa-file-text"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="username" class="form-control" placeholder="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" id="confirm_password" class="form-control" placeholder="Repeat password" />
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>									
												<div class="space-24"></div>
												<div class="clearfix">
													<button type="reset" class="width-30 pull-left btn btn-sm">
														<i class="ace-icon fa fa-refresh"></i>
														<span class="bigger-110">Reset</span>
													</button>
													<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
														<span class="bigger-110">Register</span>
														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										</form>
									</div>
									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											Login as Santri
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.signup-box -->
						</div><!-- /.position-relative -->							
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	if("ontouchstart" in document.documentElement) document.write("<script src="assets/js/jquery.mobile.custom.min.js">"+"<"+"/script>");
</script>
<script type="text/javascript">
	jQuery(function($) {
		$(document).on("click", ".toolbar a[data-target]", function(e) {
		e.preventDefault();
		var target = $(this).data("target");
		$(".widget-box.visible").removeClass("visible");//hide others
		$(target).addClass("visible");//show target
		});
	});									
	//you don"t need this, just used for changing background
	jQuery(function($) {
		$("#btn-login-dark").on("click", function(e) {
		$("body").attr("class", "login-layout");
		$("#id-text2").attr("class", "white");
		$("#id-company-text").attr("class", "blue");				
		e.preventDefault();
		});
		$("#btn-login-light").on("click", function(e) {
		$("body").attr("class", "login-layout light-login");
		$("#id-text2").attr("class", "grey");
		$("#id-company-text").attr("class", "blue");				
		e.preventDefault();
		});
		$("#btn-login-blur").on("click", function(e) {
		$("body").attr("class", "login-layout blur-login");
		$("#id-text2").attr("class", "white");
		$("#id-company-text").attr("class", "light-blue");				
		e.preventDefault();
		});			 
	});
</script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	var password = document.getElementById("password")
		, confirm_password = document.getElementById("confirm_password");
	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Not Match");
		} else {
			confirm_password.setCustomValidity("");
		}
	}
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<script type="text/javascript" src="assets/js/ace-elements.min.js"></script>
<script type="text/javascript" src="assets/js/ace.min.js"></script>
</body>
</html>