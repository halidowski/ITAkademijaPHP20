<?php

$arr = array("a" => 10, "b" => 20, "c" => 30);
print_r($arr);
echo "<br>";

foreach($arr as $key => &$value){
        $value = $value + 1;
        echo "$value";
        echo "<br>";
}

print_r($arr);

?>