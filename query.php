<?php 
function voteSubmit() {
    global $db;
    $query = "INSERT INTO `"+$dbName+"`.`"+$tblName+"` (`vote`) VALUES ('"+$users_name+"');";
    
	$stmt = $db->prepare($query);
	$stmt->execute();
	return $stmt;
}