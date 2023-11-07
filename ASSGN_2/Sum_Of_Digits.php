<?php
function sumOfDigits($number) {
	$sum = 0;
	while ($number > 0) {
		$digit = $number % 10;
		$sum += $digit;
		$number = floor($number / 10);
	}
	return $sum;
}

$number = 12345;
$sum = sumOfDigits($number);
echo "Number as input : ".$number . "<br>";
echo "Sum of digits: " . $sum;
?>