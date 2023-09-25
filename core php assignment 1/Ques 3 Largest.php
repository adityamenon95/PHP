<?php
/*Ques 3: Write a PHP program to find the largest of three numbers using ternary 
Operator. */
$num1 = 85;
$num2 = 10;
$num3 = 55;

$largest = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);

echo "The largest of $num1, $num2, and $num3 is: $largest";
?>
