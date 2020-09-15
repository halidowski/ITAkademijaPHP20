<?php

$niz = array(
    13,
    "text",
    array(
        1,
        12,
        14
    ),
    array(
        "jedan" => "1",
        "dva" => 2,
        29
    ),
        true
    );

#Debugging
// print_r($niz);

#Pojedinačni ispis
echo $niz[1] . "<br>";
echo $niz[2][0] . "<br>";
echo $niz[3]["jedan"] . "<br>";

#Mijenjanje vrijednosti
echo $niz[1] = "Ovo je novi text <br>";
echo $niz[2][0] = "256 <br>";
echo $niz[3]["jedan"] = "Ovo je novi broj <br>";



?>