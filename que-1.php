<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//create a php script that defines a constant fo the value of pi and then calclulate the area of circle using this constant and the radius provided as a variable.

// Define a constant for the value of PI
define("PI", 3.14159);

// Provide the radius as a variable
$radius = 5; // You can change this value to any radius you want

// Calculate the area of the circle
$area = PI * $radius * $radius;

// Display the result
echo "The area of a circle with radius $radius is: $area";
?>

</body>
</html>