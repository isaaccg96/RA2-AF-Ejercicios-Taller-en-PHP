<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- 
    Tema 3: Tipos, Variables y Constantes

    1. Ejercicio con Tipos y Conversión:
    Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
    convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
    Imprime el resultado antes y después de la conversión utilizando var_dump()para
    ver el tipo de dato.
    -->
    <?php
        $numero = "25";
        var_dump($numero);
        $numero = (int)$numero;
        var_dump($numero);
        echo $numero + 3;
    ?>

    
</body>
</html>