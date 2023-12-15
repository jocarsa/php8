<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $letrasynumeros = "abcdefghijklmnopqrstuvwxyz1234567890$";
        $cadena = "";

        for ($i = 1; $i <= 3; $i++) {  // You can change '3' to generate longer combinations
            generateCombinations($letrasynumeros, "", $i);
        }

        function generateCombinations($charset, $prefix, $length) {
            global $cadena;
            if ($length === 0) {
                $cadena .= $prefix . "," . sha1($prefix) . "<br>";
                return;
            }
            for ($i = 0; $i < strlen($charset); $i++) {
                generateCombinations($charset, $prefix . $charset[$i], $length - 1);
            }
        }

        echo $cadena;
    ?>
</body>
</html>
