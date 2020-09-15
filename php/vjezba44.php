<?php

$niz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$nizDva = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);


for($i = 0; $i < count($niz); $i++){
    
    for($j = 0; $j < count($niz[$i]); $j++){

        echo $niz[$i][$j] + $nizDva[$i][$j];
    }
    echo "<br>";
}

?>