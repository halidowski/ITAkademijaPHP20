<?php

    $podaci = array(

        "Bosna i Hercegovina" => array(

            "glavniGrad" => "Sarajevo",
            "kontinent" => "Europa"
        ),

        "Francuska" => array(

            "glavniGrad" => "Pariz",
            "kontinent" => "Europa"
        ),

        "Egipat" => array(

            "glavniGrad" => "Kairo",
            "kontinent" => "Afrika"
        ),

        "Japan" => array(

            "glavniGrad" => "Tokijo",
            "kontinent" => "Azija"
        )
    );

    $metoda = strtolower($_SERVER['REQUEST_METHOD']);

    switch($metoda){

        case "get":

                if(count($_GET == 0)){

                    print_r($podaci);
                }
                if(count($_GET > 0)){

                    print_r($podaci[$_GET['drzava']]);
                }
        break;

        case "post":

            $podaci[$_POST['drzava']] = array(

                "glavniGrad" => $_POST['glavniGrad'],
                "kontinent" => $_POST['kontinent']
            );

            print_r($podaci);
        break;

        case "put":

            $parametri = file_get_contents("php//:input");
            $parovi = explode("&", $parametri);
            $rezultat = array();
            
            foreach($parovi as $par){

                $par = explode("=", $par);
                $kljuc = $par[0];
                $vrijednost = $par[1];
                $rezultat[$kljuc] = $vrijednost;
            }

            $podaci[$rezultat['drzava']] = array(

                "glavniGrad" => $rezultat['glavniGrad'],
                "kontinent" => $rezultat['kontinent']
            );

            print_r($podaci);

        break;

        case "delete":

            unset($podaci[$_REQUEST['drzava']]);
            print_r($podaci);

        break;
    }

?>