<?php

    $x = 10;
    $y = 10;

    for($i = 0; $i < $y; $i++){
        for($j = 0; $j < $x; $j++){

            if($i == 0 || $i == $x-1){
                echo "X";
            }else{
                if($j == 0 || $j == $y-1){
                    echo "X";
                }else{
                    echo "H";
                }
            }
        }
        echo "<br>";
    }

?>