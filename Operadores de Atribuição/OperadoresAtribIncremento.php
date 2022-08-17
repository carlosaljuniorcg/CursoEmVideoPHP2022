<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de atribuição de Incremento</title>
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
        $atual = $_GET["aa"];
        echo "<h2>Meu ano atual é $atual</h2>";//Fazendo um encremento
        echo "O ano anterior é ". ++$atual;//Adicionando um ano baseado a linha anterior.
        echo "<br/>O ano anterior é ". ++$atual;
        

    ?>
</div>
</body>
</html>