<?php

include_once 'functions.php';
include_once 'config.php';
include_once 'pdo.php';


if (isset($_POST['btnSubmit'])) {

  insertVote($_POST['rdbSurvey']);
  redirectTo('index.php');

}


if (isset($_POST['btnLogin'])) {
    echo('btnLogin is pressed!!!!!');
     if(  login($_POST['username'], $_POST['password'])){
     
            redirectTo('index.php');
        } else {
         $errorMsg = 'نام کاربری یا رمز وارد شده اشتباه است .';
           echo "<div class='error'>" . nl2br($errorMsg) . "</div>";
         redirectTo('register.php');
     }
}
if (isset($_POST['btnRegister'])) {
  if(register($_POST['username'], $_POST['password'])){
  redirectTo('index.php');
}
else{
  

  $errorMsg="خطایی رخ داده است، لطفا دوباره تلاش کنید.";
    echo "<div class='error'>" . nl2br($errorMsg) . "</div>";
}
}


if (isset($_POST['btnLogout'])) {
    $isloggedOut=logout();
    if($isloggedOut){
      redirectTo('login.php');
    }
    else{
      $errorMsg="خطایی رخ داده است، لطفا دوباره تلاش کنید.";
        echo "<div class='error'>" . nl2br($errorMsg) . "</div>";

    }
}
