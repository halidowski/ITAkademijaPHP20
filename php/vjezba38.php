<?php

    $clanovi = array(
        "student",
        "profesor",
        "koordinator",
        "lektor",
        "direktor"
    );

    $velicinaNiza = sizeof($clanovi);
        
        for($i = 0; $i < $velicinaNiza; $i++){
            echo "Ja sam " . "$clanovi[$i]" . "<br>";
        }

?>