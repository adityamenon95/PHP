<?php
/*Ques 4: Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 
o 34*/


$terms = 10; // Number of terms  printed
$a= 0;
$b = 1;

echo "Fibonacci Series is : ";
echo "<br>";

echo $a. ", " . $b;

for ($j = 3; $j <= $terms; $j++) {
    $nextTerm = $a+ $b;
    echo ", " . $nextTerm;

    $a= $b;
    $b = $nextTerm;
}
?>
