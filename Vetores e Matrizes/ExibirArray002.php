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
        //Geranciar Vetores 
        $v = array("C", "A", "R", "L", "O", "S");
        print_r($v);
        $v[] = "A";//No final do vetor
        array_push($v, "N");//Adiciona um item no final do vetor
        array_unshift($v, "L");//Adiciona um item no inicio do vetor
        //array_shift($v, "L");//Exclui um item do inicio
        //array_pop($v, "N") Exclui o item adicionado no final
        echo "O vetor tem ".count($v)." elementos. <br/>";//.count conta os elementos dos vetores.
        print_r($v); //Exibir vetores, ou qualquer objeto que seja uma coleção.
        //var_dump($v);//Exibi vetores de uma forma mais detalhada.

    ?>
    </pre>
</div>    
</body>
</html>