<?php
// session_start();
include_once 'pdo.php';
function redirectTo($addr)
{
    header("Location: $addr");
}
function login($username,$password){
$user=selectUser($username,$password);
  if ($user) {
    // if ($username == QA_ADMIN_USERNAME && $password == QA_ADMIN_PASSWORD) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user['username'];
        $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
        return true;
    }
    return false;


}

function register($username,$password){
  insertUser($username,$password);
  if ($user) {
    // if ($username == QA_ADMIN_USERNAME && $password == QA_ADMIN_PASSWORD) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user['username'];
        $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
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
