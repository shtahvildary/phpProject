<?php
require_once 'main.php';
include 'actions.php';
include_once 'functions.php';
include_once 'pdo.php';
include_once 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />


    <title>نظرسنجی</title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>
	<script language="javascript" src="./common/jquery.min.js"></script>

</head>
<body>
<?php
if (!isLoggedin()):
   redirectTo('login.php');

	else:?>


  <?php

  $votesCounts=selectVote();

  $total=array_sum($votesCounts);

  $wellPercent=round(($votesCounts[0]/$total),2)*100;
   $goodPercent=round(($votesCounts[1]/$total),2)*100;
   $midPercent=round(($votesCounts[2]/$total),2)*100;
  $badPercent=round(($votesCounts[3]/$total),2)*100;

  ?>
  <form class="pure-form" action="actions.php" method="post" id="barForm" >

  <div class="info">

            <span class="adminName" dir="rtl"><?php echo $_SESSION['user']. " عزیز، خوش آمدی  "; ?></span>
            <button name="btnLogout" class="pure-button center" type="submit" >خروج </button>

        </div>
      </form>
<div>
     <div class="pure-u-5-5">

<form class="pure-form" action="actions.php" method="post" id="votingForm">



<div id="question">
<p>نظر شما در مورد شیوه نوین آموزش در مدارس چیست؟</p>
</div>

<div id="answer" >
<label class="pure-radio"><input id="well" type="radio" name="rdbSurvey" value="4" checked/>عالی</label>
<br>
<label class="pure-radio"><input id="good" type="radio" name="rdbSurvey" value="3"/>خوب</label>
<br>
<label class="pure-radio"><input id="mid" type="radio" name="rdbSurvey" value="2"/>متوسط</label>
<br>
<label class="pure-radio"><input id="bad" type="radio" name="rdbSurvey" value="1"/>بد</label>

</div>

<div>
<button name="btnSubmit" class="pure-button center" type="submit" >ثبت </button>
</div>
</form>
</div>

</div>

<div  id="diagram" >
<div  class="pure-g"><br>


	<div id="diagWell" class="pure-u-24-24" style="width:<?php echo $wellPercent; ?>%;"><p><?php echo "عالی:".$wellPercent."%" ?></p></div>
</div>
<div  class="pure-g">
	<div id="diagGood" class="pure-u-24-24" style="width:<?php echo $goodPercent; ?>%;"><p><?php echo "خوب:".$goodPercent."%" ?></p></div>
</div>
<div  class="pure-g">
	<div id="diagMid" class="pure-u-24-24" style="width:<?php echo $midPercent; ?>%;"><p><?php echo "متوسط:".$midPercent."%" ?></p></div>
</div>
<div  class="pure-g">
	<div id="diagBad"class="pure-u-24-24" style="width:<?php echo $badPercent; ?>%;"><p><?php echo "بد:".$badPercent."%" ?></p></div>
</div>
</div>
</div>
<?php endif ?>

</body>
</html>


<script language="javascript" src="./js/functions.js"></script>
