<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Estruturas condicionais Switch</title>
    <style>
        h2 {
        font: 15pt Arial; /*Usado para definir tamanho e fonte*/
        color: blue; /*Usado para definir a cor da fonte */
        font-weight: bold; /*Usado para deixar a fonte em negrito */
        }       
    </style>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2: 
                $r = pow($n,3); //$n**3 Ao cubo
                break;
            case 3: 
                $r = sqrt($n); //Sn ^ (0.5);
        }
        echo "O resultado da operação solicitada foi $r."
    ?>
    <a href="Exercicio001.html">Voltar</a>
</div>    
</body>
</html>