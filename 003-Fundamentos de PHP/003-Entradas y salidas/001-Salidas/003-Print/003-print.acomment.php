El fragmento de código PHP que has proporcionado utiliza la función `print` para mostrar contenido HTML desde PHP. Aquí está el código:

```php
<?php
    print "<h1>Contenido HTML escrito desde PHP</h1>";
?>
```

Explicación:

1. `<?php ... ?>`: Estas etiquetas delimitan el bloque de código PHP en el archivo. Todo lo que esté dentro de estas etiquetas será interpretado y ejecutado como código PHP en el servidor antes de ser enviado al navegador del usuario.

2. `print "<h1>Contenido HTML escrito desde PHP</h1>";`: La función `print` en PHP también se utiliza para mostrar texto o contenido. En este caso, se imprime un encabezado de nivel 1 (`<h1>`) con el texto "Contenido HTML escrito desde PHP" dentro de él.

Al igual que la función `echo`, `print` se utiliza para mostrar contenido en PHP. Ambas funciones tienen comportamientos similares en su funcionalidad principal: mostrar texto o contenido en el navegador. La diferencia principal entre `print` y `echo` radica en su retorno de valor: `print` devuelve 1, mientras que `echo` no devuelve ningún valor.

Cuando este código se ejecuta en un servidor web con PHP habilitado, la salida que se enviará al navegador será el texto HTML `<h1>Contenido HTML escrito desde PHP</h1>`. El navegador interpretará este código HTML y mostrará el encabezado (`h1`) con el texto en la página web resultante.