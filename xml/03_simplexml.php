<?php

/* Kreiranje XML texta kroz HEREDOC sintaksu */
$xmlTekst = <<<XML

    <xml>

        <el>
            Prva vrijednost elementa
        </el>
        <el>
            Druga vrijednost elementa
        </el>
        <el>
            Treća vrijednost elementa
        </el>
        <element>
            Prva vrijednost od elementa
        </element>
        <element>
            Druga vrijednost od elementa
        </element>

        <samostalni>
            Jedina vrijednost od samostalnog elementa
        </samostalni>

        <ul>
        
            <li> Prva vrijednost li elementa </li>
            <li> Druga vrijednost li elementa </li>
            <li> Treća vrijednost li elementa </li>
        
        </ul>

        <ul>
        
            <li> Prva vrijednost li elementa 2 </li>
            <li> Druga vrijednost li elementa 2 </li>
            <li> Treća vrijednost li elementa 2 </li>
        
        </ul>

    </xml>

XML;

/* Instanciranje SimpleXMLElement klasu u $xml objekat */
$xml = new SimpleXMLElement($xmlTekst);

/* Pristup prvom xml elementu pod nazivom "el" */
echo $xml->el . "<br>";

/* Pristup prvom xml elementu pod nazivom "element" */
echo $xml->element ."<br>";

/* Pristup trećem xml elementu pod nazivom "el" */
echo $xml->el[2] . "<br>";

/* Pristup samostalnom xml elementu pod nazivom "samostalni" */
echo $xml->samostalni . "<br>";

/* Ispis svih elemenata kroz var_dump da bismo vidjeli sadržaj objekta */
var_dump($xml);
echo "<br>";

/* Ispis elemenata kroz for petlju pod imenom "element" */

for($i = 0; $i < sizeof($xml->element); $i++){

    echo "For ispis: " . $xml->element[$i] . "<br>";
}

/* Ispis elemenata kroz for petlju pod imenom "el" */

for($i = 0; $i < sizeof($xml->el); $i++){

    echo "For ispis 2: " . $xml->el[$i] . "<br>";
}

/* Ispis svih elemenata kroz foreach petlju */

foreach($xml as $el){
    
    echo "Foreach ispis: " . $el . "<br>";
}

/* Ispis ugnježđenog "li" 3. elementa unutar "ul" elementa */

echo $xml->ul->li[2] . "<br>";

/* Ispis svih ugnježđenih "li" elemenata unutar "ul" elementa - for petlja */

for($i = 0; $i < sizeof($xml->ul->li); $i++){

    echo "For ispis 3: " . $xml->ul->li . "<br>";
}

/* Ispis svih ugnježđenih "li" elemenata unutar prvog "ul" elementa - for petlja */

for($i = 0; $i < sizeof($xml->ul->li); $i++){

    echo "For ispis 3: " . $xml->ul->li . "<br>";
}

/* Ispis svih ugnježđenih "li" elemenata unutar "ul" elemenata - for petlja */

for($i = 0; $i < sizeof($xml->ul); $i++){

    for($j = 0; $j < sizeof($xml->ul[$i]->li); $j++){

        echo "For ispis svih li elemenata DUPLI: " . $xml->ul[$i]->li[$j] . "<br>";
    }

}

?>