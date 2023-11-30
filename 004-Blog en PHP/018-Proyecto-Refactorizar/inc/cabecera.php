<!doctype html>
<html>
    <head>
        <title>El blog de Jose Vicente</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1>El blog de Jose Vicente</h1>
            <nav>
                <ul>
                    <?php
                        $paginas = [];
                        // Cargo el archivo json que contiene datos
                        $archivo = file_get_contents("datos/paginas.json");
                        $json = json_decode($archivo,true);
                        // Convierto los elementos JSON en Objetos de mi aplicacion
                        foreach($json as $pagina){
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
                        // Recorro los objetos y los pinto en pantalla
                        for($i = 0;$i<count($paginas);$i++){ 
                            echo $paginas[$i]->dameMenu();
                        }
                    ?>
                </ul>
            </nav>
        </header>
        <main>
        