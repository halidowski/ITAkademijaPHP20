<?php

    #Vježba - Pređeni put

    $potrosnjaGoriva = 5;
    $stanjeRezervoara = 150;
    $ocekivanaDistanca = 1000;

    define('KM', 'kilometara');
    define('ZAP', 'litara');
    define('POT', 'litara na stotinu kilometara');

    $mogucaDistanca = $stanjeRezervoara / $potrosnjaGoriva * 100;
    $mogucaDistanca = round($mogucaDistanca, 2);

    echo $mogucaDistanca;

    $stanje = $mogucaDistanca > $ocekivanaDistanca;
    echo "Stanje: " . $stanje;

    echo "<br>";

    if($mogucaDistanca > $ocekivanaDistanca){
        $stanje = "može";
    }else{
        $stanje = "ne može";
    }

    echo "Automobil koji ima potrošnju goriva do $potrosnjaGoriva " . POT . " sa rezervoarom od $stanjeRezervoara " . ZAP . " može preći $mogucaDistanca " . KM . "!";

    echo "<br>";

    echo "Obzirom da je očekivana distanca $ocekivanaDistanca " . KM . ", ovaj automobil " . $stanje . " tu distancu preći bez sipanja goriva.";

    echo "<br>";

    $cijena_dizel = 2.5;
    $cijena_benzin = 2;

    $litara_goriva = $ocekivanaDistanca / (100 / $potrosnjaGoriva);

    $trosak_puta = $cijena_dizel * $litara_goriva;

    echo "Ako automobil ima potrošnju od " . $potrosnjaGoriva . " " . POT . " onda će mu za distancu puta od " . $ocekivanaDistanca . " " . KM . " biti potrebno " . $litara_goriva . " litara goriva. Ako automobil koristi dizel gorivo čija cijena iznosi " . $cijena_dizel . " KM po jednom litru, onda će mu za " . $litara_goriva . " litara goriva biti potrebno " . $trosak_puta . " KM."

?>