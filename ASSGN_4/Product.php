<?php
class Product {
    public $name;
    public $description;
    public $price;
}

$product1 = new Product();
$product1->name = "Computer";
$product1->description = "This is the thing in which I wrote this damn code.";
$product1->price = 84000;

echo "Name: " . $product1->name . "<br>";
echo "Description: " . $product1->description . "<br>";
echo "Price: ₹" . $product1->price . "<br>";
?>