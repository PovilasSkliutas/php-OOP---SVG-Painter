<?php

// apsirasome class'e Text
class Text extends Shape {
    // apsirasome text savybes (properties)
    public $content;
    public $font;
    public $size;

    // apsirasome constructor'iu su default reiksmemis
    public function __construct(){
        parent::__construct(); // paima parent constructoriu
        $this->font = 'vedrana';
        $this->size = 35;
    }

// apsirasome rectangle metodus (funkcijas)
    // apsirasome funkcija draw, kuri nupies rectangle
    public function draw(SvgRenderer $renderer) {
        $renderer->drawText($this->location->x,
                                 $this->location->y,
                                 $this->content,
                                 $this->font,
                                 $this->size,
                                 $this->color,
                                 $this->opacity);
    }

    // apsirasome funkcija setSize, kuri nurodo rectangle ploti ir auksti (defoult aukstis =0)
    public function setContent($content) {
        $this->content = $content;
    }

}

?>
