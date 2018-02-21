<?php

// apsirasome class'e Ellipse
class Ellipse extends Shape {
    // apsirasome ellipse savybes (properties)
    public $radiusX;
    public $radiusY;

    // apsirasome constructor'iu su default reiksmemis
    public function __construct(){
        parent::__construct(); // paima parent constructoriu
        $this->radiusX = 50;
        $this->radiusY = 100;
    }

// apsirasome ellipse metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies ellipse
    public function draw(SvgRenderer $renderer) {
        $renderer->drawEllipse($this->location->x,
                               $this->location->y,
                               $this->radiusX,
                               $this->radiusY,
                               $this->color,
                               $this->opacity);
    }
    // apsirasome funkcija setRadius, kuri nurodo ellipse radius'us
    public function setRadius($radiusX, $radiusY) {
        $this->radiusX = $radiusX;
        $this->radiusY = $radiusY;
    }

}

?>
