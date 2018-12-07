<!-- header here -->
<?php 
 include '../app/call.php';
 $book_id=$_GET['ref'];
 //$registeredVehicle=getRegisteredVehicleById($conn, $park_id);
 //dump($adminUser);
if (isset($_POST['submitbtn'])) {
		if(updateRegisteredVehicleById($conn,  $book_id)){
			//echo "User Updated SuccessFully";
		 	showMsg('Registration Updated Successfully');
		 	redirection('securitybooking.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parking Application</title>

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
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>


	
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Check-in Vehicle </span></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="securitybooking.php"><i class="icon-home2 position-left"></i> Home</a></li>

							
							
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">

							<!-- Basic layout-->
							<form action="#" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Check-in</h5>

									</div>
<!--  
									<div class="panel-body">
									
										<div class="form-group">
											<label>Time</label>
											<input type="time" name="park_location" value="<?php echo $registeredVehicle['park_location'];?>" class="form-control" placeholder="Enter first name">
										</div>
										<div class="form-group">
											<label>Address</label>
											<input type="text" name="park_address" value="<?php echo $registeredVehicle['park_address'];?>" class="form-control" placeholder="Enter last name">
										</div>
										<div class="form-group">
										<label class="display-block text-semibold">Vehicle Type</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="park_vehicle[]" <?php
											$p_v=explode(' ',$registeredVehicle['park_vehicle']);
											if ($p_v[0]=='TwoWheeler'||$p_v[1]=='TwoWheeler') {
												 ?> checked <?php
											}
											 ?> value="TwoWheeler" class="styled">
											Two Wheeler
										</label>

										<label class="checkbox-inline">
											<input type="checkbox" name="park_vehicle[]" <?php
											$p_v=explode(' ',$registeredVehicle['park_vehicle']);
											if ($p_v[0]=='FourWheeler'||$p_v[1]=='FourWheeler') {
												 ?> checked <?php
											}
											 ?>value="FourWheeler"class="styled">
											Four Wheeler
										</label>
									</div>
																				
										<div class="form-group">
											<label>Location Latitude</label>
											<input type="number" name="park_location_latitude" value="<?php echo $registeredVehicle['park_location_latitude'];?>" class="form-control" placeholder="Enter phone number">
										</div>
										<div class="form-group">
											<label>Location Longitude</label>
											<input type="number" name="park_location_longitude" value="<?php echo $registeredVehicle['park_location_longitude'];?>" class="form-control" placeholder="Enter phone number">
										</div>
										<div class="form-group">
											<label>Capacity for two wheelers</label>
											<input type="number" name="park_capacity_twowheelers" value="<?php echo $registeredVehicle['park_capacity_twowheelers'];?>" class="form-control" placeholder="Enter phone number">
										</div> 
										<div class="form-group">
											<label>Capacity for four wheelers</label>
											<input type="number" name="park_capacity_fourwheelers" value="<?php echo $registeredVehicle['park_capacity_fourwheelers'];?>" class="form-control" placeholder="Enter phone number">
										</div> 
										<input type="hidden" name="park_id" value="<?php echo $registeredVehicle['park_id']; ?>">-->
					
										<div class="text-right">
											<button type="submit" name ="submitbtn" class="btn btn-primary">CheckIn <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
							<!-- /basic layout -->
						</div>
						<div class="col-md-3"></div>

						
					<!-- /vertical form options -->


					<!-- Centered forms -->
					

						

										
									</div>
								</div>
							</form>
							<!-- /basic legend -->

						</div>

						
					<!-- /fieldset legend -->


					<!-- 2 columns form -->
					
					<!-- /2 columns form -->


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
