<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظرسنجی</title>
	<!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<link rel="stylesheet" href="./common/pure.css"/>
    <!-- <script src="../common/jquery.min.js"></script> -->


	
</head>
<body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script language="javascript" src="./common/jquery.min.js"></script>
<script language="javascript">
function send(t){
	$.post('survey.php',{a:document.getElementById("j1").value,
		b:document.getElementById("j2").value,
		c:document.getElementById("j3").value},
		function(data){
		$('#s').html(data);
		});			
};
</script>

<div>
     <div class="pure-u-5-5">
    

<form  class="pure-form" method="post" id="editorForm" class="pure-form pure-form-stacked">

<div id="question">
<p>نظر شما در مورد شیوه نوین آموزش در مدارس چیست؟</p>
</div>

<div id="answer">
<label class="pure-radio"><input Id="well" type="radio" name="rdbSurvey" value="4" checked/>عالی</label>
<br>
<label class="pure-radio"><input Id="good" type="radio" name="rdbSurvey" value="3"/>خوب</label>
<br>
<label class="pure-radio"><input Id="mid" type="radio" name="rdbSurvey" value="2"/>متوسط</label>
<br>
<label class="pure-radio"><input Id="bad" type="radio" name="rdbSurvey" value="1"/>بد</label>

</div>

<div>
<button class="pure-button" type="submit" onclick="vote();">ثبت </button>
</div>
</form>

</div>
</div>
<?php
function vote2(){
if (isset($_POST['submit'])) {
if(isset($_POST['rdbSurvey']))
{
echo "You have selected :".$_POST['rdbSurvey'];  //  Displaying Selected Value
}
}
}
?>
</body>

</html>

