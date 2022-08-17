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
        //Colocar os itens em ordem.
        $v = array("C", "A", "R", "L", "O", "S");
        print_r($v);
        sort($v);//Coloca em ordem os indices e elementos
        //asort($v);//Coloca em ordem apenas o elementos. Os indices não mudam.
        //rsort($v);//Reverte a ordem dos itens.
        //arsort($v);//Coloca na ordem reversa apenas os elementos.
        //ksort($v);//Coloca em ordem apenas os indices
        //krsort($v);//Coloca em ordem reversa apenas os indices.
        print_r($v);

    ?>
</div>    
</body>
</html>