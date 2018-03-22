<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 18</title>
</head>
<body>
    <div>
        <?php 
            $valores = array();
            $pago = $_GET["pago"];
            for ($i=1; $i <=5 ; $i++) { 
                array_push($valores, $_GET["p".$i]);
            }
            $tot = 0;
            for ($i=0; $i <= 4 ; $i++) { 
                $tot += $valores[$i];
            }
            $troco = $pago - $tot;
            if ($troco < 0) {
                printf("Faltou R$%.2f", abs($troco));
            }
            else {
                printf("O troco é de R$%.2f", $troco);
            }
            
        ?>
    </div>
</body>
</html>