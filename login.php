<?php
require_once 'main.php';
include_once 'actions.php';
include_once 'functions.php';


?>
<!doctype html>
<html lang="en" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title><?php echo QA_TITLE; ?></title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>
</head>
<body>
<?php if (isLoggedin()):
	redirectTo('index.php');
	?>
	<!-- <div class="info">
					<span class="adminName">خوش آمدی <?php echo QA_ADMIN_DISPLAYNAME; ?> عزیز</span>
					<a class="logout" href="<?php echo QA_HOME_URL . '?logout=1'; ?>">خروج</a>
			</div> -->
	<?php else: ?>

<form class="pure-form" action="" method="post">
    <fieldset>
        <legend>برای ورود کلمه نام کاربری و کلمه عبور خود را وارد کنید.</legend>

        <input name-"username" type="text" placeholder="نام کاربری">
        <input name="password" type="password" placeholder="کلمه عبور">


				<button id="btnLogin" class="pure-button center" type="submit" >ورود </button>

        <!-- <input value="ورود" name="btnLogin" type="submit" class="pure-button pure-button-primary"></button> -->
    </fieldset>
</form>
<?php endif;?>
</body>
</html>
