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
        //Criando matrizes. Array dentro de array.
        $m = array(array(6,4), array(4,9), array(3,2));
        $m[0][1]=$m[2][0];//Mudando um array atual
        print_r($m);
    ?>
</div>    
</body>
</html>