<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>My-codeig</title>
		<meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?php echo base_url().'assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
		<link href="<?php echo base_url().'assets/dist/css/style.css'?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10"></span>
					<a class="inline-block btn btn-primary  btn-rounded btn-outline" href="<?php echo base_url('/')?>">Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in</h3>
										
										</div>	
										<div class="form-wrap">
											<form action="<?php echo base_url();?>ControllerLogin/process" method='post' name='process'>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="text" class="form-control" name="username" required="" id="name" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" name="password" id="password" placeholder="Enter pwd">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" value='Login' class="btn btn-primary  btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
	<!-- jQuery -->
      	<script src="<?php echo base_url().'assets/vendors/bower_components/jquery/dist/jquery.min.js'?>"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url().'assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js'?>"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo base_url().'assets/dist/js/jquery.slimscroll.js'?>"></script>
		
		<!-- Init JavaScript -->
		<script src="<?php echo base_url().'assets/dist/js/init.js'?>"></script>
	</body>
</html>
