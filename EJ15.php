<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
</head>
<body>
    <!-- 
    3. Ejercicio con Diferencias entre Arrays
    Define dos arrays: $array1con los valores "rojo", "verde", "azul", y
    $array2con "verde", "amarillo", "azul". Usamos array_diff()para
    determinar qué colores están en $array1pero no en $array2. Imprime el
    resultado.
    -->
    <?php
        $array1 = ["Rojo","Verde","Azul"];
        $array2 = ["Verde","Amarillo","Azul"];
        $diferentes = array_diff($array1,$array2);
        echo $diferentes;     
    ?>
</body>
</html>