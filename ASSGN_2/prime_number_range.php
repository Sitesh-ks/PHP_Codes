<?php
$start = 1;
$end = 50;

for ($i = $start; $i <= $end; $i++) {
    $isPrime = true;
    
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j === 0) {
            $isPrime = false;
            break;
        }
    }
    
    if ($isPrime) {
        echo $i . " ";
    }
}
?>
