
	<!-- /main navbar -->
<?php
include 'layouts/header.php';
?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php
include 'layouts/sidebar.php';
   ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">
								Manage User
							</span></h4>

						</div>
						<?php if (isset(($_SESSION['msg'])))  echo $_SESSION['msg']; unset($_SESSION['msg']);?>
						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="#">Admin</a></li>
							<li class="active">Manage Admin</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					
					<!-- /basic datatable -->


					<!-- Pagination types -->
			
					<!-- /state saving -->


					<!-- Scrollable datatable -->
					<div class="panel panel-flat">
						

					

						<table class="table datatable-scroll-y" width="100%">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Parking <br>Location</th>
									<th>Address</th>
									<th>Vehicle Type</th>
									<th>Latitude</th>									
									<th>Longitude</th>
									<th>Capacity  For<br> Two Wheelers</th>
									<th>Capacity For<br>  Four Wheelers</th>

									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $parkRegs=getAllParkingRegistrations($conn);
								// dump($adminUsers);
								foreach ($parkRegs as $key => $parkReg):
									# code...
																?>
								<tr>
									<td><?php echo ++$key; ?></td>
									<td><?php echo $parkReg['park_location']; ?></td>
									<td><?php echo $parkReg['park_address']; ?></td>
									<td><?php echo $parkReg['park_vehicle']; ?></td>
									<td><?php echo $parkReg['park_location_latitude']; ?></td>
									<td><?php echo $parkReg['park_location_longitude']; ?></td>
									<td><?php echo $parkReg['park_capacity_twowheelers']; ?></td>
									<td><?php echo $parkReg['park_capacity_fourwheelers']; ?></td>
									
									
									<td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
																<a href="editparkingregistration.php?ref=<?php echo $parkReg['park_id'];?>" class="btn btn-xs btn-info">
																	Edit
																</a>

																<a href="deleteparkingentry.php?ref=<?php echo $parkReg['park_id'];?>" onclick="return confirm('Really Deleting that user??');" class="btn btn-xs btn-danger">
																	Delete
																</a>

															</div></td>
								</tr>
						<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /scrollable datatable -->


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
