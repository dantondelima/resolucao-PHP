<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 15</title>
</head>
<body>
    <div>
        <?php 
            $cota = $_GET["cota"];
            $vd = $_GET["vd"];
            $vr = $cota * $vd;
            echo " $vd dólares na cotação inserida é igual a $vr reais";
        ?>
    </div>
</body>
</html>