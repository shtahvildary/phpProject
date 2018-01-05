<!doctype html>
<html>

<head>
    <title>شاداب تحویلداری</title>
    <p dir='rtl'>
    حل تمرینات جلسه سوم 
    </p>

</head>

<body style="font:15px tahoma; line-height:50px; padding:20px 40px; color:#555; background:#eef">
    <p dir='rtl'>
        1- برنامه ای بنویسید که میانگین اعداد 1 تا 100 را بدست آورد.
    </p>
    <?php 
     $sum=0;
     $avg=0;
       for($i=1;$i<=100;$i++){
           $sum+=$i;
       }
       $avg=$sum/2;
       echo($avg);

    ?>
    <p dir='rtl'>
        2.تابعی تعریف کنید با 3 ورودی min،max و count که به تعداد count عدد تصادفی تولید کند.
    </p>
    
 
    <?php
    
    function random($min,$max,$c){
        $a=array();
        for($i=0;sizeof($a)<$c;$i++){	
            $x=rand($min,$max);
            if(!in_array($x,$a)){
                array_push($a,$x);
            }
        }
        return $a;
    }
    printf("min=10 , max=100 , count=5");
    var_dump(random(10,100,5));
    ?>
    

</body>

</html>
