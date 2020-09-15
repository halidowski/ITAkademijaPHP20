<?php

    $loggedUser = 2;

    $user = 1;
    $admin = 2;

    if(($loggedUser & $admin) !=0){
        include 'menu2.php';
    }


?>