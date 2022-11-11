<!DOCTYPE html>
<html>

<body>

  <h1>Welcome</h1>

  <?php
  echo "Hello World!<br>";
  $name = "Arnav";
  echo "name of my son is " . $name . "<br>";
  echo "the good boy is" . $name . "<br>";

  $x = 5 + 5 - 2;
  echo $x;
  echo "<br>";

  $name = "yello";
  echo "My favourite colour is" . $name . "<br>";

  $txt = "Animal";
  echo "Dog is an" . $txt;
  $x = 5;
  $y = 10.5;


  $x = 5; // global scope

  function myTest()
  {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  echo "<p>Variable x outside function is: $x</p>";
  echo "<br>";
  $x = "Hello world!";
  $y = 'Hello world!';

  echo $x;
  echo "<br>";
  echo $y;


  echo "<br>";
  $x = 123;
  var_dump($x);
  echo "<br>";




  $color = array("red", "gren", "pink");
  var_dump($color);

  echo "<br>";
  echo "STRING FUNCTION START<br>";
  echo strlen("Hello Arnav");
  echo "<br>";

  echo str_word_count("hello hello");

  echo "<br>";

  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!<br>";
  }


  $a = 5;
  $b = 10;
  if ($a > $b) {
    echo "5 is greater";
  } else {
    echo "10 is greater .<br>";
  }


  echo "PHP FUNCTUION .<br>";
  function flower()
  {
    echo "The national flower i s lotus .<br>";
    echo "Arnavs favourite flower is rose .<br>";
    echo "<br>";
  }
  flower();
  flower();
  flower();
  echo "<br>";
  echo "<br>";

  function Abc($Aanimal)
  {
    echo " $Aanimal is an animal .<br>";
  }

  Abc("dog");
  Abc("cat");
  Abc("ox");
  Abc("cow");
  Abc("tiger");



  echo "FUNCION WITH PARAMITER .<br>";

  function nameName($first, $last = "mane")
  {
    echo "This  $first  $last is family member .<br>";
  }
  nameName("arnav");
  nameName("sanjivani");
  nameName("ayush");
  nameName("aradhya");
  nameName("shyam", "mudhale");
  nameName("satish", "mudhale");



  function total($a,$b,$c){
    $x=$a+$b+$c;
    return $x;
  }
    function percentage($st){
      $per= $st/3;
      echo $per;
    }
  
  $all = total(100,200,300);
  echo $all;
  percentage($all);

  ?>

</body>

</html>