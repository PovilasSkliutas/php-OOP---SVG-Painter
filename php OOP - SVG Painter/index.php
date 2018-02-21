<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
// autoloud, includina visas classes
spl_autoload_register(function ($class_name) {
    include($class_name . '.class.php');
});
// arba galima paprastuoju budu includinam failus
// include 'Point.class.php';
// include 'Shape.class.php';
// include 'Rectangle.class.php';
// include 'Square.class.php';
// include 'Ellipse.class.php';
// include 'Circle.class.php';
// include 'Polygon.class.php';
// include 'Text.class.php';
// include 'Program.class.php';
// include 'SvgRenderer.class.php';
?>

<?php

 $program = new Program();
 $renderer = new SvgRenderer(1000, 700, "gray");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SVG Painter</title>
    </head>
    <body>

        <h1>My first SVG Painter</h1>
        <?php $program -> run($renderer); // svg objekta idedame i program ?>
        <!--
        <svg width="1000" height="700" style="border: 1px solid black;">
            <circle cx="350" cy="350" r="200" fill="#fef2aa" />
            <rect x="450" y="290" width="120" height="120" style="fill: #82dbff" opacity= "0.5"  />
            <rect x="50" y="75" width="250" height="120" style="fill: #b12122" opacity= "0.75"  />
            <polygon points="60,135 240,350 60,350" style="fill: #a040a0" opacity= "0.75" />
            <ellipse cx="700" cy="250" rx="50" ry="100" style="fill: #2e8a57" />
        </svg>
        -->
    </body>
</html>
