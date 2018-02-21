<?php
// apsirasome class'e Point
class Point {

    public $x;
    public $y;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
    }
    // apsirasome funkcija set, kuri nurodo pradinio tasko koordinates
    public function set($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}


?>
