<?php
include_once 'functions.php';
include_once 'config.php';
// include_once 'functions.php';
$errorMsg = false; // error message
$successMsg = false; // success message


if (isset($_POST['btnSubmit'])) {
  insertVote($_POST['rdbSurvey']);
}



if (isset($_POST['btnLogin'])) {
  session_start();
  echo ('btnLogin is pressed!!!!!');
// if (isset($_POST['login'])) {
    if (login($_POST['username'], $_POST['password'])) {
        redirectTo('index.php');
    } else {
        $errorMsg = 'نام کاربری یا رمز وارد شده اشتباه است .';
    }
}

if (isset($_POST['btnRegister'])) {
  if(register($_POST['username'], $_POST['password'])){
  redirectTo('index.php');
}
else{
  // redirectTo('index.php');

  $errorMsg="خطایی رخ داده است، لطفا دوباره تلاش کنید.";
}
}


if (isset($_GET['logout'])) {
    logout();
}
