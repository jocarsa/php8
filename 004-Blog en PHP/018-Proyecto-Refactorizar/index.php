<?php
    include "clases/Publicacion.php";
    include "inc/cabecera.php"; 
    include "inc/funciones.php";
    if(!isset($_GET['p'])){
        bucleEntradas();
    }else{
        cargaPaginaActual();
    }
    include "inc/piedepagina.php";
?>
            
