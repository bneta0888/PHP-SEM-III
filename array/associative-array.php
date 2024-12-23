<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = ["name" => "Ashish", "age" => '1', "Gender" => "female"];
    echo $array["name"];
    echo "<br>";
    $array["name"] = "Sujal";

    //looping through associative array
    $arry = ["math" => "95", "science" => '1'];
    foreach ($arry as $key => $value) {
        echo $key . " " . $value . "<br>";
    }



    $arr = ["math" => 90, "science" => 99];
    array_pop($arr);
    foreach ($arr as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    unset($array["age"]);   // Delete the element associative with certain key
    foreach ($array as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    $arrr = array("science" => 45, "math" => 20);
    $arrr["science"] = 20;
    foreach ($arrr as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    $arrrr = array("science" => 45, "math" => 20, "pom" => 21, "tom" => 90);
    array_pop($arrrr);// to delete recently/lastly added item to array
     unset($arrrr["math"]);// delete on specific position

    foreach ($arrrr as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    //looping through associativr array

    $ar = array("science" => 11, "math" => 22);
    foreach ($ar as $key => $value) {
        echo "key is $key => value is $value";
    }
    ?>
</body>

</html>