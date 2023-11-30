<?php
    if(isset($_GET['nombre'])){
        echo "Tu nombre es: ".$_GET['nombre']."<br>";
        $archivo = fopen("documento.txt",'a');
        fwrite($archivo,$_GET['nombre']."\n");
    }  
?>
<form method="GET" action="?">
    <input type="text" name="nombre">
    <input type="submit">
</form>