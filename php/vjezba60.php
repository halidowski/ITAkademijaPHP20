<?php

    interface iVrata{

        public function openDoor($side);
        public function closedDoor($side);
        public function fixDoor($side);
    }

    interface iMotor{

        public function startEngine();
        public function shutdownEngine();
        public function fixEngine();
    }



    abstract class PrevoznoSredstvo implements iVrata, iMotor{
 
        public $volan = "";
        public $tockovi = "";
        public $kocnica = "";

        public abstract function upali();
        public abstract function ugasi();
        public abstract function kreni();
        public abstract function stani();
        public abstract function vozi();

        public function openDoor($side);
        public function closedDoor($side);
        public function fixDoor($side);

        public function startEngine();
        public function shutdownEngine();
        public function fixEngine();
    }

    class Automobil extends PrevoznoSredstvo{

        public function upali(){
            "Automobil je upaljen. ";
        }
        public function ugasi(){
            "Automobil je ugašen. ";
        }
        public function kreni(){
            "Automobil je krenuo. ";
        }
        public function stani(){
            "Automobil je stao. ";
        }
        public function vozi(){
            "Automobil vozi. ";
        }
    }

    final class Volvo extends Automobil{

    }

    $xc60 = new Volvo();
?>