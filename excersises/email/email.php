<?php include_once 'mailer.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" dir="rtl">

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <title>ارسال ایمیل</title>

  <link rel="stylesheet" href="../common/myStyle.css"/>
  <link rel="stylesheet" href="../common/pure.css"/>
  <link rel="stylesheet" href="../common/styles.css"/>
  <script language="javascript" src="../common/jquery.min.js"></script>

</head>
<body>
  <h3>فرم ارسال نظرات در وب سایت</h3>
  <form class="pure-form" action="mailer.php" method="post">
    <div>
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
        </div>
        </form>
      </body>
      </html>
