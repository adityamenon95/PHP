<?php
/*Ques 7: What will be the values of $a and $b after the code below is executed? 
Explain your answer. 
$a = '1'; 
$b = &$a; 
$b = "2$b"; 
*/

$a = '1'; // $i is a variable type of string with the value '1';
$b = &$a; // $j is the reference of the $i variable.
$b = "2$b";// $k & $j have for value the string '2' concatenate with the value of the variable $a (string '1')

echo $b;
?>