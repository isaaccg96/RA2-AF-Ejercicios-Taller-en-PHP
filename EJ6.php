<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    3. Ejercicio con Variables y Constantes
    Define una constante TASA_INTEREScon el valor 0.05. Luego, escribe un script
    que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
    después de un año, utilizando la constante. Imprima el resultado con un formato
    adecuado.
    -->
    
    <?php
        define("TASA_INTERES",0.05);
        function calculoInteres($cantidad,$años){
            $interes = $cantidad * TASA_INTERES * $años;
            echo "El interés simple de la cantidad: " . $cantidad . " durante " . $años . 
                 " año/s es de :" . $interes . " siendo la tasa de un " . TASA_INTERES . "%";
        }
        calculoInteres(1000,1);
    ?>

    
</body>
</html>