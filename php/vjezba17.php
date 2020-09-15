<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pristup stranici</title>
</head>
<body>

    <?php

    #Uloge definisane u bazi

    $student = 1;
    $profesor = 2;
    $koordinator = 4;
    $podrska = 8;

    #Korisnik koji se ulogovao i postoji u bazi

    $korisnik = 8;

    $allowedUsers = $koordinator | $podrska;

    if(($allowedUsers & $korisnik) != 0){
        ?>

            <div style="
        
            background-color: red;
            color: white;

            ">
                <p> Zona dostupna samo koordinatorima i podršci. </p>
            </div>
        
        <?php
    }
        ?>

            <div style="
        
            background-color: blue;
            color: yellow;

            ">
                <p> Zona dostupna svima. </p>
            </div>
                


    <?php

    if($korisnik & $student){
        echo "Student";
    }else if($korisnik & $profesor){
        echo "Profesor";
    }else if($korisnik & $koordinator){
        echo "Koordinator";
    }else if($korisnik & $podrska){
        echo "Podrška";
    }else{
        echo "Nepoznat korisnik!";
    }


    ?>



    
</body>
</html>