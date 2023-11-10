<?php
function isPalindrome($str) {
	$str = strtolower($str);
	$str = preg_replace("/[^A-Za-z0-9]/", '', $str);
	$reverse = strrev($str);
	return $str === $reverse;
}
?>