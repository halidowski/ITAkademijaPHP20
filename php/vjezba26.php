<?php

$a = 2;

switch($a){

    case 1:
    case 2:
    case 3:
    case 4:
        $message = "Welcome";
    break;

    case 5:
        $message = "What?";
    break;

    case 6:
        $message = "Who?";

    default:
        $message = "Warning";
    break;
}

echo $message;
?>