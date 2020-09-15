<?php

    $broj = 13;

    function f(){
        #var_dump(func_get_args());

        global $broj;

        $parametri = func_get_args();
        echo $parametri[0];
        echo "<br>";
        echo $broj;
    }

    f("jedan", 2, "osamnaest", "nešto četvrto");

?>