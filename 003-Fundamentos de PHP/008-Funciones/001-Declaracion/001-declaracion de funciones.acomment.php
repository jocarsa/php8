El código PHP que proporcionaste define una función llamada `saluda()` que imprime el mensaje "Yo te saludo". Sin embargo, para que la función se ejecute y muestre el mensaje, debe ser invocada o llamada en algún lugar del código. Aquí tienes el código de la función y cómo se podría invocar:

```php
<?php
    function saluda() {
        echo "Yo te saludo";
    }

    // Llamando a la función
    saluda(); // Esto invocará la función y mostrará el mensaje "Yo te saludo"
?>
```

Explicación:

- `function saluda() { ... }`: Define una función llamada `saluda()`. En este caso, la función simplemente contiene una instrucción `echo` que imprime el mensaje "Yo te saludo".

- `saluda();`: Esta línea de código invoca la función `saluda()`. Cuando esta línea se ejecuta, la función se llama y ejecuta el código dentro de ella, que en este caso es la instrucción `echo "Yo te saludo";`, que imprimirá el mensaje "Yo te saludo" en el lugar donde se llame a esta función.

Si utilizas este código, al ejecutarlo verás que se imprime el mensaje "Yo te saludo". Esto sucede porque la función `saluda()` se invoca y ejecuta la instrucción `echo` dentro de ella, que muestra el mensaje por pantalla.