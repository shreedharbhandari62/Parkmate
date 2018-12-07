<?php
function insertBookingInfo($conn, $data){
	
	$stmtinsert=$conn->prepare("INSERT INTO tbl_booking (`type`,`location`,`number`,`contact`,`amount`) VALUES (:type, :location, :numbers, :contact, :amount)");

	$stmtinsert->bindParam(':type', $data['type']);
	$stmtinsert->bindParam(':location', $data['location']);
	$stmtinsert->bindParam(':numbers', $data['number']);
	$stmtinsert->bindParam(':contact', $data['contact']);
	$stmtinsert->bindParam(':amount', $data['amount']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}
function getAllBookers($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_booking");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }

function countAllBooking($conn, $location_id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_booking WHERE type='two' AND location=:location_id");
	$stmtSelect->bindParam(':location_id', $location_id);
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}
function countAllBookingA($conn, $location_id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_booking WHERE type='four' AND location=:location_id");
	$stmtSelect->bindParam(':location_id', $location_id);
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}
 function updateRegisteredVehicleById($conn, $book_id){

 	$stmtUpdate = $conn->prepare("UPDATE tbl_booking SET entry_time=CURRENT_TIMESTAMP where book_id=:book_id");
 	
 	$stmtUpdate->bindParam(':book_id',$book_id);
 	if($stmtUpdate->execute()){
 		return true;
 	}
 	else
 		return false;

 }
 function getEnteredVehicleById($conn, $bookId){

 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_booking where book_id=:book_id");
 	$stmtSelect->bindParam(':book_id',$bookId);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	$_data=$stmtSelect->fetch();

 	if($_data['type']=='two'){
	$stmtupdate=$conn->prepare("UPDATE tbl_parkingreg SET park_rem_twowheelers=park_rem_twowheelers+1 ,park_booked_twowheelers=park_booked_twowheelers-1
		WHERE park_id=:park_id");
	$stmtupdate->bindParam(':park_id', $_data['location']);
	$stmtupdate->execute();
}

	if($_data['type']=='four'){
	$stmtupdate=$conn->prepare("UPDATE tbl_parkingreg SET park_rem_fourwheelers=park_rem_fourwheelers+1 ,park_booked_fourwheelers=park_booked_fourwheelers-1
		WHERE park_id=:park_id");
	$stmtupdate->bindParam(':park_id', $_data['location']);
	$stmtupdate->execute();
 }
	return $_data;
}

 function deleteBookedRegistrarions($conn,  $book_id){
	$stmtdelete=$conn->prepare("DELETE FROM tbl_booking WHERE  book_id=:book_id");
	$stmtdelete->bindParam(':book_id',$book_id);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}
function insertLocationCashTable($conn, $data){
	
	$stmtinsert=$conn->prepare("INSERT INTO tbl_cashcollection (`address`) VALUES (:location)");
	$stmtinsert->bindParam(':location', $data['park_location']);
	$stmtinsert->execute();

}
function updateAmountCashTable($conn, $bookId, $rate){
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_booking where book_id=:book_id");
 	$stmtSelect->bindParam(':book_id',$bookId);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	$_data=$stmtSelect->fetch();
 	$stmtSelect1 = $conn->prepare("SELECT * FROM tbl_parkingreg where park_id=:data_loc");
 	$stmtSelect1->bindParam(':data_loc',$_data['location']);
 	$stmtSelect1->execute();
 	$stmtSelect1->setFetchMode(PDO::FETCH_ASSOC);
 	$_data1=$stmtSelect1->fetch();
 	
 	if($_data['type']=='two'){
	$stmtupdate=$conn->prepare("UPDATE tbl_cashcollection SET two_wheelers_amount=two_wheelers_amount+$rate, total_amount=total_amount+$rate	WHERE address=:park_id");
	$stmtupdate->bindParam(':park_id', $_data1['park_location']);
	$stmtupdate->execute();
	}
	if($_data['type']=='four'){
	$stmtupdate=$conn->prepare("UPDATE tbl_cashcollection SET four_wheelers_amount=four_wheelers_amount+$rate , total_amount=total_amount+$rate
		WHERE address=:park_id");
	$stmtupdate->bindParam(':park_id', $_data1['park_location']);
	$stmtupdate->execute();
 }

}

