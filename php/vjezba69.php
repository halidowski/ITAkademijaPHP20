<?php

    $teams = array(

        "sarajevo" => "Ovo je tim Sarajeva.",

        "željezničar" => "Ovo je tim Željezničara.",

        "velež" => "Ovo je tim Veleža."
    );

    #Provjere da li je nešto postavljeno i da li je prazno (nije prazno)
    if(isset($_GET['team']) && !empty($_GET['team'])){

        $team=$_GET['team'];

        if(array_key_exists($team, $teams)){

            echo "<p> Opis tima: " . $teams[$team] . "</p>";
        }else{

            foreach($teams as $team){

                echo "<p> Opis tima: " . $team . "</p>";
            }
        }

    #Provjera da li je parametar postavljen ili korisnik želi sve timove
    }else if(isset($_GET['team']) && $_GET['team'] == 'all'){

        foreach($teams as $team){

            echo "<p> Opis tima: " . $team . "</p>";
        }

    #Šta se dešava ako je sve pogrešno (nije postavljen parametar i sl.)
    }else{

        echo "<p>Niste proslijedili valjan parametar, nažalost.</p>";
    }






?>