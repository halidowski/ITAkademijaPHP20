<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "";

$connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection){
        die("Connection failed" . mysqli_connect_error());
    }

mysqli_set_charset($connection, "utf8");

$query = "SELECT * FROM superheroes.users";

$results = mysqli_query($connection, $query);

    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            echo "Hello, I'm " . $row['name'] . " " . $row['lastname'] . ".<br>";
        }
    }

#Odavdje radimo INSERT

/*
$queryInsert = "INSERT INTO superheroes.users (name, lastname, date) VALUES ('Tim', 'Drake', '29.12.2019.')";

    if(mysqli_query($connection, $queryInsert)){
        echo "Data inserted...";
    }
*/

#Odavdje radimo UPDATE

$queryUpdate = "UPDATE superheroes.users SET name = 'Barry', lastname = 'Alan' WHERE id = 4";

    if(mysqli_query($connection, $queryUpdate)){
        echo "Date updated...";
    }else{
        echo "Data nod updated...";
    }

#Odavdje radimo DELETE

$queryDelete = "DELETE FROM superheroes.users WHERE id =5";

    if(mysqli_query($connection, $queryDelete)){
        echo "Data deleted...";
    }else{
        echo "Data not deleted...";
    }

?>