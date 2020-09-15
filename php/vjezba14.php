<?php

    #Operatori

    #Operatori dodjele =

    #Aritmetički operatori +, -, *, /, %

        #Modulo operator
            echo 12 % 2;

    #Operatori poređenja <, >, <=, >=

        #Operator jednako ==
        echo 10 == "10";

        #Operator identično ===
        echo 10 === 10;

        #Operator nije jednako !=
        echo 10 != 5;

        #Operator nije identično !==
        echo 10 !== "10";
        

    #Nadovezivanje stringova . 
        echo "Ovo " . "je " . "kompletan " . "string ";
        

    #Unarni operatori +=, -=, *=, /=, %=
        $a = 15;
        $a +=7; //$a = $a + 7;
        echo $a;

        $a -= 3;
        echo $a;

    echo "<br>";

    #Inkrement i dekrement ++, --

    $c = 10;
    echo $c++;
    echo ++$c;

    $x = 4;
    $y = $x--;
    echo ($y++)+$x;

    echo $y + $x;

    #Logički operator &&, || (ili) i ! (negacija) 

        $f = 10;
        $g = 5;
        $h = 0;

        echo "<br>";
        echo $f && $g;
        echo $f<3 && $g>3;
        echo $f<3 || $g>3;
        echo !($f<3 && $g>3);
        echo !($f<3 || $g>3);


?>