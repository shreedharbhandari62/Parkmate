<!-- header here -->
<?php 
include '../admin/layouts/header.php';
?>

	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
<?php 
include '../admin/layouts/sidebar.php';
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
							<form action="#">
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
											<label>Vehicle Type</label>
											<select class="select">
												<optgroup label="Select vehicle type">
													<option value=" ">Select</option>
													<option value="TW">Two wheeler</option>
													<option value="FW">Four wheeler</option>
												</optgroup>
											</select>
										</div>
										<div class="form-group">
											<label>Vehicle Number</label>
											<input type="text" class="form-control" placeholder="Enter vehicle number">
										</div>
										<div class="form-group">
											<label>Parking Location</label>
											<input type="text" class="form-control" placeholder="Enter parking location">
										</div>
										<div class="form-group">
											<label>Booking Date</label>
											<input type="date" class="form-control" placeholder="Enter booking date">
										</div>

										<div class="form-group">
											<label>Entry Time</label>
											<input type="time" class="form-control" placeholder="Enter entry time">
										</div>
										<div class="form-group">
											<label>Location Latitude </label>
											<input type="text" class="form-control" placeholder="Enter location latitude">
										</div>
										<div class="form-group">
											<label>Location Longitude </label>
											<input type="text" class="form-control" placeholder="Enter location longitude">
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
					<form action="#">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Multiple columns</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<fieldset class="text-semibold">
											<legend><i class="icon-reading position-left"></i> Personal details</legend>

											<div class="form-group">
												<label>Enter your name:</label>
												<input type="text" class="form-control" placeholder="Eugene Kopyov">
											</div>

											<div class="form-group">
												<label>Enter your password:</label>
												<input type="password" class="form-control" placeholder="Your strong password">
											</div>

											<div class="form-group">
												<label>Select your state:</label>
												<select data-placeholder="Select your state" class="select">
													<option></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="KY">Kentucky</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>

											<div class="form-group">
												<label>Attach screenshot:</label>
												<input type="file" class="file-styled">
											</div>

											<div class="form-group">
												<label>Your message:</label>
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</fieldset>
									</div>

									<div class="col-md-6">
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-truck position-left"></i> Shipping details</legend>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>First name:</label>
														<input type="text" placeholder="Eugene" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>Last name:</label>
														<input type="text" placeholder="Kopyov" class="form-control">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Email:</label>
														<input type="text" placeholder="eugene@kopyov.com" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>Phone #:</label>
														<input type="text" placeholder="+99-99-9999-9999" class="form-control">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
							                            <label>Country:</label>
							                            <select data-placeholder="Select your country" class="select">
							                            	<option></option>
							                                <option value="Cambodia">Cambodia</option> 
							                                <option value="Cameroon">Cameroon</option> 
							                                <option value="Canada">Canada</option> 
							                                <option value="Cape Verde">Cape Verde</option> 
							                            </select>
						                            </div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>State/Province:</label>
														<input type="text" placeholder="Bayern" class="form-control">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>ZIP code:</label>
														<input type="text" placeholder="1031" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>City:</label>
														<input type="text" placeholder="Munich" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>Address line:</label>
														<input type="text" placeholder="Ring street 12" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label>Additional message:</label>
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</fieldset>
									</div>
								</div>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</div>
						</div>
					</form>
					<!-- /2 columns form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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
