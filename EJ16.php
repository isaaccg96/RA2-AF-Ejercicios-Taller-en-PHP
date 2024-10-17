<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
</head>
<body>
    <!-- 
    1. Ejercicio con Funciones y Argumentos por Referencia:
    Define una función llamada incrementarPorValor()que acepte una variable por
    referencia y la incremente en 10. Llama a la función pasando una variable y muestra
    su valor antes y después de la llamada para ver el cambio.
    -->
    <?php
        function incrementarPorValor($numero) {
            $numero += 10;
        }  
        $numero2=10;
        echo $numero;
        incrementarPorValor($numero);
        echo $numero;
    ?>
</body>
</html>