<?php
class Shape {
    protected $width;
    protected $height;

    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }
}

class Rectangle extends Shape {
    public function getArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(5, 10);
echo "Area of rectangle: " . $rectangle->getArea();
?>