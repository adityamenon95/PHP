<?php
/*Ques 13: Use a for loop to total the contents of an integer array called numbers which 
has five elements. Store the result in an integer called total. 
*/

$numbers = [30,70,90,80,10,30];
$total = 0;

for ($j = 0; $j < count($numbers); $j++) {
    $total=$total+ $numbers[$j];
}

echo "The total is: " . $total."<br>";


$num=array(20,25,30,35,20,10,50,60);
$total=0;

for ($j=0; $j < count($num) ; $j++) { 
    $total=$total+$num[$j];
}

echo "The total is: " . $total;
?>