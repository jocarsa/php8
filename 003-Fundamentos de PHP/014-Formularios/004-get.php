<?php
    if(isset($_GET['nombre'])){
        echo "Tu nombre es: ".$_GET['nombre']."<br>";
    }  
?>
<form method="GET" action="?">
    <input type="text" name="nombre">
    <input type="submit">
</form>