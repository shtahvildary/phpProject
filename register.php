<?php
require_once 'main.php';

?>
<!doctype html>
<html lang="en" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ثبت نام</title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>




<form class="pure-form" action="" method="post">
    <fieldset>
      <legend>برای ثبت نام، نام کاربری و کلمه عبور دلخواه خود را وارد کنید:</legend>
        
        <input name-"username" type="text" placeholder="نام کاربری">
        <input name="password" type="password" placeholder="کلمه عبور">


        <!-- <button id="btnRegister" class="pure-button center" type="submit" value="ثبت نام" > </button> -->

        <input id="btnRegister" value="ثبت نام" type="submit" class="pure-button pure-button-primary"></button>
    </fieldset>
</form>
