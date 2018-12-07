<?php
include '../app/call.php';
if (isset($_POST['submitbtn'])) {
		 if(insertBookingInfo($conn, $_POST)){		
		 	//echo"Booked successfully";
		 	//showMsg('Vehicle Registered Successfully');
		 //	redirection('manageparkingregistration.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form action="bookingconfirm.php" method="POST">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success">
												<i class="icon-car"></i></div>
											<h5 class="content-group-lg">ParkoSys <small class="display-block">E-park Be Smart</small></h5>
										</div>

										<div class="form-group has-feedback">
											
											
										</div>
																											
                                           <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" name="number" placeholder="Vehicle Number">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
                                              </div>
                                            <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" name="contact" placeholder="Contact Number">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
                                                 </div>
											
                                              

                                   <div class="row">
											<div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="number" readonly name="amount" id="amt" class="form-control" placeholder="Advance Amount">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
										</div>


										
										<div class="form-group">
																			
										<div class="checkbox">
												<label>
													<input type="checkbox" class="styled">
													Accept terms of service
												</label>
											</div>
										</div>
										
										<div  class="text-right">
											<button type="reset" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10" >Cancel Booking</button>
											<button id="show" type="submit" name="submitbtn" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10">Confirm Booking</button>
										</div>

										<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h6>
                                        <p id="text">Pay With:<a href=""><img src="../images/images.jpg" height="80px" width="80px"></a>
                                       </p></h6>-->
										
										<div class="">Note: Please read our terms of service <a href="Terms.php">here..</div>
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

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



</body>
<script>
$(document).ready(function(){
	 $("p").hide();
   
    $("#show").click(function(){
        $("p").show();
    });
});

function getLocation(vehicleType)
  {

      $.ajax({
      type: 'post',
      url: 'getlocations.php',
      data: {
        vehicleType:vehicleType,
       
        
      },
      success: function (response) {
        $('#location').html(response);
        if (vehicleType=='two') {	
        	$('#amt').val(10);
        }
        else{
        	$('#amt').val(20);
        }
      }
    });
  }
 
</script>
</html>
