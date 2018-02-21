<?php

// apsirasome class'e Rectangle
class Rectangle extends Shape {
    // apsirasome rectangle savybes (properties)
    public $width;
    public $height;

    // apsirasome constructor'iu su default reiksmemis
    public function __construct(){
        parent::__construct(); // paima parent constructoriu
        $this->width = 50;
        $this->height = 50;
    }

// apsirasome rectangle metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies rectangle
    public function draw(SvgRenderer $renderer) {
        try {
            $renderer->drawRectangle($this->location->x,
                                     $this->location->y,
                                     $this->width,
                                     $this->height,
                                     $this->color,
                                     $this->opacity);

        } catch (Exception $error) {
            echo $error->getMessage();
        }

    }

    // apsirasome funkcija setSize, kuri nurodo rectangle ploti ir auksti (defoult aukstis =0)
    public function setSize($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

}

?>
