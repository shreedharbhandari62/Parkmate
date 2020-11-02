<?php
function insertParkingInfo($conn, $data){
	$vehicle='';
		foreach ($data['park_vehicle'] as $key ) {
				$vehicle=$key.' '.$vehicle;
			}
	$available="yes";
	
	$stmtinsert=$conn->prepare("INSERT INTO tbl_parkingreg (`park_location`,`park_address`,`park_vehicle`,`park_location_latitude`,`park_location_longitude`,`park_capacity_twowheelers`,`park_capacity_fourwheelers`,`parking_available`,`park_rem_twowheelers`,`park_rem_fourwheelers`) VALUES (:park_location, :park_address, :park_vehicle, :park_location_latitude, :park_location_longitude, :park_capacity_twowheelers, :park_capacity_fourwheelers, :parking_available,:park_capacity_twowheelers,:park_capacity_fourwheelers)");

	$stmtinsert->bindParam(':park_location', $data['park_location']);
	$stmtinsert->bindParam(':park_address', $data['park_address']);
	$stmtinsert->bindParam(':park_vehicle', $vehicle);
	$stmtinsert->bindParam(':park_location_latitude', $data['park_location_latitude']);
	$stmtinsert->bindParam(':park_location_longitude', $data['park_location_longitude']);
	$stmtinsert->bindParam(':park_capacity_twowheelers', $data['park_capacity_twowheelers']);
	$stmtinsert->bindParam(':park_capacity_fourwheelers', $data['park_capacity_fourwheelers']);
	$stmtinsert->bindParam(':parking_available', $available);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}
function updateParkingInfo($conn, $data){
	$vehicle='';
		foreach ($data['park_vehicle'] as $key ) {
				$vehicle=$key." ".$vehicle;
			}
	$stmtupdate=$conn->prepare("UPDATE tbl_parkingreg SET park_location=:park_location, park_address=:park_address, park_vehicle= :park_vehicle, park_location_latitude= :park_location_latitude, park_location_longitude=:park_location_longitude,park_capacity_twowheelers=:park_capacity_twowheelers, park_capacity_fourwheelers=:park_capacity_fourwheelers WHERE park_id=:park_id");

	$stmtupdate->bindParam(':park_location', $data['park_location']);
	$stmtupdate->bindParam(':park_address', $data['park_address']);
	$stmtupdate->bindParam(':park_vehicle', $vehicle);
	$stmtupdate->bindParam(':park_location_latitude', $data['park_location_latitude']);
	$stmtupdate->bindParam(':park_location_longitude', $data['park_location_longitude']);
	$stmtupdate->bindParam(':park_capacity_twowheelers', $data['park_capacity_twowheelers']);
	$stmtupdate->bindParam(':park_capacity_fourwheelers', $data['park_capacity_fourwheelers']);
	$stmtupdate->bindParam(':park_id', $data['park_id']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
}

function updateNumParkingInfo($conn, $_data){

	$stmtSelect = $conn->prepare("SELECT * FROM tbl_parkingreg where park_id=:park_id");
 	$stmtSelect->bindParam(':park_id',$_data['location']);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	$data=$stmtSelect->fetch();


	if($_data['type']=='two'){
		$data['park_rem_twowheelers']=$data['park_rem_twowheelers']-1;
		$data['park_booked_twowheelers']=$data['park_booked_twowheelers']+1;
		$stmtupdate=$conn->prepare("UPDATE tbl_parkingreg SET park_rem_twowheelers=:park_rem_twowheelers , park_booked_twowheelers=:park_booked_twowheelers
		WHERE park_id=:park_id");
	$stmtupdate->bindParam(':park_rem_twowheelers', $data['park_rem_twowheelers']);
	$stmtupdate->bindParam(':park_booked_twowheelers', $data['park_booked_twowheelers']);
	$stmtupdate->bindParam(':park_id', $_data['location']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
	}
	if($_data['type']=='four'){
		$data['park_rem_fourwheelers']=$data['park_rem_fourwheelers']-1;
		$data['park_booked_fourwheelers']=$data['park_booked_fourwheelers']+1;
		$stmtupdate=$conn->prepare("UPDATE tbl_parkingreg SET  park_rem_fourwheelers=:park_rem_fourwheelers , park_booked_fourwheelers=:park_booked_fourwheelers
		WHERE park_id=:park_id");
	$stmtupdate->bindParam(':park_rem_fourwheelers', $data['park_rem_fourwheelers']);
	$stmtupdate->bindParam(':park_booked_fourwheelers', $data['park_booked_fourwheelers']);
	$stmtupdate->bindParam(':park_id', $_data['location']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
	}

}

 function getAllParkingRegistrations($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_parkingreg");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }
 function getRegisteredVehicleById($conn, $park_id){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_parkingreg where park_id=:park_id");
 	$stmtSelect->bindParam(':park_id',$park_id);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }


function deleteParkingRegistration($conn,  $park_id){
	$stmtdelete=$conn->prepare("DELETE FROM tbl_parkingreg WHERE  park_id=:park_id");
	$stmtdelete->bindParam(':park_id',$park_id);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}

function getAvailableParkingsByType($conn,$type)
{
	$secid=$_SESSION['security']['locId'];
	if($type=='two')
	{
		$stmtGet=$conn->prepare("SELECT *  FROM tbl_parkingreg WHERE  park_rem_twowheelers>0 AND parking_available='yes' AND  park_id=:park_id ");
		$stmtGet->bindParam(':park_id', $secid);
		if ($stmtGet->execute()) {
			$stmtGet->setFetchMode(PDO::FETCH_ASSOC);
			return $stmtGet->fetchAll();
		}
	}
	else
	{
		$stmtGet=$conn->prepare("SELECT *  FROM tbl_parkingreg WHERE  park_rem_fourwheelers>0 AND parking_available='yes' AND park_id=:park_id ");
		$stmtGet->bindParam(':park_id', $secid);
		if ($stmtGet->execute()) {
			$stmtGet->setFetchMode(PDO::FETCH_ASSOC);
			return $stmtGet->fetchAll();
		}
	}
}

function getAvailableParkingsByType1($conn,$type)
{
	
	if($type=='two')
	{
		$stmtGet=$conn->prepare("SELECT *  FROM tbl_parkingreg WHERE  park_rem_twowheelers>0 AND parking_available='yes'");
		
		if ($stmtGet->execute()) {
			$stmtGet->setFetchMode(PDO::FETCH_ASSOC);
			return $stmtGet->fetchAll();
		}
	}
	else
	{
		$stmtGet=$conn->prepare("SELECT *  FROM tbl_parkingreg WHERE  park_rem_fourwheelers>0 AND parking_available='yes'  ");
		
		if ($stmtGet->execute()) {
			$stmtGet->setFetchMode(PDO::FETCH_ASSOC);
			return $stmtGet->fetchAll();
		}
	}
}


function countAllRegistration($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_parkingreg");
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}
  function getLocationById($conn, $bookId){
 	$stmtSelect = $conn->prepare("SELECT park_location FROM tbl_parkingreg where park_id=:book_id");
 	$stmtSelect->bindParam(':book_id',$bookId);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }
