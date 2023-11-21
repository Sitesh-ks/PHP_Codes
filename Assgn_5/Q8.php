<?php
$array = ["Apple", "Banana", "Orange"];

// Convert all values of an array to lower case
$array_lowercase = array_map('strtolower', $array);
print_r($array_lowercase)."<br>";

// Convert all values of an array to upper case
$array_uppercase = array_map('strtoupper', $array);
print_r($array_uppercase);
?>