<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 29</title>
</head>
<body>
    <div>
        <?php 
            $vi = $_GET["vi"];
            $acel = $_GET["acel"];
            $tempo= $_GET["tempo"];

            $vf = $vi + $acel * $tempo;
            if ($vf <= 40) {
                echo "Veículo muito lento";
            }
            elseif ($vf > 40 && $vf <= 60) {
                echo "Velocidade permitida";
            } 
            elseif ($vf > 60 && $vf <= 80) {
                echo "Velocidade de cruzeiro";
            }
            elseif ($vf > 80 && $vf <= 120) {
                echo "Veículo rápido";
            }
            else {
                echo "Veículo muito rápido";
            }
        ?>
    </div>
</body>
</html>