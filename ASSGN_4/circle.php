<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(5);
echo "Area: " . $circle->getArea() . "\n";
echo "Perimeter: " . $circle->getPerimeter() . "\n";
?>