<?php
// Swapping with an extra varibale
$a=10;
$b=20;
echo "Orignal values are : a-->".$a." b-->".$b."<br>";
$c=$a+$b;
$a=$c-$a;
$b=$c-$b;
echo "Reversed values are : a-->".$a." b-->".$b."<br>";

// Swapping without an extra variable
$a=10;
$b=20;
echo "Orignal values are : a-->".$a." b-->".$b."<br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "Reversed values are : a-->".$a." b-->".$b;

?>