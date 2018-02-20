<?php

// apsirasome class'e Circle
class Circle extends Shape {
// apsirasome circle savybes (properties)
    public $radius;


// apsirasome circle metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies circle
    public function draw(SvgRenderer $renderer) {
        $renderer->drawCircle($this->x,
                             $this->y,
                             $this->radius,
                             $this->color,
                             $this->opacity);
    }
    // apsirasome funkcija setRadius, kuri nurodo circle radius
    public function setRadius($radius) {
        $this->radius = $radius;
    }

}

?>
