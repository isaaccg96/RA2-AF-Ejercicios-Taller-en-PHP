<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
</head>
<body>
    <!-- 
    3. Ejercicio con switchpara Menús
    Crea un menú de opciones con switch, donde el usuario pueda elegir entre
    "Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
    operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
    mensaje de error.
    -->
    <?php

        $num1 = 2;
        $num2 = 0;
        $opcion = 1;
        switch ($opcion) {
            case 1:
                $resultado = $num1 + $num2;
                echo "Suma: $resultado";
                break;
            case 2:
                $resultado = $num1 - $num2;
                echo "Resta: $resultado";
                break;
            case 3:
                $resultado = $num1 * $num2;
                echo "Multiplicación: $resultado";
                break;
            case 4:
                if ($num2 === 0) {
                    echo "Error, no existe la división por 0";
                } else {
                    $resultado = $num1 / $num2;
                    echo "División: $resultado";
                }
                break;
            default:
                echo "Opción incorrecta, elija una de las cuatro opciones";
        }
    ?>
</body>
</html>