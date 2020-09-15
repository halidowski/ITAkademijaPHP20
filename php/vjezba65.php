<?php

try{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=localhost;dbname=users1", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    /*
    $sql = "INSERT INTO users1 (id, name, lastname, nickname) VALUES (NULL, 'Halid', 'Hajdarević','Laufer')";

    $connection->beginTransaction();
    $connection->exec($sql);
    $connection->commit();
    */

    $name = "Halid";
    $lastname = "Hajdarević";
    $nickname = "Laufer";

    $sql = $connection->prepare("INSERT INTO users1 (name, lastname, nickname) VALUES (:name, :lastname, :nickname)");
    $sql->execute([":name" => $name, ":lastname" => $lastname, ":nickname" => $nickname]);

    echo "Izvršeno";

}catch(PDOException $e){

    $connection->rollback();
    echo $e->getMessage();

}
    
    



?>