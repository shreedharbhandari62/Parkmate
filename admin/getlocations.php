<?php
session_start();
include '../app/call.php';


$type = $_POST['vehicleType'];
$optionText='<option value="">Select Location</option>';
$locations = getAvailableParkingsByType($conn,$type);
if($locations)
{
	foreach ($locations as $key => $location) 
	{
		$optionText.= '<option value="'.$location['park_id'].'">'.$location['park_location']." ".$location['park_address'].'</option>';
	}

	echo $optionText;
}

else
{
	echo $optionText=0;
}