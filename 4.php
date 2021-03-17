<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.4</title>
</head>
<body style="text-align: center;width: 1300px; line-height:50px; margin: 0px auto;background-color:antiquewhite;font-size: 25px;color:brown;">
    <fieldset>
    <legend>Bài làm</legend>
    <?php
        $a = 19;
        $b = 13;
        $c = $a+$b;
        $hieu = $a-$b;
        $tich = $a*$b;
        $thuong = $a/$b;

        echo "Tổng của a= ".$a." và b= ".$b." là ".$c."<br>";
        echo "Hiệu của a= ".$a." và b= ".$b." là ".$hieu."<br>";
        echo "Tích của a= ".$a." và b= ".$b." là ".$tich."<br>";
        echo "Thương của a= ".$a." và b= ".$b." là ".$thuong."<br>";

    ?>
    </fieldset>
   
</body>
</html>