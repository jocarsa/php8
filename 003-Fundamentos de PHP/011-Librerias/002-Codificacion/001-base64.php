<?php

    $nombre = "Jose Vicente";
    echo $nombre;
    echo "<br>";
    $codificado = base64_encode($nombre);
    echo $codificado;
    echo "<br>";
    $descodificado = base64_decode($codificado);
    echo $descodificado;
    echo "<br>";
?>