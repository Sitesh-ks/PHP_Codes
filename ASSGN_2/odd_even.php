<?php
function checkOddOrEven($number) {
	if ($number % 2 == 0) {
		echo "Even";
	} else {
		echo "Odd";
	}
}

$number = 12;
echo "Number given: ".$number."<br>";
checkOddOrEven($number);
?>