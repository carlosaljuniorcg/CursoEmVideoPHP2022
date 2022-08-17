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
        //Criar um procedimento que use a passagem por referência
        function teste1 ($x) {
            $x += 2;
            echo"<p>O valor de X é $x.</p>";
        }
        $a = 3;
        teste1 ($a);
        echo"<p>O valor de A é $a.</p>";

        function teste2 (&$x) {
            $x += 2;
            echo"<p>O valor de X é $x.</p>";
        }
        $a = 3;
        teste2 ($a);
        echo"<p>O valor de A é $a.</p>";
    ?>
</div>    
</body>
</html>