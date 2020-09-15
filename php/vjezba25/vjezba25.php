<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vježba 25</title>
</head>
<body>

    <?php

    $user_status = 3;

    if($user_status == 1){
        echo "<p style='background-color: green; color: white;'> Welcome administrator! </p>";
    }else if($user_status == 2){
        echo "<p style='background-color: blue; color: white;'> Welcome user! </p>";
    }else{
        echo "<p style='background-color: red; color: white;'> Unknow User Type! </p>";
    }


    ?>
    
</body>
</html>