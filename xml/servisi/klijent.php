<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis</title>
</head>
<body>

    <form action="" method="POST">
    
        <input type="text" name="autor" placeholder="Unesi autora">

        <select name="format">
            <option value="json" selected>JSON</option>
            <option value="xml">XML</option>
        </select>

        <input type="text" name="limit" placeholder="Maximalan broj objava">
        <input type="submit" value="Dobavi vijesti">
    
    </form>

    <?php

        if(isset($_POST['autor']) && !empty($_POST['autor'])){

            $autor = $_POST['autor'];
            $format = $_POST['format'];
            if(isset($_POST['limit']) && !empty($_POST['limit'])){

                $limit = $_POST['limit'];
            }else{

                $limit = 1000;
            }

            $result = dobaviNovosti($autor, $format, $limit);
            echo $result;
        }

        function dobaviNovosti($autor, $format='json', $limit='1000'){

            $rezultat = file_get_contents(

                "http://localhost/halidhajdarevic/xml/servisi/servis.php?" .
                "autor=" . $autor .
                "&format=" . $format .
                "&limit=" . $limit
            );

            return $rezultat;
        }

    ?>

    
</body>
</html>