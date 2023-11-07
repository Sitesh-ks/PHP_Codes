<?php
function factorial($number) {
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number-1);
    }
}

$number = 5;
$result = factorial($number);
echo "Factorial of $number is: $result";
?>