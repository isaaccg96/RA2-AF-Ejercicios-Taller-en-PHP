<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    Tema 4: Operadores

    1. Ejercicio con Operadores de Asignación y Condicionales
    Declara una variable con un valor inicial de 100. Usa operadores de asignación 
    (+=, -=, etc.) para modificar su valor en diferentes etapas y luego usa una
    condicional if para determinar si el valor final es mayor o menor que 100.
    -->
    <?php
        $numero = 100;
        $numero += 3;
        $numero -= 76;
        $numero *= 5;
        if($numero > 100){
            echo "Es mayor que 100";
        }else{
            echo "Es menor que 100";
        }
    ?>
    
</body>
</html>