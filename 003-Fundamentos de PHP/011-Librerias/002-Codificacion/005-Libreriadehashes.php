<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            $letrasynumeros = "abcdefghijklmnopqrstuvwxyzñçáéíóúàèìòù1234567890$";
            $cadena = "";
            for($i = 0;$i<strlen($letrasynumeros);$i++){
                $cadena .=  $letrasynumeros[$i].",".sha1($letrasynumeros[$i])."<br>";
            }
            echo $cadena;
        ?>
        </body>
</html>