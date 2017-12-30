<?php
require_once 'main.php';
include_once 'actions.php';
include_once 'functions.php';
?>
<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظرسنجی</title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>
	<script language="javascript" src="./common/jquery.min.js"></script>

</head>
<body>
<?php if (isLoggedin()):
redirectTo('index.php')?>
<?php else: ?>
<div>
<form class="pure-form" action="actions.php" method="post">
    <fieldset>
        <legend>برای ورود کلمه نام کاربری و کلمه عبور خود را وارد کنید.</legend>

        <input name="username" type="text" placeholder="نام کاربری">
        <input name="password" type="password" placeholder="کلمه عبور">
		<button name="btnLogin" class="pure-button center" type="submit" >ورود </button>
</fieldset>
</form>
</div>
<?php endif;?>
 </body>
</html>
