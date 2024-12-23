<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=1; $i<=50; $i++){
if ($i % 2 == 0){
    echo "The number is even "  . $i ;
    echo "<br>";
}
else {
    echo "The number is odd "  .$i;
    echo "<br>";
}
}
   
    ?>
    
</body>
</html>