<?php
<<<<<<< HEAD
function insert($value){
require 'config.php';
  try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$statement = $db->prepare("INSERT INTO votes(vote) VALUE ( ?)");
	$statement ->execute(array($value));
	} catch ( PDOException $ex ) {
	echo $ex->getMessage();
}
}
function select($tblname){
  $query="SELECT * FROM vote";
=======
require_once 'config.php';


require_once './common/common.php';


$db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
// $sql = "INSERT INTO votes (vote) VALUES ('$_POST[rdbSurvey]')";
function insert($tblname,$value){
  // $sql = "INSERT INTO votes (vote) VALUES ('$_POST[rdbSurvey]')";
  $query="INSERT INTO `"+$dbName+"`(`"+$tblName+"`) VALUES ("+$value+")";
  $statement = $db->prepare($query);
  $statement->execute();
}
function select($tblname){
  $query="SELECT * FROM "+$tblname;
>>>>>>> origin/master
  $statement = $db->prepare($query);
  $statement->execute(array(10,"%mad%"));

  $votes = $statement->fetchAll(2);
  myPrintR($votes);
}
