<?php
session_start();
$msg='';
include '../app/call.php';
if(checkAdminLogin()){
	redirect('securitybooking.php');
}
if(isset($_POST['loginbtn'])){
	$sec_email=$_POST['sec_email'];
	$sec_password=md5($_POST['sec_password']);
	$stmtLogin=$conn->prepare("SELECT * FROM tbl_securitylogin WHERE sec_email=:sec_email AND sec_password=:sec_password");
	$stmtLogin->bindParam(':sec_email', $sec_email);
	$stmtLogin->bindParam('sec_password', $sec_password);
	$stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
	if($stmtLogin->execute()){
		if($stmtLogin->rowcount()>0){
			$adminInfo= $stmtLogin->fetch();
			$_SESSION['security'] ['locId']=$adminInfo['sec_location'];			
			$_SESSION['security'] ['email']=$adminInfo['sec_email'];
			$_SESSION['security'] ['fname']=$adminInfo['sec_fname'];
			redirect('securitybooking.php');
		}
		else {
			$msg="Invalid email or password";
		}
		
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Park Mate-Security Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

	<!-- try style -->
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<!-- try end -->

</head>
<style type="text/css">
	
	.navbar-brand{
	padding: 0 0 0 0 !important;
}
</style>

<body>
	<!-- try -->
	<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li><font size="3px">Give us a call : +014821422</font></li>
			</ul>
			<ul class="logreg">
				<li><a href="../admin/login.php"><span><font size="3px">Admin Login | </font> </span></a> </li>
				<li><a href="securitylogin.php"><span><font size="3px">Security Login</font> </span></a> </li>
	
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand logo" href="#"><img src="image/parkmate.png" alt="logo" style="height: 68px;
    padding-top: 1px;
"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="inactive"><a href="frontend/index.php">HOME</a> </li>
				<li class="inactive"><a href="../booking/booking.php">Booking</a> </li>
			<!-- 	<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="3">3</a></li>
						</ul>
				</li> -->
				<li>
					<!-- <a href="contact.html">CONTACT</a> -->
 
				</li>
				
			</ul>
		</div>
	</nav>
</div>

	<!-- tryend -->

	<!-- Main navbar -->
	
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form method="POST">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Please Enter Your Information</h5>
								<h6 style="color:red; font-size:20px; text-align:center;"><?php echo $msg;?></h6>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="email" name="sec_email" required class="form-control" placeholder="Email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="sec_password" required class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="loginbtn" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" >
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div>
								</div>
							</div>

							

							
					</form>
					<!-- /advanced login -->


					<!-- Footer -->
					
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
