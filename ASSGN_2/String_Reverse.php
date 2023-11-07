<?php
function reverseString($str) {
    return strrev($str);
}

$string = "Hello, World!";
$reversedString = reverseString($string);
echo $reversedString;

?>