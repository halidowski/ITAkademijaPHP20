<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Učitavanje stranice</title>

    <style>
        body{ margin:0; }
        .header { width: 100%; }
        ul{ background: #b93030; margin: 0; padding: 20px; text-align: center; }
        li{ display: inline; }
        a{ text-decoration: none; color: #000; background: #eee; padding: 10px; }
    </style>
</head>
<body>
    
    <!-- Uključivanje menija i dugmića --> 
    <?php require 'header.php'; ?>

    <!-- Uključivanje samih stranica -->
    <?php
    if(isset($_GET[ 'page' ]) && !empty($_GET[ 'page' ])){
        $page = $_GET[ 'page' ];

        switch($page){
            case 1:
                require 'stranice/1.html';
            break;
            case 2:
                require 'stranice/2.html';
            break;
            case 3:
                require 'stranice/3.html';
            break;
            
            default:
                require 'stranice/1.html';
            break;
        }

    }else{
        require 'stranice/1.html';
    }


    ?>



</body>
</html>