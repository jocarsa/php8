<?php
    include "inc/cabecera.php";
    include "clases/Publicacion.php";

    $entradas = [];
    include "datos/arrayobjetos.php";

    for($i = 0;$i<count($entradas);$i++){ 
        echo $entradas[$i]->damePublicacion();
    }
    include "inc/piedepagina.php";
?>
            
