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
	$.post('prj.php',{a:document.getElementById("j1").value,
		b:document.getElementById("j2").value,
		c:document.getElementById("j3").value},
		function(data){
		$('#s').html(data);
		});			
};
</script>

<form  method="post" id="editorForm" class="pure-form pure-form-stacked">

<div id="question">
<h1>سوال موردنظر</h1>
</div>

<div id="answer">
<label><input Id="j1" type="radio" name="rb" value="rb1"/>پاسخ 1 </label>
<br>
<label><input Id="j2" type="radio" name="rb" value="rb2"/>پاسخ 2</label>
<br>
<label><input Id="j3" type="radio" name="rb" value="rb3"/>پاسخ 3 </label>
</div>

<div id="check">
<button class="pure-button" onclick="send(this.value);">ثبت </button>
</div>
</form>
</body>
