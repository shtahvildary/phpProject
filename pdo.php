<?php

function dbConnection(){
  require 'config.php';
    global $dbHost;
    global $dbUser;
    global $dbPass;
    global $dbName;
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}

function insertVote($value){
  try {
    $db=dbConnection();
	$statement = $db->prepare("INSERT INTO votes(vote) VALUE (?)");

	$statement ->execute(array($value));
	} catch ( PDOException $ex ) {
	echo $ex->getMessage();
}
}

function selectVote(){

  $db=dbConnection();
  $votesCounts=array();

  $queryWell="SELECT count(vote) FROM votes where vote=4";
  $queryGood="SELECT count(vote) FROM votes where vote=3";
  $queryMid="SELECT count(vote) FROM votes where vote=2";
  $queryBad="SELECT count(vote) FROM votes where vote=1";

  $statement = $db->prepare($queryWell);
  $statement->execute();
  $wellCounts = $statement->fetchAll(2);
  array_push($votesCounts,$wellCounts[0]['count(vote)']);

  $statement = $db->prepare($queryGood);
  $statement->execute();
  $wellCounts = $statement->fetchAll(2);
  array_push($votesCounts,$wellCounts[0]['count(vote)']);

  $statement = $db->prepare($queryMid);
  $statement->execute();
  $wellCounts = $statement->fetchAll(2);
  array_push($votesCounts,$wellCounts[0]['count(vote)']);

  $statement = $db->prepare($queryBad);
  $statement->execute();
  $badCounts = $statement->fetchAll(2);
  array_push($votesCounts,$badCounts[0]['count(vote)']);

  // var_dump($votesCounts);

  if (count($votesCounts) > 0) {

    return $votesCounts;
      // return $votes[0]['vote'];
  }
  return false;
}


function insertUser($username,$password){
try {
  $db=dbConnection();
  // $statement=$db->prepare("INSERT INTO users(username,password) VALUE ('ali','123')");
  // $statement=$db->prepare("INSERT INTO users(username,password) VALUE (':username',':password')");
  $statement=$db->prepare("INSERT INTO users(username,password) VALUES (?,?)");

    // $statement->bindParam(':username', $username);
    // $statement->bindParam(':password', $password);
   $statement->execute(array($username,$password));

    return true;
  } catch ( PDOException $ex ) {
  echo $ex->getMessage();
  return false;
 }
 }





function selectUser($username,$password){
  $db=dbConnection();
   $statement=$db->prepare("SELECT username FROM users WHERE username=? and password=?");
//  $statement=$db->prepare("SELECT username FROM users WHERE username=':username' and password=':password'");

   // $statement->bindParam(':username', $username);
    //$statement->bindParam(':password', $password);

  $statement->execute(array($username,$password));
  $user = $statement->fetchAll(2);
  if($user){
    return $user;
    //redirectTo('index.php');
  }
  return false;
}
