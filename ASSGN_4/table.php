<?php
function printMultiplicationTable($number, $times) {
	if ($times > 0) {
		printMultiplicationTable($number, $times - 1);
		$product = $number * $times;
		echo "$number * $times = $product" . PHP_EOL;
	}
}

$number = 73;
$times = 12;
printMultiplicationTable($number, $times);
?>