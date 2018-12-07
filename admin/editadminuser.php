<!-- header here -->
<?php 
include 'layouts/header.php';
 $adm_id=$_GET['ref'];
 $adminUser=getAdminUserById($conn, $adm_id);
 //dump($adminUser);
if (isset($_POST['submitbtn'])) {
		if(updateAdminUser($conn, $_POST)){
			//echo "User Updated SuccessFully";
		 	showMsg('User Updated Successfully');
		 	redirection('manageadminuser.php');
	}
}
?>

	</div>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Update User </span></h4>
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

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">

							<!-- Basic layout-->
							<form action="#" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Fill out the information</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>First Name</label>
											<input type="text" name="adm_fname" value="<?php echo $adminUser['adm_fname'];?>" class="form-control" placeholder="Enter first name">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="adm_lname" value="<?php echo $adminUser['adm_lname'];?>" class="form-control" placeholder="Enter last name">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="adm_email" value="<?php echo $adminUser['adm_email'];?>" class="form-control" placeholder="Enter email address">
										</div>
										
										
										<div class="form-group">
											<label>Phone Number</label>
											<input type="number" name="adm_phone" value="<?php echo $adminUser['adm_phone'];?>" class="form-control" placeholder="Enter phone number">
										</div>
									  <div class="form-group">
											<label>Role</label>
											<select name="adm_role" class="form-control">
												<option <?php if($adminUser['adm_role']=='superadmin') echo 'selected="selected"'; ?> value="superadmin">Super Admin</option>
												<option <?php if($adminUser['adm_role']=='subadmin') echo 'selected="selected"'; ?> value="subadmin">Sub Admin</option>
											</select>
											
											
										</div>
										 <div class="form-group">
											<label>Status</label>
											<select name="adm_status" class="form-control">
												<option <?php if($adminUser['adm_status']=='active') echo 'selected="selected"'; ?> value="active">Active</option>
												<option <?php if($adminUser['adm_status']=='inactive') echo 'selected="selected"'; ?> value="inactive">Inactive</option>
											</select>
										
										</div> 
										<input type="hidden" name="adm_id" value="<?php echo $adminUser['adm_id']; ?>">
					
										<div class="text-right">
											<button type="submit" name ="submitbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
							<!-- /basic layout -->
						</div>
						<div class="col-md-3"></div>

						
					<!-- /vertical form options -->


					<!-- Centered forms -->
					

						

										
									</div>
								</div>
							</form>
							<!-- /basic legend -->

						</div>

						
					<!-- /fieldset legend -->


					<!-- 2 columns form -->
			
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
s