<!-- header here -->
<?php 
include 'layouts/header.php';

$book_id=$_GET['ref'];
$bookedVehicle=getEnteredVehicleById($conn, $book_id);
$entry_time= $bookedVehicle['entry_time'];
?>

	
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Add User </span></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>

							<li><a href="form_layout_vertical.html">User Information</a></li>
							
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

						<table class="table datatable-basic" width="100%">
							<thead>
								<tr>
									<th>S.No.</th>								
									<th>Location</th>
									<th>Amount(Twowheelers)</th>				
									<th>Amount(Fourwheelers)</th>						
									<th>Total Amount</th>
								</tr>
							</thead>
							<tbody>
								<?php $Users=getAllBookers($conn);
								
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
									  
									
								</tr>
						<?php endforeach; ?>
							</tbody>
						</table>
					
					</div>
								                            
                                         </div>


										

										<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h6>
                                        <p id="text">Pay With:<a href=""><img src="../images/images.jpg" height="80px" width="80px"></a>
                                       </p></h6>-->
										
										
									</div>
								</div>
								
							
					

                     


						
					
					<!-- /registration form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">Parking Web Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">BIM</a>
					</div>
					<!-- /footer -->

				
				<!-- /content area -->

			
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
							<!-- /basic layout -->
						</div>
						
						
					<!-- /vertical form options -->


					<!-- Centered forms -->
					

						

							
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
