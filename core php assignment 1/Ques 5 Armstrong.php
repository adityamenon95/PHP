<?php
/*Ques 5: Write a program to find whether a number is Armstrong or not Write a 
program to print the below format : 
5 9 
2610 
3711 
4812
*/ 
if($_POST){
    $number=$_POST['number'];
    $b=$number;
    $sum=0;
    while($b!=0){
        $reminder=$b%10;
        $sum=$sum+($reminder*$reminder*$reminder);
        $b=$b/10;
    }if($number==$sum){
        echo "Yes $number  is an armstrong number";
    } else{
        echo "$number is not an armstrong number ";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AMSTRONG NUMBER</title>
    </head>
    <body>
    <form method="post">
    <label for="number">Enter Number</label>
    <input type="number" name="number" id="number"><br><br>
    <input type="submit" value="submit" name=submit>
    </form>        
    </body>
    </html>