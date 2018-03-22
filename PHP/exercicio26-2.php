<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 26</title>
</head>
<body>
    <div>
        <?php 
            $l1 = $_GET["l1"];
            $l2 = $_GET["l2"];
            $l3 = $_GET["l3"];

            if($l1 + $l2 > $l3 && $l1 + $l3 > $l2 && $l2 + $l3 > $l1)
            {
                if ($l1 == $l2 && $l1 == $l3) {
                    echo "É triângulo equilátero";
                }
                elseif ($l1 != $l2 && $l2 != $l3 && $l1 != $l3) {
                    echo "É triângulo escaleno";
                }
                else {
                    echo "É triângulo isósceles";
                }
            }
            else {
                echo "Não forma triângulo";
            }
        ?>
    </div>
</body>
</html>