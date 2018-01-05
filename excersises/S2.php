<!doctype html>
<html>

<head>
<title>شاداب تحویلداری</title>
    <p dir='rtl'>
    حل تمرینات جلسه دوم 
    </p>
</head>

<body style="font:15px tahoma; line-height:50px; padding:20px 40px; color:#555; background:#eef">
    <p dir='rtl'>
        1- تابعی بنویسید که یک ورودی دریافت کند سپس مشخص کند که آیا ورودی از نوع بولین است یا خیر.
    </p>
    <?php 
        function isBool($input){
            if(is_bool($input))
            {
                echo "'$input' is boolean!";
            }
            else{
                echo "'$input' is not boolean!";               
            }         
        }
        isBool("Test Input");        
    ?>
    <p dir='rtl'>
        2.برنامه ای بنویسید که یک عدد تصادفی بین 100 تا 1000 دریافت کند. اگر این عدد بر 2 و 3 بخش پذیر بود در خروجی به صورت bold
        و به رنگ قرمز نمایش دهید و اگر نه به رنگ ابی خود عدد تصادفی را چاپ کند.
    </p>
    <?php 
        $num=rand(100,1000);

        if(($num%2==0)||($num%3==0) ){
            echo "<p style='color:red'><b>$num</b></p>";
        }
        else{
            echo "<p style='color:blue'>$num</p>";
    
        }
    ?>

    <p dir='rtl'>
        3.یک آرایه 5 عضوی از اعداد صحیح تعریف کنید که ایندکس آن از 10 شروع شود و سپس در خروجی آن را چاپ کند.
    </p>
    <?php
        $array=array(10=>rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10));
        //var_dump($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    ?>

</body>

</html>
