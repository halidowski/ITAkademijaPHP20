<?php

$xml = new DOMDocument();
$xml->load("00_drzava.xml");

$drzave = $xml->getElementsByTagName("drzava");

$bih = $drzave->item(0);

foreach($drzave as $drzava){

    echo $drzava->getElementsByTagName("naziv")->item(0)->nodeName . ": ";
    echo $drzava->getElementsByTagName("naziv")->item(0)->nodeValue . ": ";
    echo "<br>";
    echo $drzava->getElementsByTagName("glavniGrad")->item(0)->nodeName . ": ";
    echo $drzava->getElementsByTagName("glavniGrad")->item(0)->nodeValue . ": ";
    echo "<br>";
    echo $drzava->getElementsByTagName("opis")->item(0)->nodeName . ": ";
    echo $drzava->getElementsByTagName("opis")->item(0)->nodeValue . ": ";
    echo "<br><br>";
}

?>