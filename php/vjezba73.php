<?php

    #echo $_SERVER['DOCUMENT_ROOT'];

    # Dobavljanje sadržaja
    #echo file_get_contents("vjezba33.php");

    #Upis sadržaja
    #file_put_contents("vjezba73.txt", "Ovo stvarno radi!");

    #Čitanje po redovima
    $red = fopen("vjezba70a.php", "r");
    while(!feof($red)){

        echo fgets($red);
    }

    #Dodavanje sadržaja
    $fajl = fopen("vjezba73.txt", "a");
    fwrite($fajl, "Dodatak prethodnom sadržaju");
    fclose($fajl);

    #Brisanje
    unlink("vjezba73.txt");

    #Listanje direktorija
    $dh = opendir("./");
    while (false !== ($file = readdir($dh)))
    echo $file . "<br>";

    #Kreiranje foldera
    mkdir("nas_direktorij");

?>