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

echo "<table>";

echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Name</td>";
    echo "<td>Lastname</td>";
echo "</tr>";

    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "</tr>";
        }
    }

echo "</table>";
?>