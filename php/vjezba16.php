<?php

    #Useri koje imamo u sistemu
    $user = 1;
    $admin = 2;
    $superadmin = 4;

    #User koji se loguje
    $loggedUser = 2;
    $allowedUsers = $admin | $superadmin;
    #0011            0001  |     0010      
    
    if(($loggedUser & $allowedUsers) !=0){
        echo "This user is allowed";
    }else{
        echo "User is not allowed";
    }

    #Matematika rješenja
    #$allowedUsers 0011
    #$loggedUser   0010
    #Vršite operaciju AND
    #Rezultat      0010
    #Što je ustvari 2 != 0
    #Binarni brojevi



?>