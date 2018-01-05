<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <!-- <title>نظرسنجی</title> -->

	<link rel="stylesheet" href="./common/myStyle.css"/>
	<link rel="stylesheet" href="./common/pure.css"/>
	<link rel="stylesheet" href="./common/styles.css"/>
	<script language="javascript" src="./common/jquery.min.js"></script>

</head>
<body>
  <form class="pure-form" action="" method="post" >

    <div>
      <div>

          <lable for="date">تاریخ: </lable>
          <input type="text" name="date" value="" />
      </div>

      <button name="btnDate" class="pure-button center" type="submit" >محاسبه </button>

    </div>
  </form>

  <?php
function timeAgo($ts)
{

    $eTime = time() - $ts;
    if ($eTime < 1) {
        return "همین الان!  ";
    }
    $arr = array(
        12 * 30 * 24 * 60 * 60 => "سال",
        30 * 24 * 60 * 60 => "ماه",
        24 * 60 * 60 => "روز",
        60 * 60 => "ساعت",
        60 => "دقیقه",
        1 => "ثانیه"
    );
    foreach ($arr as $secs => $str) {
        $d = $eTime / $secs;
        if ($d >= 1) {
            return round($d) . ' ' . $str . ' پیش';
        }
    }
}
// if(isset($_GET['date'])){
//     echo timeAgo(strtotime($_GET['date']));
if(isset($_POST["btnDate"])){
  print "تاریخ وارد شده:".$_POST['date']. "<br>";
    print timeAgo(strtotime($_POST['date'])). "<br>";
}else{
    echo 'لطفا تاریخ مورد نظر را وارد کنید...';
}
?>
</body>
</html>
