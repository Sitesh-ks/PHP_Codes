<?php
function divide($dividend, $divisor) {
    $negative = ($dividend < 0) ^ ($divisor < 0);
    $dividend = abs($dividend);
    $divisor = abs($divisor);
    $quotient = 0;
    
    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }
    
    return $negative ? -$quotient : $quotient;
}

$dividend = 10;
$divisor = 3;
divide($dividend, $divisor);
echo "The output is:".divide($dividend, $divisor)."<br>";
?>