<?php

    function codifica($cadena,$veces){
        $interno = $cadena;
        for($i = 0;$i<$veces;$i++){
            $interno = base64_encode($interno);
        }
        return $interno;
    }

    function descodifica($cadena,$veces){
        $interno = $cadena;
        for($i = 0;$i<$veces;$i++){
            $interno = base64_decode($interno);
        }
        return $interno;
    }

    $nombre = "Jose Vicente";
    $codificado = codifica($nombre,7);
    $descodificado = descodifica($codificado,7);
    echo $descodificado;
?>