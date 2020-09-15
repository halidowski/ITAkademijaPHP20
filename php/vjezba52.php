<?php

    $niz = array(2, 6, 13, 28, 124, 362, 233, 47, 69);

    function sortiranje(&$niz, $smjer){

        switch($smjer){
            case "vise":
                sort($niz);
            case "nize":
                rsort($niz);
            break;
            default:
                sort($niz);
            break;
        }
    }

    sortiranje($niz, "nize");
    var_dump($niz);


?>