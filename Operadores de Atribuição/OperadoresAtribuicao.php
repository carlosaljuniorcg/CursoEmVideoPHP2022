<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de atribuição</title>
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
        $preco = $_GET["p"];//Usando o valor descrito manualmente
        echo "O preço do produto é R$". number_format($preco, 2, ",") ;//Preço do produto
        $preco += $preco*10/100;//Fazendo um acréscimo de 10%
        echo "<br/>E o novo preço com 10% de aumento será de R$.".number_format($preco, 2, ",", ".");//Aumento de 10%
        $preco -= $preco*10/100;//Fazendo um desconto de 10%
        echo "<br/>E o novo preço com 10% de desconto será de R$".number_format($preco, 2, ",", ".");//Desconto de 10% e usando o number_format para formatar o valor
    ?>
</div>
</body>
</html>