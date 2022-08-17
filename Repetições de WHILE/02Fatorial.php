<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Estruturas de repetição WHILE</title>
    
</head>
<body>
<div>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o fatorial de $v.</h1>";
        $c = $v;
        $fat = 1;
        do { 
            $fat = $fat * $c;
            $c--;
        } while ($c >= 1);
        echo"<h2>$v ! = $fat";
    ?>
    <p><a href="02Fatorial.html">Voltar</a></p>
</div>    
</body>
</html>