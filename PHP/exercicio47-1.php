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
        <form action="../PHP/exercicio47-2.php" method="GET">  
        <?php 
            $n = $_GET["n"];

            for ($i=1; $i <= $n; $i++) { 
                echo "<label for='n".$i."'> n".$i.":</label>";
                echo "<input type='number' name='n".$i."' step='1'><br><br>"; 
            }
            
            echo "<input type='number' name='n' value='$n' min='$n' max='$n' style='display:none;'><br><br>"; 
            echo "<input type='submit' value='Calcular'>";
        ?>
        </form>
    </div>
</body>
</html>