<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php

        function add($no1, $no2){
            echo " Addition is $no1 and $no2 .<br>";
        }
        add("10","20");
        add("101","200");
        add(100,20);


        function cal($no1="20", $no2="5"){
            echo " numbers $no1 and $no2 .<br>";
        }
        cal("120","2");
        cal();

        function sum($a, $b){
            echo $a+$b;
            echo "<br>";
        }
        sum(10,10);
        sum("20","20");


        function total($eng, $math, $evs){
            $add = $eng+ $math+ $evs;
            return $add;
        }
        $all= total(10,10,10);
        echo $all;





    ?>
</body>
</html>