<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    3. Ejercicio con Variables y Constantes Complejas
    Declara una llamada constante GRAVITYcon el valor 9.8. Luego, crea una función
    que acepta el nombre de un planeta y, si el planeta es "Tierra", multiplica un valor de
    masa ingresado por la gravedad (utilizando la constante). Usa variables para
    almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada.
    -->
    <?php
        define("GRAVITY",9.8);
        function calcularFuerzaGravedad($Planeta,$masa){
            $Planeta = strtolower($Planeta);
            if($Planeta === "tierra"){
                $fuerzaGravedad = GRAVITY * $masa;
                return $fuerzaGravedad;
            }        
        }
        echo calcularFuerzaGravedad("Tierra",40);
    ?>
    
</body>
</html>