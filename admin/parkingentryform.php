<!-- header here -->
<?php 
include 'layouts/header.php';
if (isset($_POST['submitbtn'])) {

		 if(insertParkingInfo($conn, $_POST)){
			insertLocationCashTable($conn, $_POST);
		 	//echo"Infromation created successfully";
		 	showMsg('Vehicle Registered Successfully');
		 	redirection('manageparkingregistration.php');
	}
}
?>

	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
<?php 
include 'layouts/sidebar.php';
?>
			<!-- Main sidebar -->
			
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Parking Entry Form</span></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_layout_vertical.html">Parking Registration</a></li>
							
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
										<h5 class="panel-title">Fill out the information</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
										<div class="form-group">
											<label>Parking Location</label>
											<input type="text" class="form-control" name="park_location" placeholder="Enter parking location">
										</div>

										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" name="park_address"placeholder="Enter address">
										</div>

											<div class="form-group">
										<label class="display-block text-semibold">Vehicle Type</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="park_vehicle[]" value="TwoWheeler"class="styled">
											Two Wheeler
										</label>

										<label class="checkbox-inline">
											<input type="checkbox" name="park_vehicle[]" value="FourWheeler"class="styled">
											Four Wheeler
										</label>
									</div>
										<div class="form-group">
											<label>Location Latitude </label>
											<input type="text" class="form-control" name="park_location_latitude" placeholder="Enter location latitude">
										</div>
										<div class="form-group">
											<label>Location Longitude </label>
											<input type="text" class="form-control" name="park_location_longitude" placeholder="Enter location longitude">
										</div>
										<div class="form-group">
											<label>Capacity for two wheelers </label>
											<input type="number" class="form-control" name="park_capacity_twowheelers"placeholder="Enter parking capacity">
										</div>
										<div class="form-group">
											<label>Capacity four wheelers </label>
											<input type="number" class="form-control" name="park_capacity_fourwheelers"placeholder="Enter parking capacity">
										</div>

										<div class="text-right">
											<button type="submit" name="submitbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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
