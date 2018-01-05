<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['op1']) && isset($_POST['op2'])&& isset($_POST['d']))
// if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['op1']) && !empty($_POST['op2'])&& !empty($_POST['d']))
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$d = $_POST['d'];
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	// $first=0;

	switch($op1)
	{
		case '+' :
		$sum = $a+$b;
		// echo ' = '.$sum;
		break;
		case '-' :
		$sum = $a-$b;
		// echo ' = '.$sum;
		break;
		case '*' :
		$sum = $a*$b;
		// echo ' = '.$mul;
		break;
		case '/' :
		if($b!=0){
		$sum = $a/$b;

		echo ' = '.$sum;}
		else {
			echo "خطای تقسیم بر صفر";
		}
		break;
	}
	if(isset($sum)){
	switch($op2)
	{
		case '+' :
		$sum = $sum+$d;
		echo ' = '.$sum;
		break;
		case '-' :
		$sum = $sum-$d;

		echo ' = '.$sum;
		break;
		case '*' :
		$sum = $sum*$d;

		echo ' = '.$sum;
		break;
		case '/' :
		if($d!=0){
		$sum = $sum/$d;

		echo ' = '.$sum;}
		else {
			echo "خطای تقسیم بر صفر";
		}
		break;
	}
}
}
else
{
	echo 'لطفا اعداد را وارد کنید';
}
?>

</body>
</html>
