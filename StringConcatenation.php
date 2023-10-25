<?php
function concatenateStrings($str1, $str2) {
    return $str1 . $str2;
}

$string1 = "Hello";
$string2 = "World";

$result = concatenateStrings($string1, $string2);
echo "Concatenated String : ".$result;
?>