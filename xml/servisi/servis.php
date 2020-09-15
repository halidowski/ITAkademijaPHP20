<?php

if(isset($_GET['autor']) && !empty($_GET['autor'])){

    $autor = $_GET['autor'];
    $format = $_GET['format'];
    $limit = $_GET['limit'];

    echo $autor . $format . $limit;

    $pdo = new PDO('mysql:host=localhost;dbname=novosti', 'root', '');
    $query = "SELECT id, autor, naslov, tekst FROM novosti WHERE autor = '{$autor}' AND status = '1' LIMIT {$limit}";
    //echo $query;
    $result = $pdo->query($query);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);

    if($format == 'json'){

        header('Content-type: aplication/json');
        $json = json_encode($result);
        print_r($json);
    }else if($format == 'xml'){

        header('Content-type: text/xml');
        echo "<posts>";
        foreach($result as $post){

            echo "<post>";
            foreach($post as $key => $value){

                echo '<' . $key . '>';
                echo $value;
                echo '</' . $key . '>';
            }
            echo "</post>";
        }
        echo "</posts>";
    }else{

        echo "Wrong format";
    }
    
}



?>