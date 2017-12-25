<?php
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
  $statement = $db->prepare($query);
  $statement->execute(array(10,"%mad%"));

  $votes = $statement->fetchAll(2);
  myPrintR($votes);
}
