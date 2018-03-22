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
        <form action="exercicio18-2.php" method="GET">
            <?php 
                for ($i=1; $i <=5 ; $i++) { 
                    echo "<label for='produto".$i."'>Produto ".$i.": </label>";
                    echo "<input type='number' step='0.01' min='1' name='p".$i."'><br><br>" ;
                }
            ?>
            <label for="pago">Valor pago</label>
            <input type="number" name="pago" min="1" step="0.01">
            <input type="submit" value="Realizar compra">
        </form>
    </div>
</body>
</html>