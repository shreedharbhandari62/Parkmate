
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
								Manage Booking
							</span></h4>

						</div>
						<?php if (isset(($_SESSION['msg'])))  echo $_SESSION['msg']; unset($_SESSION['msg']);?>
						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="#">Booking</a></li>
							<li class="active">Manage Booking</li>
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
						

					

						<table class="table datatable-basic" width="100%">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Vehicle Type</th>
									<th>Location</th>
									<th>Vehicle Number</th>									
									<th>Contact</th>
									<th>Entry Time</th>									
									<th>Advance Amount</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $adminUsers=getAllBookers($conn);
								
								// dump($adminUsers);
								foreach ($adminUsers as $key => $adminUser):
									$location=getLocationById($conn, $adminUser['location']);
									# code...
																?>
								<tr>
									<td><?php echo ++$key; ?></td>
									<td><?php echo $adminUser['type']; ?></td>				
									<td><?php echo $location['park_location']; ?></td>
									<td><?php echo $adminUser['number']; ?></td>
									<td><?php echo $adminUser['contact']; ?></td>
									<td><?php echo $adminUser['entry_time']; ?></td>
									<td><?php echo $adminUser['amount']; ?></td>

									<td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
											<a href="updateDate.php?ref=<?php echo $adminUser['book_id'];?>" class="btn btn-xs btn-info"style="margin-bottom: 10px;">
																	Check In
																</a>
															<br>
																
											<a href="updateExitDate.php?ref=<?php echo $adminUser['book_id'];?>" class="btn btn-xs btn-info">
																	Check Out
																</a></div></td>
									  
									<!--  <td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>-->
									<!--  <td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
																<a href="editadminuser.php?ref=<?php echo $adminUser['adm_id'];?>" class="btn btn-xs btn-info">
																	Edit
																</a>

																<a href="deleteadminuser.php?ref=<?php echo $adminUser['adm_id'];?>" onclick="return confirm('Really Deleting that user??');" class="btn btn-xs btn-danger">
																	Delete
																</a>

															</div></td>-->
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
