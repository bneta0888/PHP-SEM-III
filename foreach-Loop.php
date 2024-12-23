<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$items = array(3,3,3);
$sum = 0;

foreach ($items as $item){
    $sum += $item;
}
    echo("The sum is $sum");


?>
</body>
</html>