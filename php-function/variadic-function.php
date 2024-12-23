<?php
function addnumbers (...$nums){
    $n=0;
    $count = count($nums);
    for ($i = 0; $i < $count; $i++) {
        $n = $n + $nums[$i];
    }
    return $n;
}

$sumOfArguments = addnumbers(2,2,2,2);
echo $sumOfArguments;
?>