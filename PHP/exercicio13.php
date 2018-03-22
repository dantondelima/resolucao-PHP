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
            $vi = $_GET["vi"];
            $acel = $_GET["acel"];
            $dur = $_GET["dur"];
            $vf = $vi + $acel * $dur * 3.6;

            echo "A velocidade final atingida é de $vf km/h";
        ?>
    </div>
</body>
</html>