<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    Tema 5: Estructuras de Control

    1. Ejercicio con if, else, elseifpara Determinar Edad
    Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
    estructura if, elseif, elsepara imprimir un mensaje diferente según la edad:
    "Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
    "Eres alcalde" (> 65).
    -->
    <?php
        echo '<form method="POST">';
        echo '<label for="edad">Edad:</label>';
        echo '<input type="number" id="edad" name="edad" required>';
        echo '<button type="submit">Enviar</button>';
        echo '</form>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $edad = $_POST['edad'];
            if($edad < 18){
                echo "Eres menor de edad";
            }elseif ($edad <= 35){
                echo "Eres adulto joven";
            }elseif ($edad <= 65){
                echo "Eres adulto";
            }else{
                echo "Eres alcalde";
            }
        }     
     ?>
</body>
</html>