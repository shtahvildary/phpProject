<?php 
function voteSubmit() {
    global $db;
    $query = "INSERT INTO `"+$dbName+"`.`"+$tblName+"` (`vote`) VALUES ('"+$users_name+"');";
    
	$stmt = $db->prepare($query);
	$stmt->execute();
	return $stmt;
}

//SELECT * FROM `votes` WHERE 1
//SELECT `id`, `vote` FROM `votes` WHERE 1
//INSERT INTO `votes`(`id`, `vote`) VALUES ([value-1],[value-2])
//UPDATE `votes` SET `id`=[value-1],`vote`=[value-2] WHERE 1
//DELETE FROM `votes` WHERE 0