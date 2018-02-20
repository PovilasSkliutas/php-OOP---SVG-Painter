<?php

// apsirasome klase SvgRenderer
class SvgRenderer {
    // apsirasome savybes
    public $elements;

    // apsirasome konstruktoriu, kuris buna iskviestas vos tik sukuriamas SvgRenderer objektas
    function __construct() {
        $this->elements = [];
    }

    // function witch draws rectangle
    public function drawRectangle($x, $y, $width, $height, $color, $opacity) {
        $svg = '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" style="fill:'.$color.'" opacity= "'.$opacity.'"/>';

        array_push($this->elements, $svg);
    }
    // function witch draws circle
    public function drawCircle($x, $y, $radius, $color, $opacity) {
        $svg = '<circle cx="'.$x.'" cy="'.$y.'" r="'.$radius.'" style="fill:'.$color.'" opacity= "'.$opacity.'" />';

        array_push($this->elements, $svg);
    }
    // function witch draws ellipse
    public function drawEllipse($x, $y, $radiusX, $radiusY, $color, $opacity) {
        $svg = '<ellipse cx="'.$x.'" cy="'.$y.'" rx="'.$radiusX.'" ry="'.$radiusY.'" style="fill:'.$color.'" opacity= "'.$opacity.'" />';

        array_push($this->elements, $svg);
    }
    // function witch draws poligon (trikampi)
    public function drawPolygon($points, $color, $opacity) {
        $svg = '<polygon points="'.$points.'" style="fill:'.$color.'" opacity= "'.$opacity.'" />';

        array_push($this->elements, $svg);
    }


<polygon points="60,135 240,350 60,350" style="fill: #a040a0" opacity= "0.75" />

    // runs graphic engine
    public function run() {

        //echo "engine is running...";
        $svg = '<svg width="1000" height="700" style="border:1px solid black">';
        $svg .= implode('', $this->elements);
        $svg .= '</svg>';

        echo $svg;

    }

};


?>
