<?php

    $username = "root";
    $password = "20root20";
    $host = "127.0.0.1";
    $database = "users";
    $port = "3311";

    $connection = mysqli_connect($host, $username, $password, $database, $port);
    if(!$connection){
        die("Could not connect: " . mysqli_error($connection));
    }

?>