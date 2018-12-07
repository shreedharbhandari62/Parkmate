
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
						
						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="index.php">Home</a></li>
							<li class="active">Amount Admin</li>
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
									<th>Address</th>
									<th>Two Wheelers Amount</th>
									<th>Four Wheelers Amount</th>
									<th>Total</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $amounts=getAllAmounts($conn);
								// dump($adminUsers);
								foreach ($amounts as $key => $amount):
									# code...
																?>
								<tr>
									<td><?php echo ++$key; ?></td>
									<td><?php echo $amount['address'] ?></td>
									<td><?php echo $amount['two_wheelers_amount']; ?></td>
									<td><?php echo $amount['four_wheelers_amount']; ?></td>
									<td><?php echo $amount['total_amount']; ?></td>
									<td></td>
									<td></td>
							
									
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
