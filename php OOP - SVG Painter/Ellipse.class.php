<?php

// apsirasome class'e Ellipse
class Ellipse extends Shape {
// apsirasome ellipse savybes (properties)
    public $radiusX;
    public $radiusY;


// apsirasome ellipse metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies ellipse
    public function draw(SvgRenderer $renderer) {
        $renderer->drawEllipse($this->x,
                               $this->y,
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
