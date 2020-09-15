<?php
$xml = <<<XML
<?xml version="1.0" ?>
<!DOCTYPE izdanja [
    <!ATTLIST film
    id ID #IMPLIED> 
]>
<izdanja>
    <film id="1">
        <naslov>Dark knight returns</naslov>
        <reditelj>C. Nolan</reditelj>
    </film>
    <film id="2">
        <naslov>Bumblebee</naslov>
        <reditelj>T. Knigth</reditelj>
    </film>
</izdanja>

XML;

$dom = new DOMDocument();
$dom->loadXML($xml);

$filmovi = $dom->getElementsByTagName("film");

for($i = 1; $i <= $filmovi->length; $i++){

    $film = $dom->getElementById($i);
    echo $film->getAttribute("id") . ".";
    echo $film->getElementsByTagName("naslov")->item(0)->nodeValue . " - ";
    echo $film->getElementsByTagName("reditelj")->item(0)->nodeValue;
    echo "<br>";
}


?>