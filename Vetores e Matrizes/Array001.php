<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Vetores e Matrizes 2022</title>
    
</head>
<body>
<div>
    <?php
        //Array
        $n = array(3, 5, 8, 2);
        $n[] = 7;
        print_r($n);//Exibir vetores, ou qualquer objeto que seja uma coleção.

        //Range
        $m = range(5, 20, 2);// Começa com 5 e vai até 20. Contando de 5 em 5.
        //FOREACH = para cada valor (é uma estrutura de repetição).
        foreach($m as $valor) {
            echo"$valor ";
        }
        //print_r($m);

    ?>
    
</div>    
</body>
</html>