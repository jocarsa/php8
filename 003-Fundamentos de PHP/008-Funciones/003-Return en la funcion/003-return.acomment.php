El código PHP que proporcionaste define una función llamada `saluda()` que retorna la cadena de texto "Yo te saludo". Luego, llama a esta función utilizando `echo` para imprimir el valor que devuelve la función. Aquí está el código y una explicación:

```php
<?php
    function saluda() {
        return "Yo te saludo";
    }

    echo saluda(); // Llamando a la función saluda() y mostrando su valor de retorno
?>
```

Explicación:

- `function saluda() { ... }`: Define una función llamada `saluda()` que utiliza la palabra clave `return` para devolver la cadena de texto "Yo te saludo" cuando la función es llamada.

- `echo saluda();`: Esta línea de código invoca la función `saluda()` y muestra en la salida el valor que devuelve la función. En este caso, la función `saluda()` retorna la cadena "Yo te saludo", que luego es impresa en la salida debido al uso de `echo`.

Al ejecutar este código, verás que se imprime "Yo te saludo" en la salida, ya que la función `saluda()` devuelve esta cadena y `echo` se encarga de mostrarla en la pantalla.