El código PHP que has proporcionado utiliza la función `echo` para imprimir contenido HTML desde PHP. Aquí tienes el código:

```php
<?php
    echo "<h1>Contenido HTML escrito desde PHP</h1>";
?>
```

Explicación:

1. `<?php ... ?>`: Estas etiquetas delimitan el bloque de código PHP en el archivo. Todo lo que esté dentro de estas etiquetas será interpretado y ejecutado como código PHP en el servidor antes de ser enviado al navegador del usuario.

2. `echo "<h1>Contenido HTML escrito desde PHP</h1>";`: La instrucción `echo` en PHP se utiliza para imprimir o mostrar texto o variables. En este caso, se muestra un encabezado de nivel 1 (`<h1>`) con el texto "Contenido HTML escrito desde PHP" dentro de él.

Cuando este código se ejecuta en un servidor web con PHP habilitado, la salida que se enviará al navegador será el texto HTML `<h1>Contenido HTML escrito desde PHP</h1>`. El navegador interpretará este código HTML y mostrará el encabezado (`h1`) con el texto en la página web resultante.

Esta técnica es común en PHP cuando se necesita generar contenido HTML dinámicamente, permitiendo que el código PHP genere partes o la totalidad del contenido HTML que se muestra en la página web.