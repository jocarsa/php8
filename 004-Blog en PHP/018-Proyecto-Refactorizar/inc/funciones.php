<?php

    function bucleEntradas(){
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
    }
function cargaPaginaActual(){
    // Creo un array de entradas
        $paginas = [];
        // Cargo el archivo json que contiene datos
        $archivo = file_get_contents("datos/paginas.json");
        $json = json_decode($archivo,true);
        // Convierto los elementos JSON en Objetos de mi aplicacion
        foreach($json as $pagina){
            
            if($pagina["titulo"] == $_GET['p']){
                array_push(
                    $paginas,
                    new Pagina(
                        $pagina["titulo"],
                        $pagina["contenido"],
                        $pagina["fecha"],
                        $pagina["autor"],
                        $pagina["imagen"]
                    )
                );
            }
        }
        // Recorro los objetos y los pinto en pantalla
        for($i = 0;$i<count($paginas);$i++){ 
            echo $paginas[$i]->damePagina();
        }
}
?>