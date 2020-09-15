<?php

try{

    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=localhost;dbname=users1", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* SELECT DATA 1
    $sql = $connection->query("SELECT * FROM users1");
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){

        echo "<p>" . $row['name'] . "" . $row['lastname'] . "" . $row['nickname'] ."</p>";
    }
    */

    /* SELECT DATA 2
    $sql = $connection->query("SELECT * FROM users1")->fetchAll();
    foreach($sql as $row){

        echo "<p>" . $row['name'] . "</p>";

    }
    */

    $sql = "UPDATE users1 SET nickname = 'Halidos' WHERE users1.id = '5'";
    $connection->exec($sql);

}catch(PDOException $e){
    
    echo $e->getMessage();
    
}

?>