<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Forms</title>
    </head>
    <style>
		[type=text],textarea{
			padding:10px;
			border:none;
			width:300px;
			color:#999;
		}
		[type=submit]{
			padding:20px 10px;
			width:410px;
			color:#999;
			margin:20px 0 0 0;
			font-size:30px;
		}
	</style>
    <body style="font:20px tahoma; line-height:50px; padding:20px 40px; color:#555; background:#eef">
		<?php

		if($_POST==null||empty($_POST["fName"])||empty($_POST["mail"])):
			$nameErr=$mailErr=$phoneErr=$urlErr=$subjectErr=$messageErr="";

			if(empty($_POST["fName"])&&$_POST!=null) $nameErr="Name is required.";
			if(empty($_POST["mail"])&&$_POST!=null) $mailErr="E-mail is required.";
       if(ISSET($_POST["fName"])){

          $n=$_POST["fName"];

			if(!preg_match("/^[a-zA-Z ]*$/",$n)) $nameErr="Name is not valid";
    }


		?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>

        <div>

            <lable for="fName">Name: </lable>
            <input type="text" name="fName" value="" /> <?php echo $nameErr; ?>
        </div>

        	<div>

            	<lable for="mail">E-mail: </lable>
            	<input type="text" name="mail" value="" /> <?php echo $mailErr; ?>
        	</div>
        	<div>

				<lable for="phone">Phone: </lable>
            	<input type="text" name="phone" value="" /> <?php echo $phoneErr; ?>
				</div>
				<div>

				<lable for="url">Url: </lable>
            	<input type="text" name="url" value="" /> <?php echo $urlErr; ?>
        	</div>
        	<div>

				<lable for="subject">Subject: </lable>
            	<td><input type="text" name="subject" value="" /> <?php echo $subjectErr; ?></td>
        	</div>
        	<div>

				<lable for="message">Message: </lable>
            	<td><textarea name="message"></textarea><?php echo $messageErr; ?></td>
        	</div>
        	<div>

            	<td colspan="2"><input type="submit" value="Send"></td>
			</div>
		</div>


        </form>
        <?php else: ?>
			<?php
				function test_input($data) {
				  $data=str_replace('\n',"\n",$data);
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  $_POST["fName"] = test_input($_POST["fName"]);
				  $_POST["mail"] = test_input($_POST["mail"]);
				  $_POST["phone"] = test_input($_POST["phone"]);
				  $_POST["url"] = test_input($_POST["url"]);
				  $_POST["subject"] = test_input($_POST["subject"]);
				  $_POST["message"] = test_input($_POST["message"]);
				}
                $result=$_POST;
                echo "<table border='1' cellpadding='10'>";
                foreach($result as $key=>$value){
                    printf("<tr><td><b>%s</b></td><td>%s</td></tr>",$key,test_input($value));
                }
                echo "</table>";
            ?>
        <?php endif; ?>
    </body>
</html>
