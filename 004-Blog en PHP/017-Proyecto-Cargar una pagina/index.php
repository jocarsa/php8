<?php
    include "clases/Publicacion.php";
    include "inc/cabecera.php"; 
    include "inc/funciones.php";
    if(!isset($_GET['p'])){
        bucleEntradas();
    }else{
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
    
    
    include "inc/piedepagina.php";
?>
            
