<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
</head>
<body>
    <!-- 

    Tema 2: Sintaxis PHP

    1. Ejercicio con echo y HTML Embebido:
    Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
    formulario debe contener un campo de texto para el nombre y un botón de envío.
    Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
    página PHP. 
    -->
    <form method="post" action="ra2af.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_POST != null){
            $fname = $_POST["fname"];
            echo "Hola $fname"; 
        }
    ?>
    
</body>
</html>