<!-- header here -->
<?php 
include 'layouts/header.php';
if (isset($_POST['submitbtn'])) {
		 if(insertSecurity($conn, $_POST)){
		 	//echo"user created successfully";
		 	showMsg('User Created Successfully');
		 	redirection('managesecurityuser.php');
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Add Security </span></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>

							<li><a href="form_layout_vertical.html">Security Information</a></li>
							
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
											<label>First Name</label>
											<input type="text" name="sec_fname" class="form-control" placeholder="Enter first name">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="sec_lname" class="form-control" placeholder="Enter last name">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="sec_email" class="form-control" placeholder="Enter email address">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="sec_password" class="form-control" placeholder="Enter password">
										</div>
										
										<div class="form-group">
											<label>Phone Number</label>
											<input type="number" name="sec_phone" class="form-control" placeholder="Enter phone number">
										</div>
										
										<div class="form-group">
											<label>Location</label>
											<select name="sec_location" class="form-control">
												<optgroup label="Select Location">			
												<?php
										$getParkingdatas=getLocation($conn);
										foreach ($getParkingdatas as $getParkingdata) {
											
										$location=$getParkingdata['park_location'];
									 	$locationId=$getParkingdata['park_id']; 

										 
										?>									
													<option value="<?php echo $locationId; ?>"><?php echo $location; ?> </option>
													<?php } ?>
													
												</optgroup>
											</select>
										</div> 
					
									

					
										<div class="text-right">
											<button type="submit" name ="submitbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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
