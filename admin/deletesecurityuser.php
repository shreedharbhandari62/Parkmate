<?php 
include 'layouts/header.php';
 $adminId=$_GET['ref'];
 if (deleteSecurityUser($conn, $adminId)) {
 			showMsg('User Deleted Successfully');
		 	redirection('managesecurityuser.php');
 }