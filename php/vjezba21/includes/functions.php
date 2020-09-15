<?php

function databaseConnector(){

    $server = "localhost";
    $username = "root";
    $password = "";
    $port = "3306";
    $database = "users";

    $connection = mysqli_connect($server, $username, $password, $database, $port);

    mysqli_set_charset($connection, "utf8");

    if(!$connection){
        die("Connection error!");
    }

    return $connection;

}

function getUser($user_id){

    $connection = databaseConnector();

    $sql = "SELECT * FROM user WHERE id = '{$user_id}'";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results) > 0){

        while($row = mysqli_fetch_assoc($results)){

            echo $row ['name'] . " '" . $row ['nickname'] . "' " . $row ['lastname'];
        } 
    }

}

function getSocial($social_name){

    $connection = databaseConnector();

    $sql = "SELECT * FROM social WHERE name = '{$social_name}' AND status = '1'";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results) > 0){

        $row = mysqli_fetch_assoc($results);

    echo "<li>";
        echo "<a href='" . $row['link'] . "' class='icon " . $row['image'] . "'>";

        echo "<span class='label'>" . $row['name'] . "</span>";

        echo "</a>";

    echo "</li>";
        } 
    }

function getRoles(){

        $connection = databaseConnector();
    
        $sql = "SELECT * FROM roles WHERE status = '1'";
    
        $results = mysqli_query($connection, $sql);

        $finalIteration = $results->num_rows;
        $counter = 1;
        $output = "";

        if(mysqli_num_rows($results) > 0){
    
            while($row = mysqli_fetch_assoc($results)){
                if($counter == $finalIteration){
                    $output .= $row['name'];

                }else{
                    $output .= $row['name'] . "&nbsp;&bull;&nbsp;";
                }
                $counter++;
            }
    
            
        } 
        echo $output;
    }

    

?>