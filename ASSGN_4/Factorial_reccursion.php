<?php
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$num = 5; // replace with desired number
$result = factorial($num);
echo "Factorial of $num is $result";
?>