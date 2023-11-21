<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($temperatures);
$length = count($temperatures);
$sum = array_sum($temperatures);
$average = $sum / $length;
$lowest_temperatures = array_slice($temperatures, 0, 5);
$highest_temperatures = array_slice($temperatures, -5);
echo "Average temperature: " . $average . "<br>";
echo "Five lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";
echo "Five highest temperatures: " . implode(", ", $highest_temperatures);
?>