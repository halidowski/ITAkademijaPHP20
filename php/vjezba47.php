<?php

    $niz = array(
        "Vijest 1",
        "Vijest 2",
        "Vijest 3",
        "Vijest 4",
        "Vijest 5"
    );

    function vijest($niz){
        $indeks = mt_rand(0, count($niz)-1);
        echo $niz[$indeks];
    }

    vijest($niz);

?>