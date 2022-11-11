<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $color=["red","green","blue"];

   // for($c=0; $c<3; $c++){
   //     echo $color[$c] ."<br>";
   // }

    //echo $color[0] ."<br>";
    //echo $color[2] ."<br>";
    //echo $color[1];


    //echo "<pre>";
   // print_r($color);
   //echo "</pre>";

   echo "<array with forch each loop>";
   $colors=["red","green","blue","pink","black"];
   foreach($colors as $value){
    echo $value ."<br>";
   }


    ?>
</body>
</html>