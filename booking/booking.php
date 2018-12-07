<?php
 
include '../app/call.php';
if (isset($_POST['submitbtn'])) {
		 if(updateNumParkingInfo($conn, $_POST)){
		  if(insertBookingInfo($conn, $_POST)){		
		 	//echo"Booked successfully";
		 	//showMsg('Vehicle Registered Successfully');
		 //	redirection('manageparkingregistration.php');
	}	
		 }
		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Park Mate Booking</title>

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

	<!-- try style -->
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<!-- try end -->

</head>
<style type="text/css">
	
	.navbar-brand{
	padding: 0 0 0 0 !important;
}
</style>

<body>


	<!-- try -->
	<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li><font size="3px">Give us a call : +014821422</font></li>
			</ul>
			<ul class="logreg">
				<li><a href="../admin/login.php"><span><font size="3px">Admin Login | </font></span></a> </li>
				<li><a href="../admin/securitylogin.php"><span><font size="3px">Security Login</font> </span></a> </li>
	
			</ul> 
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand logo" href="#"><img src="image/parkmate.png" alt="logo" style="height: 68px;
    padding-top: 1px;
"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="inactive"><a href="../admin/frontend/index.php">HOME</a> </li>
				<li class="inactive"><a href="booking.php">Booking</a> </li>

			<!-- 	<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="3">3</a></li>
						</ul>
				</li> -->
				<li>
					<!-- <a href="contact.html">CONTACT</a> -->
 
				</li>
				
			</ul>
		</div>
	</nav>
</div>

	<!-- tryend -->

	
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form action="../admin/bookingconfirm.php" id="addform" method="POST">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success">
												<i class="icon-car"></i></div>
											<h5 class="content-group-lg">Park Mate <small class="display-block">E-park Be Smart</small></h5>
										</div>

										<div class="form-group has-feedback">
											
											
										</div>

										<div class="row">
                                         
                                              
												<div class="col-md-12">
												<div class="form-group has-feedback">
													<select name="type" required onclick="getLocation(this.value)" class="form-control">
														<option value="">Select Vehicle Type</option>
														<option value="two">Two Wheeler</option>
														<option value="four">Four Wheeler</option>
													</select>
													<div class="form-control-feedback">
													</div>
												</div>
											</div>										
                                                                                 
                                         </div>


										<div class="row">
                                                   <div class="col-md-12">
												<div class="form-group has-feedback">
													<select name="location" required id="location" class="form-control">
														
													</select>
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>                                        
										
											</div>

										

<div id="data" >
                                           <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" id="number" class="form-control" name="number" placeholder="Vehicle Number without space">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
                                                 </div>
                                            <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
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


										
										
																			
										
									
										
										<div  class="text-right">
											<button type="reset" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10" >Cancel Booking</button>
											<button id="show" type="submit" name="submitbtn" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10">Confirm Booking</button>
										</div>
	</div>
										<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<h6>
                                        <p id="text">Pay With:<a href=""><img src="../images/images.jpg" height="80px" width="80px"></a>
                                       </p></h6>-->
										
										<div class="">Note: Please read our terms of service <a href="../admin/terms.php">here..</div>
									</div>
								</div>
								
							</div>
						</div>

                     


						
					</form>
					<!-- /registration form -->


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
<script>

function getLocation(vehicleType)
  {

      $.ajax({
      type: 'post',
      url: '../admin/getlocations.php',
      data: {
        vehicleType:vehicleType,
       
        
      },
      success: function (response) {
        
         var a = '<option value="">No Locations Available</option>';
       

        if (response==0) {

        	$('#location').html(a);
        	$("#data").hide();
        	//console.log(response);
        	        	 
        }
        else{
        	$("#data").show();
        	$('#location').html(response);

       
        }

        if (vehicleType=='two') {	
        	$('#amt').val(10);
        }
        else{
        	$('#amt').val(20);
        }
      }
    });
  }
  function validatevehicleno(text,id) {
	var vehicleno= /^[a-zA-Z0-9]+$/;
	if(!vehicleno.test(text)){
		$("#"+id).css({"border": "1px solid red"});
		$("#"+id).focus();
		setTimeout(function(){
			$("#"+id).css({"border": "1px solid #ddd"});
		},5000);
		return false;
	}
	else{
		return true;
	}
}
function validatecontactno(text,id) {
	var contactno= /^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/;
	if(!contactno.test(text)){
		$("#"+id).css({"border": "1px solid red"});
		$("#"+id).focus();
		setTimeout(function(){
			$("#"+id).css({"border": "1px solid #ddd"});
		},5000);
		return false;
	}
	else{
		return true;
	}
}


  $('#addform').submit(function(){
  	var email= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  	var number= /[0-9 -()+]+$/;
  	var alpha= /^[a-zA-Z0-9]+$/;
  	var phone= /^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/;

  	if(!validatevehicleno($('#number').val(),'number')
  	||!validatecontactno($('#contact').val(),'contact')){
  		return false;
  	}
  
  });
 
 
</script>
</html>
