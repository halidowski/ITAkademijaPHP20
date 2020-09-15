<?php

function login(string $boja = "red"){
    echo "<form style='background-color:{$boja}; color: #FFF; text-align: center; padding: 10px;' action='#'; method:'GET'>";
    
        echo "<div>";
            echo "<label for='username'>Username</label>";
            echo "<input type='text' name='username'>";
        echo "</div>";

        echo "<div>";
            echo "<label for='password'>Password</label>";
            echo "<input type='password' name='password'>";
        echo "</div>";

        echo "<div>";
            echo "<input type='submit' value='Login'>";
        echo "</div>";

    echo "</form>";
}

login();
login("blue");
login("black");

?>