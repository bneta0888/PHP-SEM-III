<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 1;
    for($i; $i<10;$i++){
        if($i==5){
            break;
        }
        echo("The numebr is $i");
    }
    echo("out of loop");
    ?>
</body>
</html>