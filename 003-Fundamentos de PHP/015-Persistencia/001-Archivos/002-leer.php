<?php
    if(isset($_GET['nombre'])){
        echo "Tu nombre es: ".$_GET['nombre']."<br>";
        $archivo = fopen("documento.txt",'a');
        fwrite($archivo,$_GET['nombre']."\n");
        fclose($archivo);
    }  
?>
<form method="GET" action="?">
    <input type="text" name="nombre">
    <input type="submit">
</form>
<h3>Listado de los nombres guardados:</h3>
<?php
    $archivo = fopen("documento.txt",'r');
    while(!feof($archivo)) {
      echo fgets($archivo) . "<br>";
    }
    fclose($archivo);
?>