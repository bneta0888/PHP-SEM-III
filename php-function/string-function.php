<?php

//false
/*$name = "      Ram";
$tocompare ="Ram";
if ($name == $tocompare){
    echo "True";


}else{
    echo "false";
}*/


//true
$name = "      Ram";
$tocompare = "Ram";
if (trim($name) == $tocompare) {
    echo "True";
} else {
    echo "false";
}







?>