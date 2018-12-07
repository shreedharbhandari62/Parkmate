<!-- header here -->
<?php 
include 'layouts/header.php';

$book_id=$_GET['ref'];

$bookedVehicle=getEnteredVehicleById($conn, $book_id);
$entry_time= $bookedVehicle['entry_time'];
$advance_amt=$bookedVehicle['amount'];
if (is_null($advance_amt)) {
	$advance_amt=0;
}

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">CheckOut </span></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>

							<li><a href="form_layout_vertical.html">CheckOut</a></li>
							
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					
							<!-- Basic layout-->
							

		<!-- Page content -->
		
			<!-- Main content -->
			

				<!-- Content area -->
				

					<!-- Registration form -->
					<form action="#" method="POST">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success">
												<i class="icon-car"></i></div>
											<h5 class="content-group-lg">ParkoSys <small class="display-block">E-park Be Smart</small></h5>
										</div>
								
										<div class="panel panel-flat">
						

						<div class="panel-body">
							<div class="alert alert-block alert-success">
									<button class="close" type="button" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
																		
									Your Entry Time :: <?php echo $entry_time; ?>										
									<br>
									Your Exit Time :: <?php date_default_timezone_set('Asia/Kathmandu'); 
                                                 $exit_time=date('Y-m-d H:i:s');
                                                 echo $exit_time; ?><br>

									
									<?php
								$date1=date_create($entry_time);
								$date2=date_create($exit_time);
								$diff=date_diff($date1, $date2);
								$hour=$diff->h;
								$min=$diff->i;
								$sec=$diff->s;
								$rate=0;
								echo "You parked for :: ".$hour."hr ".$min."min";
								if ($bookedVehicle['type']=='two') {
									$rate=$advance_amt+$hour*15;
									if($min>0){
										$rate=$rate+15;
									}

								}
								if ($bookedVehicle['type']=='four') {
									$rate=$advance_amt+$hour*30;
									if($min>0){
										$rate=$rate+30;
									}

								}
								?><br><?php
								echo "Your total charge is :: ".$rate;
								updateAmountCashTable($conn, $book_id, $rate);
								deleteBookedRegistrarions($conn, $book_id);
								?>
									</strong>
								</div>
						</div>

						<div class="table-responsive">
						
						</div>
					</div>
								                            
                                         </div>


										

										<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h6>
                                        <p id="text">Pay With:<a href=""><img src="../images/images.jpg" height="80px" width="80px"></a>
                                       </p></h6>-->
										
										
									</div>
								</div>
								
							</div>
						</div>

                     


						
					</form>
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
