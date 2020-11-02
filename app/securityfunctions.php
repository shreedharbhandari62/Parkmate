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
function updateSecurityUser($conn, $data){
	$stmtupdate=$conn->prepare("UPDATE tbl_securitylogin SET sec_fname=:adm_fname, sec_lname=:adm_lname, sec_email=:adm_email, sec_phoneno=:adm_status, sec_location=:sec_location WHERE sec_id=:adm_id");

	$stmtupdate->bindParam(':adm_fname', $data['sec_fname']);
	$stmtupdate->bindParam(':adm_lname', $data['sec_lname']);
	$stmtupdate->bindParam(':adm_email', $data['sec_email']);
	$stmtupdate->bindParam(':adm_status', $data['sec_phoneno']);
	$stmtupdate->bindParam(':sec_location', $data['sec_location']);
	$stmtupdate->bindParam(':adm_id', $data['sec_id']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
}
 function deleteSecurityUser($conn, $adminId){
	$stmtdelete=$conn->prepare("DELETE FROM tbl_securitylogin WHERE sec_id=:adm_id");
	$stmtdelete->bindParam(':adm_id', $adminId);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}
function getAllSecurityUsers($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_securitylogin");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }
 function getSecurityUserById($conn, $adminId){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_securitylogin where sec_id=:adm_id");
 	$stmtSelect->bindParam(':adm_id',$adminId);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }
