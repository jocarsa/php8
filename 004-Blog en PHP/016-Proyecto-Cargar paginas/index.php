<?php
    include "clases/Publicacion.php";
    include "inc/cabecera.php"; 
    include "inc/funciones.php";
    if(!isset($_GET['p'])){
        bucleEntradas();
    }else{
        echo "Pues vamos a cargar una pagina";
    }
    
    
    include "inc/piedepagina.php";
?>
            
