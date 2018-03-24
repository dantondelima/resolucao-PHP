<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Exercício 28</title>
</head>
<body>
    <div>
        <?php 
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];
            $sexo = $_GET["sexo"];

            $imc = $peso / pow($altura, 2);
            if ($sexo == "Masculino") {
                if($imc < 20){
                    echo "Abaixo do peso";
                }
                elseif ($imc >= 20 && $imc < 25) {
                   echo "Peso ideal";
                } 
                else {
                    echo "Acima do peso";
                }
            }
            else {
                if($imc < 19){
                    echo "Abaixo do peso";
                }
                elseif ($imc >= 19 && $imc < 24) {
                   echo "Peso ideal";
                } 
                else {
                    echo "Acima do peso";
                }
            }
        ?>
    </div>
</body>
</html>