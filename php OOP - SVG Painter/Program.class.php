<?php

// apsirasome klase Program
class Program {

    public function run(SvgRenderer $renderer) { // class 'SvgRenderer' injection

        echo "Program is running...</br>";
        // piesiame raudona staciakampi <rect x="50" y="75" width="250" height="120" style="fill: #b12122" opacity= "0.7"  />
        $rectangle1 = new Rectangle();
        $rectangle1->location->set(50, 75);
        $rectangle1->setSize(250, 120);
        $rectangle1->setColor('#b12122');
        $rectangle1->setOpacity(0.7);
        $rectangle1->draw($renderer);

        // piesiame melyna kvadrata <rect x="450" y="290" width="120" height="120" style="fill: #82dbff" opacity= "0.7"  />
        $square = new Square();
        $square->location->set(450, 290);
        $square->setSize(200);
        $square->setColor('#82dbff');
        $square->draw($renderer);

        // piesiame apskritima <circle cx="350" cy="350" r="200" style="fill: #fef2aa" opacity= "0.7" />
        $circle = new Circle();
        $circle->location->set(350, 350);
        $circle->setRadius(200);
        $circle->setColor('#fef2aa');
        $circle->setOpacity(0.7);
        $circle->draw($renderer);
        // piesiame 2 apskritima <circle cx="350" cy="350" r="200" style="fill: #fef2aa" opacity= "0.7" />
        $circle->location->set(500, 500);
        $circle->setRadius(100);
        $circle->setColor('#fef2aa');
        $circle->setOpacity(0.7);
        $circle->draw($renderer);

        // piesiame elipse <ellipse cx="700" cy="250" rx="50" ry="100" style="fill: #2e8a57" opacity= "0.7" />
        $ellipse = new Ellipse();
        $ellipse->location->set(700, 250);
        $ellipse->setRadius(50, 100);
        $ellipse->setColor('#2e8a57');
        $ellipse->setOpacity(0.7);
        $ellipse->draw($renderer);
        // piesiame 2 elipse <ellipse cx="700" cy="250" rx="50" ry="100" style="fill: #2e8a57" opacity= "0.7" />
        $ellipse->location->set(700, 550);
        $ellipse->setRadius(200, 50);
        $ellipse->setColor('blue');
        $ellipse->setOpacity(0.7);
        $ellipse->draw($renderer);

        // piesiame poligona (trikampi) <polygon points="60,135 240,350 60,350" style="fill: #a040a0" opacity= "0.7" />
        $polygon = new Polygon();
        $polygon->setPoints([150,135], [240,350], [60,350]);
        $polygon->setColor('#a040a0');
        $polygon->setOpacity(0.7);
        $polygon->draw($renderer);
        // piesiame 2 poligona (trikampi) <polygon points="60,135 240,350 60,350" style="fill: #a040a0" opacity= "0.7" />
        $polygon->setPoints([300,300], [240,450], [440,450]);
        $polygon->setColor('#a040a0');
        $polygon->setOpacity(0.7);
        $polygon->draw($renderer);

        // piesiame teksta
        $text = new Text();
        $text->location->set(300, 250);
        $text->setContent('Rutuliukas');
        $text->setColor('blue');
        $text->setOpacity(1);
        $text->draw($renderer);
        // piesiame teksta
        $text->location->set(450, 400);
        $text->setContent('Kvadratukas');
        $text->setColor('blue');
        $text->setOpacity(1);
        $text->draw($renderer);



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
