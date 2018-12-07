<?php 
include 'layouts/header.php';
 $adminId=$_GET['ref'];
 if (deleteAdminUser($conn, $adminId)) {
 			showMsg('User Deleted Successfully');
		 	redirection('manageadminuser.php');
 }