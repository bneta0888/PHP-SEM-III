
<?php
$num = readline ("Enter a number");
$sum = 0;
$temp = $num;

while ($temp != 0){
    $rem = $temp % 10;
    $sum = $sum + pow($rem, 3);
    $temp = (int) $temp / 10;

}
    if($num == $sum) {
        echo $num . " is armstrong";
    } else {
        echo "not armstrong";
    }

    // to run php armstrong.php 
?>
