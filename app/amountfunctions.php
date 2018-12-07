 <?php
 function getAllAmounts($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM tbl_cashcollection");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }