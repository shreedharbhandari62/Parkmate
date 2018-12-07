<?php
function insertAdminUser($conn, $data){
	$data['adm_password']=md5($data['adm_password']);
	$stmtinsert=$conn->prepare("INSERT INTO tbl_adminllogin (`adm_fname`,`adm_lname`,`adm_email`,`adm_password`,`adm_phone`,`adm_role`, `adm_status`) VALUES (:adm_fname, :adm_lname, :adm_email, :adm_password,:adm_phone, :adm_role, :adm_status)");

	$stmtinsert->bindParam(':adm_fname', $data['adm_fname']);
	$stmtinsert->bindParam(':adm_lname', $data['adm_lname']);
	$stmtinsert->bindParam(':adm_email', $data['adm_email']);
	$stmtinsert->bindParam(':adm_password', $data['adm_password']);
	$stmtinsert->bindParam(':adm_phone', $data['adm_phone']);
	$stmtinsert->bindParam(':adm_role', $data['adm_role']);
	$stmtinsert->bindParam(':adm_status', $data['adm_status']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}
function updateAdminUser($conn, $data){
	$stmtupdate=$conn->prepare("UPDATE tbl_adminllogin SET adm_fname=:adm_fname, adm_lname=:adm_lname, adm_email=:adm_email,  adm_role=:adm_role, adm_status=:adm_status WHERE adm_id=:adm_id");

	$stmtupdate->bindParam(':adm_fname', $data['adm_fname']);
	$stmtupdate->bindParam(':adm_lname', $data['adm_lname']);
	$stmtupdate->bindParam(':adm_email', $data['adm_email']);
	$stmtupdate->bindParam(':adm_role', $data['adm_role']);
	$stmtupdate->bindParam(':adm_status', $data['adm_status']);
	$stmtupdate->bindParam(':adm_id', $data['adm_id']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
}
 function getAllAdminUsers($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_adminllogin");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }
   function getAdminUserById($conn, $adminId){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_adminllogin where adm_id=:adm_id");
 	$stmtSelect->bindParam(':adm_id',$adminId);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }
  function deleteAdminUser($conn, $adminId){
	$stmtdelete=$conn->prepare("DELETE FROM tbl_adminllogin WHERE adm_id=:adm_id");
	$stmtdelete->bindParam(':adm_id', $adminId);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}


function countAllAdmin($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_adminllogin");
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}