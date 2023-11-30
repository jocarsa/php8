<!doctype html>
<html>
    <head>
        <title>El blog de Jose Vicente</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1>El blog de Jose Vicente</h1>
        </header>
        <main>
        
        <?php

            include "clases/Publicacion.php";


            $entradas = [];
            include "datos/arrayobjetos.php";

            for($i = 0;$i<count($entradas);$i++){ 
                echo $entradas[$i]->damePublicacion();
            }

        ?>
            
        </main>
        <footer>
            <h6>(c) 2023 Jose Vicente Carratalá</h6>
        </footer>
    </body>
</html>