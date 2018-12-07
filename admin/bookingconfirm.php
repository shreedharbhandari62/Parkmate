 
<!--  <table>
	<tr>
		<th>S.No.</th>
		<th>Vehicle Type</th>
		<th>Rate Per Hour</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Two Wheelers</td>
		<td>Rs 15</td>
	</tr>

</table>-->

<?php
include '../app/call.php';
if (isset($_POST['submitbtn'])) {
	if(updateNumParkingInfo($conn, $_POST)){
		 if(insertBookingInfo($conn, $_POST)){		
		 	//echo"Booked successfully";
		 	//showMsg('Vehicle Registered Successfully');
		 //	redirection('manageparkingregistration.php');
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
	<title>Booking Confirm</title>

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
				<li>Give us a call : +014821422 </li>
			</ul>
			<ul class="logreg">
				<li><a href="../admin/login.php"><span>Admin Login |  </span></a> </li>
				<li><a href="../admin/securitylogin.php"><span>Security Login </span></a> </li>
	
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
				<li class="inactive"><a href="../admin/frontend/index.php">HOME</a> </li>
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

	
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form action="#" method="POST">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success">
												<i class="icon-car"></i></div>
											<h5 class="content-group-lg">ParkoSys <small class="display-block">E-park Be Smart</small></h5>
										</div>
								
										<div class="panel panel-flat">
						

						<div class="panel-body">
							<div class="alert alert-block alert-success">
									<button class="close" type="button" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
									<i class="icon-ok green"></i>									
									<strong class="green">Booking Successfull!!!!										
									</strong>
									Thankyou, for booking with Park Mate.
								</div>
						</div>

						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr class="bg-blue">
										<th>S.No</th>
										<th>Vehicle Type</th>
										<th>Rate per Hour</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Two Wheeler</td>
										<td>Rs.15</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Four Wheeler</td>
										<td>Rs.30</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
								                            
                                         </div>


										

										<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h6>
                                        <p id="text">Pay With:<a href=""><img src="../images/images.jpg" height="80px" width="80px"></a>
                                       </p></h6>-->
										
										
									</div>
								</div>
								
							</div>
						</div>

                     


						
					</form>
					<!-- /registration form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">Parking Web Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">BIM</a>
					</div>
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
