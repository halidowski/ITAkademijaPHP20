<?php

$x = 15;
$y = 15;
$o = 0;

for($i = 0; $i < $y; $i++){
    for($j = 0; $j < $x; $j++){

        if($i == 0 || $i == $x-1){
            echo "X";
        }else{
            if($j == 0 || $j == $y-1){
                echo "X";
            }else{
                if($j == $o){
                    echo "O";
                    continue;
                }else{
                    echo "H";
                }
            }
        }
    }
    $o = $o + 1;
    echo "<br>";
}


?>