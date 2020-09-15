<?php

$arr = array(1,2,3,4,5);
$string = implode("; ", $arr);

echo "$string";
echo "<br>";

$string = "Ovo je moja jedina kuća";
$arrString = explode(" ", $string);

print_r($arrString);

?>