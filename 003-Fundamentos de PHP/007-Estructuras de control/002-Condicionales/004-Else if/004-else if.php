<?php
    $edad = 45;
    if($edad < 10){
        echo "eres un niño";
    }else if($edad >= 10 && $edad < 30){
        echo "eres un joven";
    }else if($edad >= 30 && $edad < 70){
        echo "ya no eres un niño";
    }else if($edad >= 70){
        echo "eres un senior";
    }
    
?>
