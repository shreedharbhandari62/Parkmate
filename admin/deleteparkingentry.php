<?php
include 'layouts/header.php';
 $park_id=$_GET['ref'];
 if (deleteParkingRegistration($conn,  $park_id)) {
 			showMsg('Registration Deleted Successfully');
		 	redirection('manageparkingregistration.php');
 }