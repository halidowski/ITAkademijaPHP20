<?php

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?> <automobili></automobili>");

$auto = $xml->addChild("auto");

$auto->addAttribute("id","01");
$auto->addAttribute("boja","crna");
$auto->addChild("proizvodax","Audi");
$auto->addChild("cijena","9.000");

$auto2 = $xml->addChild("auto");

$auto2->addAttribute("id","02");
$auto2->addAttribute("boja","bijela");
$auto2->addChild("proizvodax","VW");
$auto2->addChild("cijena","5.000");


echo $xml->asXML(); 

?>