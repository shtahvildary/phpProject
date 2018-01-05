<?php
session_start();
include_once 'pdo.php';
//global $name;
include_once 'config.php';
function redirectTo($addr)
{
    header("Location: $addr");
}
function login($username,$password){
	global $name;
$user=selectUser($username,$password);
  if ($user) {
    // if ($username == QA_ADMIN_USERNAME && $password == QA_ADMIN_PASSWORD) {
		//var_dump($user[0]['username']);
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user[0]['username'];
        $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
        $name=$username;


        return true;
    }
    return false;

}

function register($username,$password){
  $user=insertUser($username,$password);
  if ($user) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user['username'];
        $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
        $name=$username;
        return true;
    }
    return false;

}
function logout(){
  unset($_SESSION['login'], $_SESSION['user'], $_SERVER['REMOTE_ADDR']);
  return true;
}

function isLoggedin()
{
    return (isset($_SESSION['login'])) ? true : false;
}
 ?>
