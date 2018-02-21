<?php

// apsirasome klase SvgRenderer
class SvgRenderer {
    // apsirasome savybes
    public $elements;

    // apsirasome konstruktoriu, kuris buna iskviestas vos tik sukuriamas SvgRenderer objektas
    function __construct($width=500, $height=500, $color="white") {
        $this->elements = [];
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    // function witch draws rectangle
    public function drawRectangle($x, $y, $width, $height, $color, $opacity) {
        $svg = '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" style="fill:'.$color.'" opacity= "'.$opacity.'"/>';

        if ($width > $this->width || $height > $this->height) {
            // Error
            throw new Exception("Element can't be bigger than svg area", 1);
        }

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
        $svg = '<polygon points="'.$points[0][0].','.$points[0][1].' '.$points[1][0].','.$points[1][1].' '.$points[2][0].','.$points[2][1].'" style="fill:'.$color.'" opacity= "'.$opacity.'" />';

        array_push($this->elements, $svg);
    }
    // function witch draws text
    public function drawText($x, $y, $content, $font, $size, $color, $opacity) {
        $svg = '<text x="'.$x.'" y="'.$y.'" font-family="'.$font.'" font-size="'.$size.'" fill="'.$color.'" opacity= "'.$opacity.'">'.$content.'</text>';

        array_push($this->elements, $svg);
    }


    // runs graphic engine
    public function run() {

        //echo "engine is running...";
        $svg = '<svg width="'.$this->width.'" height="'.$this->height.'" style="background-color:'.$this->color.'">';
        $svg .= implode('', $this->elements);
        $svg .= '</svg>';

        echo $svg;

    }

};


?>
