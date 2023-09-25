<?php
 /*Ques 14: Declare a Multi Dimensioned array of floats called balances having Three 
 rows and five columns.
 */



$balances = array(
    array(13.50, 12.30, 15.50, 9.80, 8.20),
    array(18.60, 19.50, 20.10, 16.50, 17.50),
    array(14.50, 16.40, 19.20, 23.10, 25.60)
);

echo "In a MultiDimensional array row[2] index and column[3] index value is:";
    print_r($balances[2][3]);
    echo "<br>";
    echo "In a MultiDimensional array row[0] index and column[0] index value is:";
    print_r($balances[0][0]);
    echo "<br>";



?>
