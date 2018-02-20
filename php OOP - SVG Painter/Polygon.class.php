<?php

// apsirasome class'e Polygon
class Polygon extends Shape {
// apsirasome polygon savybes (properties)
    public $points = [];

// apsirasome polygon metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies polygon
    public function draw(SvgRenderer $renderer) {
        array_push($this->points, $x, $y)
        $renderer->drawPolygon($this->points,
                               $this->color,
                               $this->opacity);
    }

    // apsirasome funkcija setSize, kuri nurodo polygon ploti ir auksti
    public function setPoints($points) {
        $this->points = $points[];
    }

}

?>
