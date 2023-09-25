<?php
/*Ques 10: Write program to remove duplicate values from array
*/

$array = [1, 2, 5, 3, 2, 1, 7, 6, 9, 8, 8];

//array_keys and array_flip is used to remove duplicates
$UniqueArray = array_keys(array_flip($array));

//it Displays  the unique values
foreach ($UniqueArray as $value) {
    echo $value . " ";
}
?>