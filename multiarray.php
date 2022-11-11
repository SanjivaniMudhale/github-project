<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi dimentional array</title>
</head>
<body>
    <?php

    $emp = [
        [1,"arnav","marathi",100],
        [2,"arav","marathi",99],
        [1,"sasha","marathi",80],
        [1,"sharanya","marathi",98]
    ];

    echo "<table border='2px' cellpaddind='5px' cellspacing='0px'>";

    echo "<tr>
        <th> Roll No</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Marks</th>
    </tr>";
    foreach($emp as $v1){
        echo "<tr>";
        foreach($v1 as $v2){
            echo "<td>$v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    $marks=[
        "arnav"=>[
            "marathi"=> 99,
            "evs"=> 98,
            "eng"=>95,
            "ict"=>90
        ],
        "sasha"=>[
            "marathi"=> 90,
            "evs"=> 88,
            "eng"=>95,
            "ict"=>99
        ],
        "sharanya"=>[
            "marathi"=> 87,
            "evs"=> 96,
            "eng"=>76,
            "ict"=>89
        ]
        ];
        echo "<br>";

        echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

echo "<tr> 
        <th>student name</th>,
        <th>marathi</th>,
        <th>eve</th>,
        <th>eng</th>,
        <th>ict</th>
    </tr>";
        foreach($marks as $key=>$v1){
            echo "<tr> <td>$key</td>";
            foreach($v1 as $v2){
            echo "<td> $v2 </td> ";
            
            }
            echo "</tr>";
        }
        echo "</table>";

        /*
        echo "<pre>";
        print_r($marks);
        echo "<br>"; */


/*
    for($row=0; $row<4; $row++){
        for($col=0; $col<4; $col++){
            echo $emp[$row][$col] ."  ";
        }
        echo "<br>";
    }  */

    /* echo "<pre>";
    print_r($emp);
    echo "</pre>"; */

    ?>
</body>
</html>