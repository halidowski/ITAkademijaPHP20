<?php

$recenica = "anavolimilovana";

function obrtanjeStringa($string){
    $niz = str_split($string);
    $niz2 = array_reverse($niz);

    $string1 = implode($niz);
    $string2 = implode($niz2);

    if($string1 === $string2){
        echo "Palindrom";
    }else{
        echo "Nije Palindrom";
    }
}

obrtanjeStringa($recenica);

?>