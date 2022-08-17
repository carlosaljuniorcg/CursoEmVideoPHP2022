<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritméticas em PHP</title>
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
        $v1 = $_GET["x"];//Usado para chamar um número expresso na linha de comando.
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 e ". abs($v2); //Valor absoluto
        echo "<br/>O valor de de $v1<sup>$v2</sup> é ".pow($v1, $v2); //Ao cubo utilizando a função SUP.
        echo "<br/>A raiz de $v1 é ". sqrt($v1);//Raiz quadrada
        echo "<br/>O valor de $v2 arredondado é ".round($v2); //Arredonda o valor
        echo "<br/>O valor de $v2 arredondado é ".ceil($v2); //Arredonda sempre para cima.
        echo "<br/>O valor de $v2 arredondado é ".floor($v2); //Arredonda sempre para baixo.
        echo "<br/>A parte inteira de $v2 é ".intval($v2); //Pega apenas a parte inteira de um número.
        echo "<br/>O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");

    ?>
</div>
    
</body>
</html>