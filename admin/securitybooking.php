<?php
session_start();

 include '../app/call.php';
	if(!isset($_SESSION['security'] ['email']))
		redirection('securitylogin.php');

	

if (isset($_POST['submitbtn'])) {
		if(updateNumParkingInfo($conn, $_POST)){}
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
	<title>Parking Application</title>

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
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
</head>

<body>

<!-- try -->
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			
								<a href="#" class="media-right"><img src="assets/images/parking2.png" class="img-square img-md" alt="logo"><span style="color:white; font-size:20px; padding:10px; font-family:cursive; vertical-align: bottom;">Park Mate</span></a>
								
			<!--  <a class="navbar-brand" href="index.html"><img src="assets/images/parking.png" alt=""></a>-->

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			

			<ul class="nav navbar-nav navbar-right">
			
				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<!-- <span><?php echo $_SESSION['security']['fname'];?></span> -->
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="logoutsecurity.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
<!-- tryend -->






				<!-- formfor security guard -->
				



	
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form action="securitybooking.php" id="addform" method="POST">
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
													
													  <input name="location" type="hidden" id="location" value="<?php echo $_SESSION['security'] ['locId']; ?>" class="form-control">
													<!--  <select name="location" required id="location" class="form-control">
														
													</select> -->
													
												</div>
											</div>                                        
										
											</div>

										

<div id="data" >
                                           <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" name="number" id="number" placeholder="Vehicle Number without space">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
                                                 </div>
                                            <div class="row">
                                               <div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
                                                 </div>
											
                                              

                                  <!--  <div class="row">
											<div class="col-md-12">
												<div class="form-group has-feedback">
													<input type="number" readonly name="amount" id="amt" class="form-control" placeholder="Advance Amount">
													<div class="form-control-feedback">
														
													</div>
												</div>
											</div>
										</div> -->


										
										
																			
										
									
										
										<div  class="text-right">
											<button type="reset" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10" >Cancel Booking</button>
											<button id="show" type="submit" name="submitbtn" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10">Confirm Booking</button>
										</div>
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
																
																<a href="securityupdate.php?ref=<?php echo $adminUser['book_id'];?>" class="btn btn-xs btn-info">
																	Check In
																</a>
															
																
																<a href="securitycheckout.php?ref=<?php echo $adminUser['book_id'];?>" class="btn btn-xs btn-info">
																	Check Out
																</a></div></td>
									  
									
								</tr>
						<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /scrollable datatable -->


					<!-- Footer -->
					
					<!-- /footer -->

				</div>
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
			</body>
			</html>