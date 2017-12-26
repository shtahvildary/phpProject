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

  $queryWell="SELECT count(vote) FROM votes where vote=4";
  $queryBad="SELECT count(vote) FROM votes where vote=1";
  $statement = $db->prepare($queryWell);
  $statement->execute();
  $votesCounts=array();

  // $votes = $statement->setFetchMode(PDO::FETCH_ASSOC);
  $wellCounts = $statement->fetchAll(2);
  array_push($votesCounts,$wellCounts[0]['count(vote)']);

  $statement = $db->prepare($queryBad);
  $statement->execute();
  $badCounts = $statement->fetchAll(2);
  array_push($votesCounts,$badCounts[0]['count(vote)']);

  var_dump($votesCounts);
  // $votesArray = $statement->fetchAll();
  if (count($votesCounts) > 0) {

    return $votesCounts;
      // return $votes[0]['vote'];
  }
  return false;
}

//
// var_dump ($votesArray);
// for ($i=0;$i<sizeof($votesArray);$i++) {
//
//   array_push($votes,$votesArray[$i]['vote']);
//
// }
// return $votes;
