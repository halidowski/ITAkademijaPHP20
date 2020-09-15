<?php

    function select_control($id, $name, $options, $selected, $styles){
        echo "<select name='{$name}'' id='{$id}'>";

            foreach($options as $key => $value){
                if($selected == $key){
                    echo "<option selected value='{$key}'>" . $value . "</option>";
                }else{
                    echo "<option value='{$key}'>" . $value . "</option>";
                }
            }
        
        echo"</select>";
    }

    $opcije = array("prva"=>1, "druga"=>2, "treca"=>3);
    select_control("opcije", "opcije", $opcije, "druga", "");


?>