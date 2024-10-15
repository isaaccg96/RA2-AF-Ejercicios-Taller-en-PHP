<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    2. Ejercicio con Operadores de Comparación y Lógicos
    Declara tres variables: $a, $by $c, con valores numéricos diferentes. Utilice
    operadores de comparación y lógicos para verificar si $aes mayor que $b y si $ces
    menor que $a. Imprima un mensaje que indique si ambas condiciones son
    verdaderas o si alguna es falsa.
    -->
    <?php
        $a = 1;
        $b = 2;
        $c = 3;
        if($a > $b){
            echo "a es mayor que b";
        }else{
            echo "a no es mayor que b";
            if($c < $a){
                echo "c es menor que a";
            }else{
                echo "c no es menor que a";
            }
        }
        //
        $condicion1 = $a > $b;
        $condicion2 = $c < $a;
        if($condicion1 && $condicion2){
            echo "ambas verdaderas";
        }else{
            echo "alguna es falsa";
        }
    ?>
    
</body>
</html>