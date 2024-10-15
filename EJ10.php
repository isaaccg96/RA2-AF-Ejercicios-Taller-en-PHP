<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!--
    3. Ejercicio con Operador Ternario Anidado:
    Defina una variable llamada $calificacion que contenga un valor numérico.
    Utilice un operador ternario anidado para determinar si la calificación es
    "Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
    Imprime el resultado.
    -->
    <?php
        $calificacion = 5;
        $resultado = ($calificacion >= 90) ? "Sobresaliente" : (($calificacion >= 70) ?
        "Buena" : "Necesita mejorar");
        echo $resultado;
    ?>
</body>
</html>