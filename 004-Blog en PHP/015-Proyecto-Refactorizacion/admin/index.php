<?php
    if(isset($_POST['titulo'])){
        $archivo = file_get_contents("../datos/entradas.json");
        $json = json_decode($archivo);
        array_push($json,$_POST);
        $nuevojson = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents("../datos/entradas.json",$nuevojson);
    }
?>
<h3>Nueva entrada</h3>
<form action="?" method="POST">
    <input type="text" name="titulo" placeholder="titulo">
    <input type="text" name="autor" placeholder="autor">
    <input type="date" name="fecha" placeholder="fecha">
    <input type="text" name="contenido" placeholder="contenido">
    <input type="text" name="imagen" placeholder="imagen">
    <input type="submit">
</form>