<?php 
$num = readline("enter a number");

$rev = 0;

$temp = $num;

while ($temp != 0){
    $rem = $temp % 10;

    $rev = ($rev*10) + $rem;   

    $temp = (int)($temp/10);
}

if($num == $rev) {
    echo $num . " is palindrome ";
}
    else{
    echo $num . "not palindrome";
}
?>