<?php

// apsirasome class'e Polygon
class Polygon extends Shape {
    // apsirasome polygon savybes (properties)
    public $points;

    // apsirasome constructor'iu su defoult reiksmemis
    public function __construct(){
        parent::__construct(); // paima parent constructoriu
        $this->points = [[10,10], [100,100], [10,100]];
    }

// apsirasome polygon metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies polygon
    public function draw(SvgRenderer $renderer) {
        $renderer->drawPolygon($this->points,
                               $this->color,
                               $this->opacity);
    }

    // apsirasome funkcija setPoints, kuri nurodo polygono kampus
    public function setPoints(array $point1, array $point2, array $point3) {
        $this->points = [$point1, $point2, $point3];
    }

}

?>
