<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<script language="javascript" src="jquery.min.js"></script>
<script language="javascript">
function send(t){
	$.post('cal2.php',{a:document.getElementById("adadeaval").value,
		b:document.getElementById("adadedovom").value,
		d:document.getElementById("adadesevom").value,
		op1:$('#op1').val(),
		// op1:document.getElementById("op1").val(),
		op2:$("#op2").val(),
		// op2:document.getElementById("op2").val(),
		},
		function(data){
		$('#s').html(data);
		});
};
</script>
(
<input type="text" id="adadeaval" maxlength="6" size="10"/>
<select id="op1">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
<input type="text" id="adadedovom" maxlength="6" size="10"/>
)
<select id="op2">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
<input type="text" id="adadesevom" maxlength="6" size="10"/>
<label id="s">
=
</label>
<br />
<input type="button" value="محاسبه" onclick="send();"/>
<!-- <input type="button" value="-" onclick="send(this.value);"/>
<input type="button" value="*" onclick="send(this.value);"/>
<input type="button" value="/" onclick="send(this.value);"/> -->

<!-- <button name="btnCalc" class="pure-button center" type="submit" >محاسبه </button> -->

</body>
</html>
