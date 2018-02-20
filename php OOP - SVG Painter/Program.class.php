<?php

// apsirasome klase Program
class Program {

    public function run(SvgRenderer $renderer) { // class 'SvgRenderer' injection

        echo "Program is running...</br>";
        // piesiame raudona kvadrata <rect x="50" y="75" width="250" height="120" style="fill: #b12122" opacity= "0.7"  />
        $rectangle1 = new Rectangle();
        $rectangle1->setLocation(50, 75);
        $rectangle1->setSize(250, 120);
        $rectangle1->setColor('#b12122');
        $rectangle1->setOpacity(0.7);
        $rectangle1->draw($renderer);
        // piesiame melyna kvadrata <rect x="450" y="290" width="120" height="120" style="fill: #82dbff" opacity= "0.7"  />
        $rectangle1->setLocation(450, 290);
        $rectangle1->setSize(120, 120);
        $rectangle1->setColor('#82dbff');
        $rectangle1->draw($renderer);

        // piesiame apskritima <circle cx="350" cy="350" r="200" fill="#fef2aa" />
        $circle = new Circle();
        $circle->setLocation(350, 350);
        $circle->setRadius(200);
        $circle->setColor('#fef2aa');
        $circle->setOpacity(0.7);
        $circle->draw($renderer);

        // piesiame elipse <ellipse cx="700" cy="250" rx="50" ry="100" style="fill: #2e8a57" />
        $ellipse = new Ellipse();
        $ellipse->setLocation(700, 250);
        $ellipse->setRadius(50, 100);
        $ellipse->setColor('#2e8a57');
        $ellipse->setOpacity(0.7);
        $ellipse->draw($renderer);

        // piesiame poligona (trikampi) <polygon points="60,135 240,350 60,350" style="fill: #a040a0" opacity= "0.75" />
        $polygon = new Polygon();
        $polygon->setPoints(60,135 240,350 60,350);
        $polygon->setColor('#a040a0');
        $polygon->setOpacity(0.7);
        $polygon->draw($renderer);




        // foreach (range(0, 100) as $x) {
        //     $rectangle1 = new Rectangle();
        //     $rectangle1->setLocation(rand(0, 400), rand(0, 400));
        //     $rectangle1->setSize(rand(50, 100), rand(50, 100));
        //     $rectangle1->setColor('rgb('.rand(0, 255).','.rand(0, 255).','.rand(0, 255).')');
        //     $rectangle1->setOpacity(0.5);
        //     $rectangle1->draw($renderer);
        // }


        //print_r($rectangle1);

        // $renderer->drawRectangle(0, 0, 100, 100, 'red', 0.7);
        // $renderer->drawRectangle(50, 50, 150, 150, 'blue', 0.7);
        // $renderer->drawRectangle(125, 125, 200, 200, 'gold', 0.7);
        // $renderer->drawRectangle(225, 225, 250, 250, 'green', 0.7);

        $renderer->run();

    }

}


 ?>
