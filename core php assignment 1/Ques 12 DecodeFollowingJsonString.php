<?php
/*Ques 12: write a PHP script which decodes the following JSON string.*/

$jsonstring = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonstring));
?>