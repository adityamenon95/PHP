<?php
/*Ques 9: How can you declare the array (all type) in PHP? Explain with example 
 Covert a JSON string to array. 
*/
// Using array() function
$cars = array("Volvo", "BMW", "Toyota"); //true 1 and false 0 

echo "<pre>";
print_r($cars)."<br>";
echo "</pre>";

// Using shorthand [] syntax method
$array1 = ["koo" => "car","car" => "koo"];
echo "<pre>";
print_r($array1)."<br>";
echo "</pre>";

// index array start index [0] to incresed [1].
$array2 =array(10,20,30,40,50,80);

echo "<pre>";
print_r($array2)."<br>";
echo "</pre>";

//associative array key and pair value
$array3=array("a"=>"saffron","b"=>"white","c"=>"green");
echo "<pre>";
print_r($array3)."<br>";
echo "</pre>";

// MultiDimensional array 
$array4=array(array("audi",23,19),array("mercedes",14,12),array("hundai",13,20),array("Renault",17,15));
echo "<pre>";
print_r($array4)."<br>";
echo "</pre>";

// json string convert to an array
$jsonString = '{"name":"Aditya","age":28,"isStudent":true}';

// Convert JSON string to  an array by json_decode
$array = json_decode($jsonString,true);
echo "<pre>";
var_dump($array);
echo "<br>";
print_r($array);
echo "</pre>";

// array convert to JASON string by json_encode
$data = array(
    "name" => "Aditya",
    "age" => 28,
    "city" => "Ahmedabad"
);

// Convert an array to a JSON string
$jsonString = json_encode($data);
echo $jsonString;

?>