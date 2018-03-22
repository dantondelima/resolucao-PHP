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
        <form action="exercicio26-2.php" method="GET">
            <?php 
                for ($i=1; $i <=3 ; $i++) { 
                    echo "<label for='lado".$i."'>Lado ".$i.": </label>";
                    echo "<input type='number' min='1' name='l".$i."'><br><br>" ;
                }
            ?>
            <input type="submit" value="Verificar">
        </form>
    </div>
</body>
</html>