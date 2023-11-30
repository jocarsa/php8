En PHP, los índices de un array pueden ser tanto numéricos como alfanuméricos. Los índices alfanuméricos son simplemente cadenas de texto que se utilizan como claves para acceder a los elementos de un array. Aquí hay un ejemplo que demuestra cómo se pueden utilizar índices alfanuméricos en un array:

```php
<?php
    // Crear un array con índices alfanuméricos
    $agenda = array(
        "nombre" => "James Bond",
        "codigo" => "007",
        "pelicula" => "Casino Royale"
    );

    // Acceder a los elementos del array utilizando índices alfanuméricos
    echo "Nombre: " . $agenda["nombre"] . "<br>"; // Acceso al elemento con clave "nombre"
    echo "Código: " . $agenda["codigo"] . "<br>"; // Acceso al elemento con clave "codigo"
    echo "Película: " . $agenda["pelicula"] . "<br>"; // Acceso al elemento con clave "pelicula"
?>
```

En este ejemplo:

- Se crea un array llamado `$agenda` utilizando la sintaxis de array asociativo, donde se utilizan claves alfanuméricas (como "nombre", "codigo", "pelicula") en lugar de índices numéricos.
- Cada elemento del array tiene una clave (clave => valor) que se puede acceder utilizando esa clave específica.

Los índices alfanuméricos permiten organizar y acceder a los datos de manera más descriptiva utilizando nombres significativos como claves en lugar de números. Esto facilita la comprensión del código y la manipulación de datos asociados a través de claves más intuitivas.