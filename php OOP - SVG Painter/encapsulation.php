<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

class A {

    public $viesas = 1;
    protected $pusiau = 2;
    private $pasleptas = 3;

    public function out1()
    {
        echo $this->viesas; // veikia
        echo $this->pusiau; // veikia
        echo $this->pasleptas; // veikia
    }

}

class B extends A {

    public function out2() {
        echo $this->viesas; // veikia
        echo $this->pusiau; // veikia
        echo $this->pasleptas; // neveikia
    }

}

$a = new A();
$b = new B();

// A kalses isoreje pasiekiamos savybes
echo $a->viesas; // works
echo $a->pusiau; // not allowed
echo $a->pasleptas; // not allowed

// B kalses isoreje pasiekiama tik 'public' savybe
echo $b->viesas; // works
echo $b->pusiau; // not allowed
echo $b->pasleptas; // not allowed

?>
