<?php

//Ova funkcija ispisuje nešto

function nekiNazivFunkcije(){
    echo "Pozdrav iz funkcije";
}

//Ova f-ja vraća nešto

function drugaFunkcija(){
    return "Hello iz funkcije";
}

//Poziv f-ja

nekiNazivFunkcije();
echo $rezultat = drugaFunkcija();

echo "<br>";

function trecaFunkcija($ime){

    echo "Ja se zovem " . $ime . "<br>";
}

trecaFunkcija("Halid");
trecaFunkcija("Arif");
trecaFunkcija("Nedim");

echo "<br>";

function cetvrta_funkcija($ime = "Dževad Pleh"){

    echo "Upravnik je " . $ime . ". Hvala upravniče!";
    echo date("d-m-Y");
}

cetvrta_funkcija("Džakmić");


?>