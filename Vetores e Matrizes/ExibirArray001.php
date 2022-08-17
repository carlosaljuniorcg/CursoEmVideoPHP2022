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
    <pre>
    <?php
        $v = array("C", "A", "R", "L", "O", "S");
        $v[] = "A";//No final do vetor
        echo "O vetor tem ".count($v)." elementos. <br/>";//.count conta os elementos dos vetores.
        print_r($v); //Exibir vetores, ou qualquer objeto que seja uma coleção.
        var_dump($v);//Exibi vetores de uma forma mais detalhada.

    ?>
    </pre>
</div>    
</body>
</html>