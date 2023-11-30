El fragmento de código PHP que proporcionaste realiza operaciones aritméticas básicas con la variable `$edad` e imprime mensajes que muestran el cambio en su valor. Aquí está el código y su explicación:

```php
<?php
    $edad = 45;
    echo "Tu edad es de " . $edad . " años<br>"; // Imprime la edad inicial

    $edad++; // Incrementa el valor de $edad en 1
    echo "Tu edad es de " . $edad . " años<br>"; // Imprime la edad aumentada en 1

    $edad--; // Decrementa el valor de $edad en 1
    echo "Tu edad es de " . $edad . " años<br>"; // Imprime la edad reducida en 1
?>
```

Explicación:

- `$edad = 45;`: Asigna el valor `45` a la variable `$edad`.

- `echo "Tu edad es de " . $edad . " años<br>";`: Muestra el valor inicial de `$edad` (que es `45`) concatenado con el texto "Tu edad es de " y la cadena " años" seguida de un salto de línea HTML (`<br>`).

- `$edad++;`: Utiliza el operador de incremento `++` para aumentar el valor de `$edad` en 1. Después de esta línea, el valor de `$edad` será `46`.

- `echo "Tu edad es de " . $edad . " años<br>";`: Muestra el nuevo valor de `$edad` (que es `46`) después de haber sido incrementado.

- `$edad--;`: Utiliza el operador de decremento `--` para disminuir el valor de `$edad` en 1. Después de esta línea, el valor de `$edad` volverá a ser `45`.

- `echo "Tu edad es de " . $edad . " años<br>";`: Muestra el valor de `$edad` de nuevo después de haber sido decrementado.

En resumen, el código muestra cómo se puede incrementar y decrementar el valor de una variable numérica en PHP utilizando los operadores de incremento `++` y decremento `--`, respectivamente. Además, se imprimen mensajes que muestran el valor inicial, el valor aumentado en 1 y el valor disminuido en 1 de la variable `$edad`.