<?php

    include "clases/Publicacion.php";

    $entradas = [];

    array_push(
        $entradas,
        new Entrada(
            "Primera entrada",
            "Contenido de la primera entrada"
        )
    );
    array_push(
        $entradas,
        new Entrada(
            "Segunda entrada",
            "Contenido de la segunda entrada"
        )
    );
    array_push(
        $entradas,
        new Entrada(
            "Tercera entrada",
            "Contenido de la tercera entrada"
        )
    );
    for($i = 0;$i<count($entradas);$i++){ 
        echo $entradas[$i]->damePublicacion();
    }

?>