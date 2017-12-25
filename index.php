<?php
require_once 'main.php';
?>
<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظرسنجی</title>

<<<<<<< HEAD
	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>
    

</head>
<body>

<script language="javascript" src="./common/jquery.min.js"></script>

<?php if (!isset($_POST['btnSubmit'])):?>
<?php insert($_POST['rdbSurvey']);?>
<div>
     <div class="pure-u-5-5">


<form  class="pure-form" method="post" id="editorForm" class="pure-form pure-form-stacked">

<div id="question">
<p>نظر شما در مورد شیوه نوین آموزش در مدارس چیست؟</p>
</div>

<div id="answer">
<label class="pure-radio"><input id="well" type="radio" name="rdbSurvey" value="4" checked/>عالی</label>
<br>
<label class="pure-radio"><input id="good" type="radio" name="rdbSurvey" value="3"/>خوب</label>
<br>
<label class="pure-radio"><input id="mid" type="radio" name="rdbSurvey" value="2"/>متوسط</label>
<br>
<label class="pure-radio"><input id="bad" type="radio" name="rdbSurvey" value="1"/>بد</label>

</div>

<div>
<button id="btnSubmit" class="pure-button center" type="submit" >ثبت </button>
</div>
</form>

</div>
</div><?php else: ?>
<div  id="diagram" >
<div  class="pure-g"><br>

	<div id="diagWell" class="pure-u-5-24"><p>عالی</p></div>
</div>
<div  class="pure-g">
	<div id="diagGood" class="pure-u-10-24"><p>خوب</p></div>
</div>
<div  class="pure-g">
	<div id="diagMid" class="pure-u-15-24"><p>متوسط</p></div>
</div>
<div  class="pure-g">
	<div id="diagBad"class="pure-u-20-24"><p>بد</p></div>
</div>
</div>
</div>
<?php endif ?>

</body>

</html>

<script language="javascript" src="./js/functions.js"></script>
=======
require 'main.php';
// require 'mysql.php';

//require 'pdo.php';

?>
>>>>>>> origin/master
