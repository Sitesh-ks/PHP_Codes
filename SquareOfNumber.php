<?php
function square($number) {
    return $number * $number;
}

$number = 5; // change the value of number for desired uotput
$result = square($number);
echo "Square of " . $number . ": " . $result;
?>