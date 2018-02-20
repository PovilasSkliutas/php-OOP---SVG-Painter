<?php

// apsirasome class'e Rectangle
class Rectangle extends Shape {
// apsirasome rectangle savybes (properties)
    public $width;
    public $height;

// apsirasome rectangle metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies rectangle
    public function draw(SvgRenderer $renderer) {
        $renderer->drawRectangle($this->x,
                                 $this->y,
                                 $this->width,
                                 $this->height,
                                 $this->color,
                                 $this->opacity);
    }

    // apsirasome funkcija setSize, kuri nurodo rectangle ploti ir auksti
    public function setSize($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

}

?>
