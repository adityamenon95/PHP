<?php
/*Ques 11: Get random values from array
*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$RandomKey = array_rand($array); // Get a random key from an array
$RandomValue = $array[$RandomKey]; // Get the corresponding value

echo $RandomValue;
?>