<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores aritméticos</title>
    <style>
        h2 {
        font: 15pt Arial; /*Usado para definir tamanho e fonte*/
        color: blue; /*Usado para definir a cor da fonte */
        font-weight: bold; /*Usado para deixar a fonte em negrito */
        }       
        div {
            font: 15pt Arial; /*Usado para definir tamanho e fonte*/
            color: blue; /*Usado para definir a cor da fonte */
            font-weight: bold; /*Usado para deixar a fonte em negrito */
        }
    </style>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a ".number_format($rq, 2);
        
    ?>
    <a href="IntergracçãoHTML+PHP.php"> Voltar</a> 
</div>    
</body>
</html>