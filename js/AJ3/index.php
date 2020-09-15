<?php

$a[] = "Anna";
$a[] = "Jovana";
$a[] = "Martina";
$a[] = "Diana";
$a[] = "Belma";
$a[] = "Selma";
$a[] = "Halima";
$a[] = "Eina";
$a[] = "Vezira";
$a[] = "Ona";
$a[] = "Petra";
$a[] = "Felix";
$a[] = "Galib";
$a[] = "Ines";
$a[] = "Ketty";
$a[] = "Lemana";
$a[] = "Robert";
$a[] = "Tina";
$a[] = "Una";
$a[] = "Zack";
$a[] = "Halid";
$a[] = "Halis";
$a[] = "Halil";

// Get request parametar

$q = $_REQUEST['q'];

$hint = "";

if($q !== ""){

    $q = strtolower($q);
    $len = strlen($q);

    foreach($a as $name){

        if(stristr($q, substr($name, 0, $len))){
            if($hint === ''){
                $hint = $name;
            }else{
                $hint .= ", $name";
            }
        }
    }

}

echo $hint === "" ? "No suggestion" : $hint;

?>