<?php
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
  $statement = $db->prepare($query);
  $statement->execute(array(10,"%mad%"));

  $votes = $statement->fetchAll(2);
  myPrintR($votes);
}
