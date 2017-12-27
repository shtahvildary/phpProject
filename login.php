<?php
require_once 'main.php';

	if($_POST!=null){
		session_start();
		$userName=$_POST['username'];
		$password=$_POST['password'];

		$userList="UserPass.txt";
    $loginPage="login.php";
		// $registerPage="register.php";

		if( !file_exists($userList) && !is_readable($userList) ){
			$_SESSION['error']="System Error,Try again a few minutes...<br>";
			header("Location: $loginPage");
			exit;
		}
		else{
			$users=file($userList);
			$n=count($users);
			for($i=0;$i<$n;$i++){
				$userDetail=explode(" ",$users[$i]);
				if( $userDetail[0]==$userName && rtrim($userDetail[1])==$password ){
					$_SESSION['LogedIn']="yes";
					session_regenerate_id();
					break;
				}
			}
			if( isset($_SESSION['LogedIn']) ){
				header("Location: $adminPage");
				exit;
			}
			else{
				$_SESSION['error']="Username and Password is invalid...";
				header("Location: $registerPage");
				exit;
			}
		}
	}

?>
<!doctype html>
<html lang="en" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>نظرسنجی</title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>




<form class="pure-form" action="" method="post">
    <fieldset>
        <legend>برای ورود کلمه نام کاربری و کلمه عبور خود را وارد کنید.</legend>

        <input name-"username" type="text" placeholder="نام کاربری">
        <input name="password" type="password" placeholder="کلمه عبور">



        <input value="ورود" type="submit" class="pure-button pure-button-primary"></button>
    </fieldset>
</form>
