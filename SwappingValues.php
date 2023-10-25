<?php
// Swapping with an extra varibale
$a=10;
$b=20;
echo "Orignal values are : a-->".$a." b--> ".$b."<br>";
$c=$a;
$a=$b;
$b=$c;
echo "Reversed values are : a-->".$a." b-->".$b."<br>";

// Swapping without an extra variable
$a=10;
$b=20;
echo "Orignal values are : a-->".$a." b-->".$b."<br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "Reversed values are : a-->".$a." b-->".$b."<br>";

// using arithmetic operator(* and /)
function swap_without_temp($a, $b) {
    $a = $a * $b;
    $b = $a / $b;
    $a = $a / $b;
    return ("a-->".$a . " b-->" . $b);
}
echo "Orignal values are : a-->10"." b-->20"."<br>";
echo "Reversed values are ".swap_without_temp(10, 20);
?>

