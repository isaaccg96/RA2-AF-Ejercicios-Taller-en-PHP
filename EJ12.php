<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    2. Ejercicio con Bucledo-while:
    Escribe un script en PHP que use un bucle do-whilepara pedir al usuario que
    ingrese un número positivo. Si el número ingresado es negativo, el script debe
    continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
    número positivo ingresado.
    -->
    <?php
        do{
            echo '<form method="POST">';
            echo '<label for="numeroPositivo">Introduzca numero positivo :</label>';
            echo '<input type="number" id="numeroPositivo" name="numeroPositivo" required>';
            echo '<button type="submit">Enviar</button>';
            echo '</form>';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numeroPositivo = $_POST['numeroPositivo'];               
            }else{
                $numeroPositivo = 0;
            }   
        }while($numeroPositivo < 0);
        echo $numeroPositivo;
     ?>
</body>
</html>