<?php
function shortest_longest_string($arr)
{
    $shortest = strlen(min($arr));
    $longest = strlen(max($arr));
    echo "Shortest string length: " . $shortest . "<br>";
    echo "Longest string length: " . $longest;
}
$arr = array("hello", "world", "php", "example");
shortest_longest_string($arr);
?>
