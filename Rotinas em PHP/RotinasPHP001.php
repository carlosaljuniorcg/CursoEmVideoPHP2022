<!DOCTYPE html>
<html lang="pt-br">
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
        //Função... Procedimento sem retorno.
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s.</p>";
        }
        soma (3, 4);
        soma (8, 2);
        soma (13, 7);
        $x = 9;
        $y = 17;
        soma ($x, $y);
    ?>
</div>    
</body>
</html>