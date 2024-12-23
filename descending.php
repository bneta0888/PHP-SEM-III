<?php

$array = [8, 9, 10, 5, 4, 500];
for ($i = 0; $i < sizeof($array); $i++) {
    for ($j = $i + 1; $j < sizeof($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
foreach ($array as $i) {
    echo $i . " ";
}

?>