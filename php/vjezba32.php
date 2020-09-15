<?php

$mjeseci = 12;
$dana = 31;
$pocetna_godina = 1930;
$zavrsna_godina = Date('Y');

echo "<div>";

    echo "<select name ='dan'>";
        echo "<option>Dan</option>";

        for($i = 1; $i <= $dana; $i++){
            echo "<option value='{$i}' > {$i}</option>";
        }

    echo "</select>";

    echo "<select name ='mjesec'>";
        echo "<option>Mjesec</option>";

        for($j = 1; $j <= $mjeseci; $j++){
            echo "<option value='{$j}' > {$j}</option>";
        }

    echo "</select>";

    echo "<select name ='godina'>";
        echo "<option>Godina</option>";

        for($k = $pocetna_godina; $k <= $zavrsna_godina; $k++){
            echo "<option value='{$k}' > {$k}</option>";
        }

    echo "</select>";


echo "</div>";

?>