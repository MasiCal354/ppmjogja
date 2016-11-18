<div class="row">
	<div class="col-xs-12 col-sm-4">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Change Password</h4>
				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
					<a href="#" data-action="close">
						<i class="ace-icon fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div>
						<form method="POST" action="inc/ubah_password.php" class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-sm-9">
									<input name="oldpassword" type="password" id="form-field-8" placeholder="Password Lama" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-9">
									<input name="newpassword" type="password" id="password" placeholder="Password" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-9">
									<input type="password" id="confirm_password" placeholder="Confirm Password" class="form-control" required>
								</div>
							</div>
							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit" onclick="submitform()">
										<i class="ace-icon fa fa-key bigger-110"></i>
										Change Password
									</button>
								</div>
							</div>		
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>