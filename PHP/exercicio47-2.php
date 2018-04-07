<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 42</title>
</head>
<body>
    <div>
        <?php 
            $valores = array();
            $n = $_GET["n"];
            $soma = 0;
            $pp = 0;
            $pn = 0;   
            for ($i=1; $i <= $n; $i++) { 
                array_push($valores, $_GET["n".$i]);
            }

            sort($valores);
            $maior = $valores[$n - 1];
            $menor = $valores[0];
            for ($i=0; $i < $n; $i++) { 
               $soma += $valores[$i];
               if($valores[$i] < 0)
               {
                   $pn++;
               }
               elseif ($valores[$i] > 0) {
                   $pp++;
               }
            }

            $pn = ($pn / $n) * 100;
            $pp = ($pp / $n) * 100;

            $media = $soma / $n;
            echo "O maior é $maior e o menor é $menor <br>";
            echo "A soma dos valores é $soma<br>";
            echo "A média aritmética dos valores é: $media<br>";
            echo "A porcentagem de número positivos é $pp%<br>";
            echo "A porcentagem de número negativos é $pn%";            
        ?>
    </div>
</body>
</html>