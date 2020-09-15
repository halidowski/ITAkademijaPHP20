<?php

    $tekst = "abcde";
    $broj = 12345;
    $decimalni = 123.45;
    $niz = ['a','b','c','d','e'];

    var_dump($tekst);
    echo "<br>";
    var_dump($broj);
    echo "<br>";
    var_dump($decimalni);
    echo "<br>";
    var_dump($niz); 

    echo "<br>";
    print_r($niz);

    echo "<br>";
    $x = 13;
    $y = 20;
    $z = 25;
    $c = 42;

    printf("Ostalo je još %s dana...<br>", $x);
    printf("Ostalo je još %s dana, do mog %s. rođendana.<br>", $x, $x);
    printf("Prva: %s Druga: %s<br>", $x, $y);
    printf("Ja ima %b godina<br>", $z);
    printf("Ovo je karakter %c, nastao od kroja %s", $c, $c);



?>