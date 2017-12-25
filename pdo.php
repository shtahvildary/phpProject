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
function select(){
  require 'config.php';

  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query="SELECT vote FROM votes";
  $statement = $db->prepare($query);
  $statement->execute();

  $votes = $statement->fetchAll();
  if (count($votes) > 0) {
    // foreach ($votes as $key) {
    //   echo $key ;
    //
    // }
      return $votes;
  }
  return false;



}
