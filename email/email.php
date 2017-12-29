<?php include_once 'mailer.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JS Bin</title>
</head>
<body>
  <h3>فرم ارسال نظرات در وب سایت</h3>
  <form action="" method="post">
    <p>
      <label for="name">نام :</lable>
      <input type="text" name="name">
    </p>
    <p>
          <label for="name">ایمیل :</lable>
          <input type="text" name="email">
        </p>
    <p>
      <label for="name"> موضوع :</lable>
            <input type="text" name="subject">
          </p>
          <p>
            <label for="name"> شرح:</lable>
            <textarea name="content"></textarea>
          </p>
          <input  type="submit" value="ارسال" name="btnSendMail">
        </form>
      </body>
      </html>
