<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    2. Ejercicio de Comentarios y Buenas Prácticas
    Escribe un script en PHP que contenga una función de llamada
    calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
    con comentarios detallados, incluyendo la explicación de la función, los parámetros y
    cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
    general del script y comentarios de una sola línea para detallar las operaciones. 
    -->
    <?php
        /*
        Utilidad: Con esta función podremos calcular el área de un rectángulo
        Parámetros:
            ancho: la medida del ancho del rectángulo
            alto: la medida del alto del rectángulo
        Retorno: Nos devolverá el área del rectángulo aplicando la fórmula matemática (a * b)
        */
        function calcularAreaRectangulo($ancho, $alto){
            return $ancho*$alto;
        }
        echo calcularAreaRectangulo(3,6); //Pintará 18
    ?>
    
</body>
</html>