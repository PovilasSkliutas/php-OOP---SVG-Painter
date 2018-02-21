<?php

// apsirasome parent class'e Shape
class Shape {
    // apsirasome shape savybes (properties)
    public $x;
    public $y;
    public $color;
    public $opacity;

    // apsirasome constructor'iu su defoult reiksmemis
    public function __construct(){
        $this->location = new Point ();
        $this->color = "black";
        $this->opacity = 1;
    }

// apsirasome shape metodus (funkcijas)
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
