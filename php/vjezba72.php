<?php

    session_start();

    if(isset($_POST['boja']) && !empty($_POST['boja'])){

        $_SESSION['boja'] = $_POST['boja'];
        $boja = $_POST['boja'];

    }else if(isset($_SESSION['boja']) && !empty($_SESSION['boja'])){

        $boja = $_SESSION['boja'];

    }else{

        $boja = "#000000";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatibile" content="id-edge">

    <title>Vježba 72</title>

    <style>
    
        #obojeniElementi{

            width: 100px;
            height: 100px;
            margin: 20px;
            background-color: <?=$boja;?>; 
        }
    
    </style>
</head>

<body>

    <form action="#" method="POST">
    
        <input type="color" name="boja">
        <input type="submit" value="Odaberi boju">

    </form>

    <div id="obojeniElementi"></div>

</body>
</html>