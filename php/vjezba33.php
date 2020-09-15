<?php

/*
$brojac = 5;

while($brojac >= 2){

    echo "$brojac";
    $brojac--;
}
*/

/*
$brojac = 5;

do{
    echo "Number is bigger than 5 <br>";
    $brojac--;
}while($brojac >= 2);
*/


/*
for($i = 0; $i < 10; $i++){
    if($i == 5){
        continue;
    }

    if($i == 8){
    break;
    }

    echo $i . "<br>";
}
*/

for($i = 0; $i < 10; $i++){
    echo "Ulazim u  unutrašnju petlju <br>";

    for($j = 0; $j < 10; $j++){
        echo "Unutra sam već" . $j . "puta <br>";
}
    echo "Izlazim iz unutrašnje petlje <br><br>";
}



?>