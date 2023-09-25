<?php
/*Ques 6: Write a program for this Pattern: 
    ***** 
    *
    *
    *
    *****
*/



for ($j = 1; $j <= 5; $j++) {
        for ($k= 1; $k <= 5; $k++) {
        if ($j == 1 || $j == 5) {
            echo "* ";
        }elseif ($k== 1 || $k==5){
            echo "*<br>";
        }else{
            echo " ";
        }
    } 
} 