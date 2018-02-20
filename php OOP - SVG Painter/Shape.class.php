<?php

// apsirasome parent class'e Shape
class Shape {
// apsirasome shape savybes (properties)
    public $x;
    public $y;
    public $color;
    public $opacity;

// apsirasome shape metodus (funkcijas)
    // apsirasome funkcija setLocation, kuri nurodo pradinio tasko koordinates
    public function setLocation($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    // apsirasome funkcija setColor, kuri nurodo shape spalva
    public function setColor($color) {
        $this->color = $color;
    }
    // apsirasome funkcija setOpacity, kuri nurodo shape skaidruma
    public function setOpacity($opacity) {
        $this->opacity = $opacity;
    }

}

?>
