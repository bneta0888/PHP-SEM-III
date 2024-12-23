<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  echo "Hello world <br>";

  $name = "Binita Shrestha";
  echo"I am $name <br>";

  #hello sujal

  $x=5;
  $y=5;
  echo "$x+$y <br> ";

  $x=10;
  var_dump($x );

  
  $name = "Rom";
  $Age = "29";
  $Salary = 10000;
  $isManager =  true;
  var_dump($name);
  var_dump($Age);
  var_dump($Salary)  ;

  echo "<br>";

  //array assign
  
  $array_name = array("Binita", "Sujal", "Prayush");
  var_dump($array_name);

  echo("<br>");

  //TYPE CASTING
  $Salary = 1000.99;
  $realSalary = (Integer)$Salary;
var_dump ($realSalary);

echo "<br>";

//Adding two num
$x = 2;
$y = 4;
echo $x+$y;

echo "<br>";

//CONSTANT

const API_ENDPOINT = "www.facebook.com";
echo '<a href="' . API_ENDPOINT . '"><button class="Binita">Click Me</button></a>';
echo "<br>";

//Null coalescing

$var1 = Null;
$result1 = $var1 ?? 6;
echo $result1;
echo "<br>";

$a = 1;
$b = $a = 1 ? 5 : 2;
echo $b;
 echo "<br>";




    ?>
</body>
</html>