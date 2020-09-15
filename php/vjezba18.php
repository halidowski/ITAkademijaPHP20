<?php

    #Konverzija tipova

    $broj = 749;
    $string = (string)$broj;

    echo $broj . $string;

    echo "<br>";


    $broj1 = 137;
    $broj2 = "294";

    #Trenutna promjena podatka


    echo (int)$broj2 + (int)$broj1;

    #Sačuvana promjena tipa podatka

    $broj2 = (int)$broj2;

    #Gettype() vraća tip podatka u stringu

    echo gettype($broj2);

    $vrijednost = (int)"1347";

    if(gettype($vrijednost) == "string"){
        echo "Naša vrijednost je string.";
    }else if(gettype($vrijednost) == "integer"){
        echo "Naša vrijednost je integer.";
    }else{
        echo "Naša vrijednost nije validna.";

    }


?>