<?php
/*Ques 2: Write a PHP program to check Leap years between 1901 to 2016 Using 
nested if*/ 



$startYear = 1995;
$endYear = 2023;

echo "Leap years between $startYear and $endYear:<br>";

for ($year = $startYear; $year <= $endYear; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo $year . "<br>";
            }
        } else {
            echo "leap year is $year. <br>";
        }
    }
}
?>
