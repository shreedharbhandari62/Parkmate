<!-- Header here -->

<?php
include 'layouts/header.php';
?>

	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<!-- sidebar here -->
			<?php include 'layouts/sidebar.php';
			?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					
							<div class="row">
						<div class="col-lg-12">

							<!-- Marketing campaigns -->
							
							<!-- /marketing campaigns -->
							<div class="row">
									<?php $parkRegs=getAllParkingRegistrations($conn);
								// dump($adminUsers);
								foreach ($parkRegs as $key => $parkReg):
									# code...
																?>
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
											<div class="heading-elements">
												
											</div>

											<h3 class="no-margin"><span style="color:black; font-size:30px;font-family:cursive"><?php echo $parkReg['park_location']; ?></h3></span>
												
											<div>
												<h4><span style="float:left;">Two Wheelers Capacity</span>
											<p class="text-right"><?php  $total_park_two=$parkReg['park_capacity_twowheelers']; 
										echo $total_park_two; ?></p> </h4></div>
								<div><h4><span style="float:left;">Remaining Capacity</span>
								<p class="text-right"> <?php 
								$location_id = $parkReg['park_id'];
								$remaining_park_two=$total_park_two-countAllBooking($conn, $location_id);
								echo $remaining_park_two;?></h5></div>

										

											<h4><span style="float:left;">Four Wheelers Capacity</span>
												<p class="text-right">
											<?php  
											$total_park_four=$parkReg['park_capacity_fourwheelers'];
											echo $total_park_four; ?> </p> </h4>
												<div><h4><span style="float:left;">Remaining Capacity </span>
													<p class="text-right"> <?php
												$location_id = $parkReg['park_id'];
										  $remaining_park_four=$total_park_four-countAllBookingA($conn, $location_id);
										  echo $remaining_park_four;?></h4></div>

										</div>

										<div class="container-fluid">
											<div id="members-online"></div>
										</div>
									</div>
									<!-- /members online -->

								</div>
								<?php endforeach; ?>

							
						</div>

						<div class="col-lg-5">

							<!-- Sales stats -->
							
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->


					<!-- Dashboard content -->
					
							<!-- /quick stats boxes -->


							<!-- Support tickets -->
							
							<!-- /support tickets -->


							<!-- Latest posts -->
						
					<!-- /dashboard content -->


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
