<?php
function insertSecurity($conn, $data){
	$data['sec_password']=md5($data['sec_password']);
	$stmtinsert=$conn->prepare("INSERT INTO tbl_securitylogin (`sec_fname`,`sec_lname`,`sec_email`,`sec_password`,`sec_phoneno`,`sec_location`) VALUES (:sec_fname, :sec_lname, :sec_email, :sec_password,:sec_phone, :sec_location)");

	$stmtinsert->bindParam(':sec_fname', $data['sec_fname']);
	$stmtinsert->bindParam(':sec_lname', $data['sec_lname']);
	$stmtinsert->bindParam(':sec_email', $data['sec_email']);
	$stmtinsert->bindParam(':sec_password', $data['sec_password']);
	$stmtinsert->bindParam(':sec_phone', $data['sec_phone']);
	$stmtinsert->bindParam(':sec_location', $data['sec_location']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}
function getLocation($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_parkingreg");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 
}
