<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editor</title>
    <link rel="stylesheet" href="../common/pure.css"/>
    <script src="../common/jquery.min.js"></script>
	
</head>
<body>
<script language="javascript" src="jquery.min.js"></script>
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

<form  method="post" id="editorForm" class="pure-form pure-form-stacked">

<div id="question">
<h1>نظر شما در مورد شیوه نوین آموزش در مدارس چیست؟</h1>
</div>

<div id="answer">
<label><input Id="j1" type="radio" name="rb" value="rb1"/>عالی</label>
<br>
<label><input Id="j2" type="radio" name="rb" value="rb2"/>خوب</label>
<br>
<label><input Id="j3" type="radio" name="rb" value="rb3"/>متوسط</label>
<br>
<label><input Id="j3" type="radio" name="rb" value="rb3"/>بد</label>

</div>

<div id="check">
<button class="pure-button" onclick="send(this.value);">ثبت </button>
</div>
</form>
</body>
