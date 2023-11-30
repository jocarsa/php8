<?php
    if(isset($_POST['nombre'])){
        echo "Tu nombre es: ".$_POST['nombre']."<br>";
    }  
?>
<form method="POST" action="?">
    <input type="text" name="nombre">
    <input type="submit">
</form>