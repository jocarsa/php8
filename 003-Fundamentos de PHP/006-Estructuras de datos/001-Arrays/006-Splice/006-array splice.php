<?php
    
    $agenda[0] = "Jose Vicente";
    $agenda[1] = "Juan";
    var_dump($agenda);
    echo "<br>";
    array_push($agenda,"Jorge");
    var_dump($agenda);
    echo "<br>";
    array_pop($agenda);
    var_dump($agenda);
    echo "<br>";
    array_splice($agenda,0,1);
    var_dump($agenda);
?>
