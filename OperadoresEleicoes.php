<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores aritméticos</title>
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
        //Operadores logicos &&(E) ||(OU) XOU(idêntico) !(NÃO)
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "<h2>Quem nasceu em $ano tem idade de $idade anos.<h2/>";
        $tipo = ($idade>=18 && $idade<65)?"Obrigatório":"Não obrigat[orio";
        echo "<br/><h3>E dessa forma seu voto é $tipo.</h3>";
        
    ?>
</div>    
</body>
</html>