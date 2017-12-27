<?php
require_once 'main.php';
?>
<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظرسنجی</title>

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>


</head>
<body>

<script language="javascript" src="./common/jquery.min.js"></script>
<?php if (session_start):?>
<?php if (!isset($_POST['btnSubmit'])):?>
  <?php insert($_POST['rdbSurvey']);?>
  <?php
  $votesCounts=select();
  // var_dump($votes);
  $total=array_sum($votesCounts);
  //$votesVals[$f_key] = is_array($votes)? array_values($votes): array();
  // $votesVals=array_values(array_values($votes));
  // print_r($votesVals)

  // $votes[0]['vote']

  $wellPercent=round(($votesCounts[0]/$total),2)*100;
  //  $goodPercent=($votesVals['vote'=>'3']/$total)*100;
  //  $midPercent=($votesVals['vote'=>'2']/$total)*100;
  $badPercent=round(($votesCounts[1]/$total),2)*100;
  echo $wellPercent.$badPercent;
  ?>

<div>
     <div class="pure-u-5-5">


<form  class="pure-form" method="post" id="editorForm" class="pure-form pure-form-stacked">

<div id="question">
<p>نظر شما در مورد شیوه نوین آموزش در مدارس چیست؟</p>
</div>

<div id="answer">
<label class="pure-radio"><input id="well" type="radio" name="rdbSurvey" value="4" checked/>عالی</label>
<br>
<!-- <label class="pure-radio"><input id="good" type="radio" name="rdbSurvey" value="3"/>خوب</label>
<br>
<label class="pure-radio"><input id="mid" type="radio" name="rdbSurvey" value="2"/>متوسط</label>
<br> -->
<label class="pure-radio"><input id="bad" type="radio" name="rdbSurvey" value="1"/>بد</label>

</div>

<div>
<button id="btnSubmit" class="pure-button center" type="submit" >ثبت </button>
</div>
</form>
</div>

</div>

<div  id="diagram" >
<div  class="pure-g"><br>

  <!-- <div id="diagWell" class="pure-u-3-24" style="width=10%"><p>عالی</p></div> -->
	<div id="diagWell" class="pure-u-24-24" style="width:<?php echo $wellPercent; ?>%;"><p>عالی</p></div>
</div>
<!-- <div  class="pure-g">
	<div id="diagGood" class="pure-u-"+$goodPercent+"-24"><p>خوب</p></div>
</div>
<div  class="pure-g">
	<div id="diagMid" class="pure-u-"+$midPercent+"-24"><p>متوسط</p></div>
</div> -->
<div  class="pure-g">
	<div id="diagBad"class="pure-u-24-24" style="width:<?php echo $badPercent; ?>%;"><p>بد</p></div>
</div>
</div>
</div>
<?php else:header("Location: login.php");?>
<?php endif ?>
<?php endif ?>

</body>

</html>


<script language="javascript" src="./js/functions.js"></script>
