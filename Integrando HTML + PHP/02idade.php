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
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
    ?>
    <a href="AtividadeIdade.html">Voltar</a>
</div>    
</body>
</html>