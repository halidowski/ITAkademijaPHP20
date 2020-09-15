<?php

    $recenica = "Bayern je Njemačka. Arsenal je Engleska. Milan je Italija. Real je Španija. PSG je Francuska.";

    $superheroji = array(
        "Bayern",
        "Arsenal",
        "Milan",
        "Real",
        "PSG"
    );

    $recenicaNiz = explode(" ", $recenica);

    foreach($recenicaNiz as $key => &$value){

        $velicinaSuperheroja = count($superheroji);
        for($i = 0; $i < $velicinaSuperheroja; $i++){

            if($value == $superheroji[$i]){
                $value = "*****";
            }
        }
    }

    print_r($recenicaNiz);

?>