<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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



    ?>

    
</body>
</html>
