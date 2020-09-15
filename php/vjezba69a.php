<?php

    $name = "firstname";
    $value = "John";

    # Postavljanje cookie
    #setcookie($name, $value, time() + (60*60*24*366));

    # Brisanje cookie
    #setcookie($name, $value, time() - 300);

    # Editovanje cookie
    #setcookie($name, "Jane", time() + (60*60*24*366));

    # Ispisivanje cookie
    #var_dump($_COOKIE);

    #Error supressor operetor (@)
    #@$ime = $_COOKIE['ime'];

    if(isset($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])){

        echo $_COOKIE['firstname'];
    }

    

?>