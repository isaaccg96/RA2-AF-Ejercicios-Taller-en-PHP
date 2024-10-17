<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
</head>
<body>
    <!-- 
    1.Ejercicio con Arrays y Recorrido Completo:
    Crea un array llamado $numerosque contiene los números del 1 al 10. Luego, usa
    un bucle foreachpara recorrer el array y multiplicar cada número por 2. Almacena
    los resultados en un nuevo array y muestra ambos arrays.
    -->
    <?php
        $numeros = [1,2,3,4,5,6,7,8,9,10];
        $numeros2 = [];
        $contador = 0;
        foreach($numeros as $numero){
            $numeros2[$contador] = $numero*2;
            $contador++;
        }

        foreach($numeros as $numero){
            echo $numero;
        }

        foreach($numeros2 as $numero2){
            echo $numero2;
        }
    ?>
</body>
</html>