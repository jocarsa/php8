<?php

    $nombre = "Jose Vicente";
    $hash = md5($nombre);
    echo "<br>";
    echo $hash;
    $hash2 = sha1($nombre);
    echo "<br>";
    echo $hash2;
?>