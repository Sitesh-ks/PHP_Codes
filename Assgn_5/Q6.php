<?php
function getLargestKey($arr) {
    $largestKey = max(array_keys($arr));
    echo "Largest key in the array is: " . $largestKey;
}

$arr = array(1 => "a", 5 => "b", 3 => "c");
getLargestKey($arr);
?>