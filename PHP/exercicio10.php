<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 10</title>
</head>
<body>
    <div>
        <?php 
            $celsius = $_GET['celsius'];
            $fahrenheit = $celsius / 5 * 9 + 32;
            $kelvin = $celsius + 273;

            echo "<h3>A temperatura $celsius graus celsius é igual a: <br>$fahrenheit graus fahrenheit <br>$kelvin na escala Kelvin</h3>";
        ?>
    </div>
</body>
</html>