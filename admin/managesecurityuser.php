
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
							<li><a href="#">Security </a></li>
							<li class="active">Manage Security</li>
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
									<th>Full Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Location</th>
									<th>Action</th>
									

																	</tr>
							</thead>
							<tbody>
								<?php $securityUseres=getAllSecurityUsers($conn);
								// dump($securityUseres);
								foreach ($securityUseres as $key => $securityUser):
									# code...
																?>
								<tr>
									<td><?php echo ++$key; ?></td>
									<td><?php echo $securityUser['sec_fname'].' '.$securityUser['sec_lname']; ?></td>
									<td><?php echo $securityUser['sec_email']; ?></td>
									<td><?php echo $securityUser['sec_phoneno']; ?></td>
									<?php $adminUsers=getAllBookers($conn);
							
								
									$location=getLocationById($conn, $securityUser['sec_location']);
									# code...
																?>
									<td><?php echo $location['park_location']; ?></td>
					
									<td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
																<a href="editsecurityuser.php?ref=<?php echo $securityUser['sec_id'];?>" class="btn btn-xs btn-info">
																	Edit
																</a>

																<a href="deletesecurityuser.php?ref=<?php echo $securityUser['sec_id'];?>" onclick="return confirm('Really Deleting that user??');" class="btn btn-xs btn-danger">
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
