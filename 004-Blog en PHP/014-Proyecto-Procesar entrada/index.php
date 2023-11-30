<?php
    include "clases/Publicacion.php";
    include "inc/cabecera.php"; 
    // Creo un array de entradas
    $entradas = [];
    // Cargo el archivo json que contiene datos
    $archivo = file_get_contents("datos/entradas.json");
    $json = json_decode($archivo,true);
    // Convierto los elementos JSON en Objetos de mi aplicacion
    foreach($json as $entrada){
        array_push(
            $entradas,
            new Entrada(
                $entrada["titulo"],
                $entrada["contenido"],
                $entrada["fecha"],
                $entrada["autor"],
                $entrada["imagen"]
            )
        );
    }
    // Recorro los objetos y los pinto en pantalla
    for($i = 0;$i<count($entradas);$i++){ 
        echo $entradas[$i]->damePublicacion();
    }
    
    include "inc/piedepagina.php";
?>
            
