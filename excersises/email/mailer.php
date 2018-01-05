<?php
function sendEmail($name,$email,$subject,$content){
ob_start();
include 'adminEmail.php';
// include 'template.php';
$html=ob_get_contents();
ob_end_clean();
$html=  str_replace('{name}',$name, $html);
$html=  str_replace('{email}',$email, $html);
$html=  str_replace('{subject}',$subject, $html);
$html=  str_replace('{content}',$content,$html);
$headers  = 'From: shadab_tahvildary@irib.ir'. "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/html; charset=utf-8' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	ini_set("SMTP","ssl://smtp.irib.ir");
	ini_set("smtp_port","465");


 return mail("shtahvildary@gmail.com","درخواست جدید در وب سایت", $html, $headers);
}

if(isset($_POST['btnSendMail']))
{

	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$subject=htmlspecialchars($_POST['subject']);
	$content=htmlspecialchars($_POST['content']);
	if(sendEmail($name,$email,$subject,$content)){
		echo "Email Has Been Sent Successfully.";
	}
	else
	{
		echo "Send Email Was Failure.";
	}

}
