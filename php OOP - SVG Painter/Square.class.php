<?php

// apsirasome class'e Rectangle
class Square extends Rectangle {

    // apsirasome funkcija setSize, kuri nurodo square ploti ir auksti ($height=0 yra default reiksme)
    public function setSize($width, $height=0) {
        $this->width = $width;
        $this->height = $width;
    }

}

?>
