<?php

class Gradevina{

    public $duzina = "";
    public $sirina = "";

    public function __construct($duzina, $sirina){

        $this->duzina = $duzina;
        $this->sirina = $sirina;
    }

    public function ispis(){
        
        echo "Moja građevina je duga " . $this->duzina . " i široka " . $this->sirina . "<br>";
    }

}

$kuca = new Gradevina(20, 10);
$zgrada = new Gradevina(30, 30);
$vikendica = new Gradevina(5, 7);

$kuca->ispis();
$zgrada->ispis();
$vikendica->ispis();



?>